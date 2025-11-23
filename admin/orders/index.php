<?php
require_once 'includes/db.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../login.php");
    exit;
}

// Get filters
$status = $_GET['status'] ?? 'all';
$search = $_GET['search'] ?? '';

// Build query
$query = "SELECT o.*, p.name as packagess 
          FROM orders o 
          JOIN packagess p ON o.package_id = p.id 
          WHERE 1=1";

if ($status !== 'all') {
    $query .= " AND o.payment_status = '$status'";
}

if ($search) {
    $query .= " AND (o.order_code LIKE '%$search%' OR o.customer_name LIKE '%$search%' OR o.customer_phone LIKE '%$search%')";
}

$query .= " ORDER BY o.created_at DESC";

$orders = $conn->query($query)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pesanan - TerraNusa Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/admin/includes/sidebar.php'; ?>

        <!-- Main content -->
        <div class="flex-1">
            <div class="p-8">
                <div class="mb-8 flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800">Kelola Pesanan</h1>
                    
                    <!-- Search -->
                    <form class="flex gap-4">
                        <input type="text" name="search" value="<?php echo $search; ?>" 
                               placeholder="Cari pesanan..."
                               class="px-4 py-2 border rounded-lg">
                        <select name="status" class="px-4 py-2 border rounded-lg">
                            <option value="all" <?php echo $status === 'all' ? 'selected' : ''; ?>>
                                <option value="all" <?php echo $status === 'all' ? 'selected' : ''; ?>>Semua Status</option>
                            <option value="pending" <?php echo $status === 'pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="paid" <?php echo $status === 'paid' ? 'selected' : ''; ?>>Lunas</option>
                            <option value="cancelled" <?php echo $status === 'cancelled' ? 'selected' : ''; ?>>Batal</option>
                        </select>
                        <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90">
                            Cari
                        </button>
                    </form>
                </div>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="mb-4 bg-green-50 text-green-600 p-4 rounded-lg">
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </div>
                <?php endif; ?>

                <!-- Orders Table -->
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kode Pesanan
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Pelanggan
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Paket
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php foreach ($orders as $order): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="view.php?id=<?php echo $order['id']; ?>" 
                                       class="text-primary hover:text-primary/80">
                                        <?php echo $order['order_code']; ?>
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?php echo date('d/m/Y H:i', strtotime($order['created_at'])); ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900"><?php echo $order['customer_name']; ?></div>
                                    <div class="text-sm text-gray-500"><?php echo $order['customer_phone']; ?></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?php echo $order['packagess']; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
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
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?php if ($order['payment_status'] === 'pending'): ?>
                                    <form action="update-status.php" method="POST" class="inline-block">
                                        <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                        <button type="submit" name="status" value="paid"
                                                class="text-green-600 hover:text-green-900">
                                            Konfirmasi
                                        </button>
                                        <span class="mx-1">|</span>
                                        <button type="submit" name="status" value="cancelled"
                                                class="text-red-600 hover:text-red-900">
                                            Batalkan
                                        </button>
                                    </form>
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