<?php

require_once 'includes/db.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'] ?? null;
    $status = $_POST['status'] ?? null;

    if ($order_id && $status) {
        try {
            // Get current order status
            $check_stmt = $conn->prepare("SELECT payment_status FROM orders WHERE id = ?");
            $check_stmt->bind_param("i", $order_id);
            $check_stmt->execute();
            $result = $check_stmt->get_result();
            $current_order = $result->fetch_assoc();

            if ($current_order) {
                // Only allow specific status transitions
                $valid_update = false;

                if ($current_order['payment_status'] === 'pending') {
                    if ($status === 'paid' || $status === 'cancelled') {
                        $valid_update = true;
                    }
                }

                if ($valid_update) {
                    $stmt = $conn->prepare("UPDATE orders SET payment_status = ? WHERE id = ?");
                    $stmt->bind_param("si", $status, $order_id);
                    
                    if ($stmt->execute()) {
                        $_SESSION['success'] = "Status pesanan berhasil diperbarui menjadi " . 
                            ($status === 'paid' ? 'Lunas' : 'Dibatalkan');
                    } else {
                        $_SESSION['error'] = "Gagal memperbarui status pesanan";
                    }
                } else {
                    $_SESSION['error'] = "Perubahan status tidak valid";
                }
            }
        } catch (Exception $e) {
            $_SESSION['error'] = "Terjadi kesalahan sistem";
            error_log($e->getMessage());
        }
    }
}

// Redirect back to previous page
$redirect = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header("Location: $redirect");
exit;
?>