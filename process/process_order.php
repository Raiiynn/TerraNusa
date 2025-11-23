<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debug data yang diterima - gunakan log file
    file_put_contents('debug.log', print_r($_POST, true), FILE_APPEND);

    // Generate order code
    $order_code = 'TN' . date('ymd') . rand(1000, 9999);

    try {
        // Pastikan semua data yang diperlukan ada
        if (empty($_POST['package_id']) || empty($_POST['customer_name']) || 
            empty($_POST['customer_phone']) || empty($_POST['tourDate']) || 
            empty($_POST['participantCount']) || empty($_POST['total_amount'])) {
            throw new Exception("Semua field harus diisi");
        }

        // Insert ke database
        $stmt = $conn->prepare("INSERT INTO orders (order_code, package_id, customer_name, customer_phone, tour_date, participant_count, total_amount) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }
        
        $stmt->bind_param("sisssid", 
            $order_code,
            $_POST['package_id'],
            $_POST['customer_name'],
            $_POST['customer_phone'],
            $_POST['tourDate'],
            $_POST['participantCount'],
            $_POST['total_amount']
        );

        if ($stmt->execute()) {
            // Simpan data ke session
            $_SESSION['order_id'] = $stmt->insert_id;
            $_SESSION['order_code'] = $order_code;

            // Redirect ke halaman pembayaran
            header("Location: ../payment.php");
            exit;
        } else {
            throw new Exception("Error executing statement: " . $stmt->error);
        }
    } catch (Exception $e) {
        // Log error alih-alih menggunakan echo
        file_put_contents('error.log', date('Y-m-d H:i:s') . " - Error: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
        // Tampilkan pesan error (opsional, hanya untuk pengembangan)
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
}
?>
