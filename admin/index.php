<?php
require_once 'includes/db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

// Get statistics
$total_orders = $conn->query("SELECT COUNT(*) as total FROM orders")->fetch_assoc()['total'];
$pending_orders = $conn->query("SELECT COUNT(*) as total FROM orders WHERE payment_status = 'pending'")->fetch_assoc()['total'];
$completed_orders = $conn->query("SELECT COUNT(*) as total FROM orders WHERE payment_status = 'paid'")->fetch_assoc()['total'];
$total_revenue = $conn->query("SELECT SUM(total_amount) as total FROM orders WHERE payment_status = 'paid'")->fetch_assoc()['total'] ?? 0;

// Get recent orders
$recent_orders = $conn->query("
    SELECT o.*, p.name as packagess 
    FROM orders o 
    JOIN packagess p ON o.package_id = p.id 
    ORDER BY o.created_at DESC 
    LIMIT 5
")->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TerraNusa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main content -->
        <div class="flex-1">
            <div class="p-8">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Orders -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-sm font-medium text-gray-500">Total Pesanan</h3>
                        <p class="text-3xl font-bold text-gray-900 mt-2"><?php echo $total_orders; ?></p>
                    </div>

                    <!-- Pending Orders -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-sm font-medium text-gray-500">Pesanan Pending</h3>
                        <p class="text-3xl font-bold text-yellow-600 mt-2"><?php echo $pending_orders; ?></p>
                    </div>

                    <!-- Completed Orders -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-sm font-medium text-gray-500">Pesanan Selesai</h3>
                        <p class="text-3xl font-bold text-green-600 mt-2"><?php echo $completed_orders; ?></p>
                    </div>

                    <!-- Total Revenue -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-sm font-medium text-gray-500">Total Pendapatan</h3>
                        <p class="text-3xl font-bold text-primary mt-2">Rp <?php echo number_format($total_revenue, 0, ',', '.'); ?></p>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white rounded-xl shadow">
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold text-gray-800">Pesanan Terbaru</h2>
                            <a href="get.php?page=orders" class="text-primary hover:text-primary/80">
                                Lihat Semua
                            </a>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kode Pesanan
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Paket
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pelanggan
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php foreach ($recent_orders as $order): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="orders/view.php?id=<?php echo $order['id']; ?>" 
                                           class="text-primary hover:text-primary/80">
                                            <?php echo $order['order_code']; ?>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php echo $order['packagess']; ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php echo $order['customer_name']; ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Rp <?php echo number_format($order['total_amount'], 0, ',', '.'); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php if ($order['payment_status'] === 'pending'): ?>
                                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">
                                                Pending
                                            </span>
                                        <?php elseif ($order['payment_status'] === 'paid'): ?>
                                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                                                Lunas
                                            </span>
                                        <?php else: ?>
                                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">
                                                Batal
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>