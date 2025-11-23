<?php
require_once 'includes/db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $status = $_POST['status']; // 'paid' or 'pending'
    
    $stmt = $conn->prepare("UPDATE orders SET payment_status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $order_id);
    
    if ($stmt->execute()) {
        $_SESSION['success'] = "Status pembayaran berhasil diperbarui";
    }
    
    header("Location: get.php?page=orders_admin");
    exit;
}

// Get order details
$order_id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("
    SELECT o.*, p.name as packagess
    FROM orders o 
    JOIN packagess p ON o.package_id = p.id 
    WHERE o.id = ?
");

$stmt->bind_param("i", $order_id);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();

if (!$order) {
    header("Location: get.php?page=orders_admin");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Pembayaran - TerraNusa Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/admin/includes/sidebar.php'; ?>
        
        <div class="flex-1 p-8">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-2xl font-bold mb-8">Verifikasi Pembayaran</h1>
                
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Kode Pesanan</h3>
                            <p class="text-lg font-medium"><?php echo $order['order_code']; ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Nama Pelanggan</h3>
                            <p class="text-lg font-medium"><?php echo $order['customer_name']; ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">No. Telepon</h3>
                            <p class="text-lg font-medium"><?php echo $order['customer_phone']; ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Tanggal Tour</h3>
                            <p class="text-lg font-medium"><?php echo date('d F Y', strtotime($order['tour_date'])); ?></p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Jumlah Peserta</h3>
                            <p class="text-lg font-medium"><?php echo $order['participant_count']; ?> orang</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Total Pembayaran</h3>
                            <p class="text-lg font-medium">Rp <?php echo number_format($order['total_amount'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                    
                    <?php if ($order['payment_status'] === 'pending'): ?>
                    <div class="flex gap-4">
                        <form method="POST" class="flex-1">
                            <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                            <input type="hidden" name="status" value="paid">
                            <button type="submit" 
                                    class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                                Verifikasi Pembayaran
                            </button>
                        </form>
                    </div>
                    <?php else: ?>
                    <div class="text-center py-4">
                        <p class="text-lg font-medium text-green-600">
                            Pembayaran telah diverifikasi
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="text-center">
                    <a href="get.php?page=orders_admin" class="text-gray-600 hover:text-gray-800">
                        Kembali ke Daftar Pesanan
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>