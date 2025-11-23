<?php

require_once 'includes/db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/auth_handler.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Handle order cancellation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel_order'])) {
    $order_id = $_POST['order_id'];
    
    // Update order status to cancelled
    $cancel_stmt = $conn->prepare("UPDATE orders SET payment_status = 'cancelled' WHERE id = ? AND payment_status = 'pending'");
    if ($cancel_stmt) {
        $cancel_stmt->bind_param("i", $order_id);
        if ($cancel_stmt->execute()) {
            $_SESSION['success_message'] = "Pesanan berhasil dibatalkan.";
        } else {
            $_SESSION['error_message'] = "Gagal membatalkan pesanan.";
        }
    }
    
    // Redirect to refresh the page
    header("Location: my-bookings.php");
    exit;
}

// Get user's orders
try {
    $query = "SELECT o.*, p.name as package_name 
              FROM orders o 
              LEFT JOIN packagess p ON o.package_id = p.id 
              WHERE o.customer_name = (
                  SELECT username 
                  FROM users 
                  WHERE id = ?
              ) 
              ORDER BY o.created_at DESC";

    $history_stmt = $conn->prepare($query);
    if (!$history_stmt) {
        throw new Exception("Error preparing history statement: " . $conn->error);
    }

    $history_stmt->bind_param("i", $user_id);
    $history_stmt->execute();
    $history_result = $history_stmt->get_result();
    $orders = $history_result->fetch_all(MYSQLI_ASSOC);

} catch (Exception $e) {
    error_log("Error in my-bookings.php: " . $e->getMessage());
    $error_message = "Terjadi kesalahan dalam mengambil data pemesanan.";
}

$pageTitle = "Riwayat Pemesanan";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- HTML content remains the same as before -->




<main class="pt-32">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-2xl font-bold text-primary mb-8">Riwayat Pemesanan</h1>

            <?php if (isset($error_message)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <?php if (empty($orders)): ?>
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <p class="text-gray-600">Belum ada riwayat pemesanan.</p>
                    <a href="index.php" class="inline-block mt-4 text-primary hover:text-primary/80">
                        Jelajahi Paket Wisata
                    </a>
                </div>
            <?php else: ?>
                <div class="space-y-6">
                    <?php foreach ($orders as $order): ?>
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <p class="text-sm text-gray-600">Kode Pesanan</p>
                                        <p class="font-bold"><?php echo $order['order_code']; ?></p>
                                    </div>
                                    <div>
                                        <?php
                                        $statusClasses = [
                                            'pending' => 'bg-yellow-100 text-yellow-800',
                                            'paid' => 'bg-green-100 text-green-800',
                                            'cancelled' => 'bg-red-100 text-red-800'
                                        ];
                                        $statusLabels = [
                                            'pending' => 'Menunggu Verifikasi',
                                            'paid' => 'Terverifikasi',
                                            'cancelled' => 'Dibatalkan'
                                        ];
                                        $statusClass = $statusClasses[$order['payment_status']] ?? 'bg-gray-100 text-gray-800';
                                        $statusLabel = $statusLabels[$order['payment_status']] ?? 'Unknown';
                                        ?>
                                        <span class="px-3 py-1 rounded-full text-sm <?php echo $statusClass; ?>">
                                            <?php echo $statusLabel; ?>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm text-gray-600">Paket Wisata</p>
                                        <p class="font-medium"><?php echo $order['package_name']; ?></p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600">Tanggal Tour</p>
                                        <p class="font-medium"><?php echo date('d F Y', strtotime($order['tour_date'])); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600">Jumlah Peserta</p>
                                        <p class="font-medium"><?php echo $order['participant_count']; ?> orang</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600">Total Pembayaran</p>
                                        <p class="font-medium">Rp <?php echo number_format($order['total_amount'], 0, ',', '.'); ?></p>
                                    </div>
                                </div>
                                
                                <div class="border-t pt-4 flex justify-between items-center">
                                    <div class="text-sm text-gray-600">
                                        Dipesan pada: <?php echo date('d F Y H:i', strtotime($order['created_at'])); ?>
                                    </div>
                                    
                                    <?php if ($order['payment_status'] === 'pending'): ?>
                                        <form action="" method="POST" class="inline-block">
                                            <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                            <button type="submit" name="cancel_order" 
                                                    class="px-4 py-2 border border-red-500 text-red-500 rounded-lg hover:bg-red-50"
                                                    onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')">
                                                Batalkan
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>