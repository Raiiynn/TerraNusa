<?php
require_once 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/auth_modal.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'] ?? null;
    
    if ($order_id) {
        try {
            // Verify the order belongs to the user and is in pending status
            $check_stmt = $conn->prepare("
                SELECT o.* FROM orders o
                WHERE o.id = ? AND o.customer_name = (
                    SELECT username FROM users WHERE id = ?
                ) AND o.payment_status = 'pending'
            ");
            
            $check_stmt->bind_param("ii", $order_id, $_SESSION['user_id']);
            $check_stmt->execute();
            $result = $check_stmt->get_result();
            
            if ($result->num_rows > 0) {
                // Update order status to cancelled
                $update_stmt = $conn->prepare("UPDATE orders SET payment_status = 'cancelled' WHERE id = ?");
                $update_stmt->bind_param("i", $order_id);
                
                if ($update_stmt->execute()) {
                    $_SESSION['success_message'] = "Pesanan berhasil dibatalkan";
                } else {
                    $_SESSION['error_message'] = "Gagal membatalkan pesanan";
                }
            } else {
                $_SESSION['error_message'] = "Pesanan tidak ditemukan atau tidak dapat dibatalkan";
            }
        } catch (Exception $e) {
            $_SESSION['error_message'] = "Terjadi kesalahan sistem";
            error_log($e->getMessage());
        }
    }
}

// Redirect back
header("Location: my-bookings.php");
exit;
?>