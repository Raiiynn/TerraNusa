<?php
require_once 'includes/db.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../login.php");
    exit;
}

$order_id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("
    SELECT o.*, p.name as packagess, p.duration 
    FROM orders o 
    JOIN packagess p ON o.package_id = p.id 
    WHERE o.id = ?
");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();

if (!$order) {
    header("Location: get.php?page=index_admin");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan - TerraNusa Admin</title>
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
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Detail Pesanan</h1>
                        <p class="text-sm text-gray-600">Kode: <?php echo $order['order_code']; ?></p>
                    </div>
                    <a href="get.php?page=index_admin" class="text-gray-600 hover:text-gray-900">
                        ← Kembali
                    </a>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Order Details -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Basic Info -->
                        <div class="bg-white rounded-xl shadow p-6">
                            <h2 class="text-lg font-semibold mb-4">Informasi Pesanan</h2>
                            <dl class="grid grid-cols-2 gap-4">
                                <div>
                                    <dt class="text-sm text-gray-500">Paket Wisata</dt>
                                    <dd class="font-medium"><?php echo $order['packagess']; ?></dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500">Durasi</dt>
                                    <dd class="font-medium"><?php echo $order['duration']; ?></dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500">Tanggal Tour</dt>
                                    <dd class="font-medium"><?php echo date('d F Y', strtotime($order['tour_date'])); ?></dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500">Jumlah Peserta</dt>
                                    <dd class="font-medium"><?php echo $order['participant_count']; ?> orang</dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Customer Info -->
                        <div class="bg-white rounded-xl shadow p-6">
                            <h2 class="text-lg font-semibold mb-4">Informasi Pelanggan</h2>
                            <dl class="grid grid-cols-2 gap-4">
                                <div>
                                    <dt class="text-sm text-gray-500">Nama</dt>
                                    <dd class="font-medium"><?php echo $order['customer_name']; ?></dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-500">No. HP</dt>
                                    <dd class="font-medium"><?php echo $order['customer_phone']; ?></dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- Payment Info -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-xl shadow p-6">
                            <h2 class="text-lg font-semibold mb-4">Informasi Pembayaran</h2>
                            <div class="space-y-4">
                                <div>
                                    <span class="text-sm text-gray-500">Status</span>
                                    <?php if ($order['payment_status'] === 'pending'): ?>
                                        <span class="ml-2 px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    <?php elseif ($order['payment_status'] === 'paid'): ?>
                                        <span class="ml-2 px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                                            Lunas
                                        </span>
                                    <?php else: ?>
                                        <span class="ml-2 px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">
                                            Batal
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Total Pembayaran</span>
                                    <p class="text-2xl font-bold text-primary">
                                        Rp <?php echo number_format($order['total_amount'], 0, ',', '.'); ?>
                                    </p>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Tanggal Pesan</span>
                                    <p class="font-medium">
                                        <?php echo date('d F Y H:i', strtotime($order['created_at'])); ?>
                                    </p>
                                </div>

                                <?php if ($order['payment_status'] === 'pending'): ?>
                                <hr class="my-4">
                                <form action="update-status.php" method="POST">
                                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                    <div class="grid grid-cols-2 gap-4">
                                        <button type="submit" name="status" value="paid"
                                                class="w-full px-4 py-2
                                                <button type="submit" name="status" value="paid"
                                                class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                            Konfirmasi Pembayaran
                                        </button>
                                        <button type="submit" name="status" value="cancelled"
                                                class="w-full px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                            Batalkan Pesanan
                                        </button>
                                    </div>
                                </form>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-white rounded-xl shadow p-6 mt-6">
                            <h2 class="text-lg font-semibold mb-4">Tindakan Cepat</h2>
                            <div class="space-y-3">
                                <a href="https://wa.me/<?php echo $order['customer_phone']; ?>" 
                                   target="_blank"
                                   class="flex items-center gap-2 text-gray-600 hover:text-green-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                    Hubungi via WhatsApp
                                </a>
                                <button onclick="cetakInvoice(<?php echo $order['id']; ?>)"
                                        class="flex items-center gap-2 text-gray-600 hover:text-primary">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                                    </svg>
                                    Cetak Invoice
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function cetakInvoice(orderId) {
        // Buka halaman invoice di tab baru
        window.open(`print-invoice.php?id=${orderId}`, '_blank');
    }
    </script>
</body>
</html>