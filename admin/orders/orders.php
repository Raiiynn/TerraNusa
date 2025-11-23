<?php
require_once 'includes/db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

// Get all orders
$orders = $conn->query("
    SELECT o.*, p.name as packagess 
    FROM orders o 
    JOIN packagess p ON o.package_id = p.id 
    ORDER BY o.created_at DESC
")->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - TerraNusa Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/admin/includes/sidebar.php'; ?>
        
        <div class="flex-1 p-8">
            <div class="mb-8">
                <h1 class="text-2xl font-bold">Daftar Pesanan</h1>
            </div>

            <div class="bg-white rounded-lg shadow">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Kode Pesanan
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Pelanggan
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Paket
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Tanggal Tour
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Total
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php foreach ($orders as $order): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php echo $order['order_code']; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php echo $order['customer_name']; ?><br>
                                    <span class="text-sm text-gray-500"><?php echo $order['customer_phone']; ?></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php echo $order['packagess']; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php echo date('d/m/Y', strtotime($order['tour_date'])); ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Rp <?php echo number_format($order['total_amount'], 0, ',', '.'); ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php 
                                    switch($order['payment_status']) {
                                        case 'pending':
                                            echo '<span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Pending</span>';
                                            break;
                                        case 'paid':
                                            echo '<span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Lunas</span>';
                                            break;
                                        case 'cancelled':
                                            echo '<span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Batal</span>';
                                            break;
                                        default:
                                            echo '<span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Unknown</span>';
                                    }
                                    ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php if ($order['payment_status'] === 'pending'): ?>
                                        <a href="get.php?page=verifyorder_admin&id=<?php echo $order['id']; ?>" 
                                           class="text-primary hover:text-primary/80">
                                            Verifikasi
                                        </a>
                                    <?php elseif ($order['payment_status'] === 'cancelled'): ?>
                                        <span class="text-gray-400">Dibatalkan</span>
                                    <?php else: ?>
                                        <a href="get.php?page=vieworder_admin&id=<?php echo $order['id']; ?>"
                                           class="text-gray-600 hover:text-gray-800">
                                            Detail
                                        </a>
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
</body>
</html>