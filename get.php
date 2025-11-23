<?php
// Mulai sesi (jika menggunakan session untuk login pengguna)
session_start();

// Ambil parameter 'page' dari URL, default ke 'index'
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

// Daftar halaman yang diperbolehkan
$allowed_pages = [
    'index' => 'index.php',
    'destinasi' => 'destinasi.php',
    'paket_travel' => 'paket_travel.php',
    'pemesanan' => 'my-bookings.php',
    'profile' => 'profile.php',
    'orders' => 'admin/orders/index.php', // Halaman utama untuk orders
    'view_order' => 'orders/view.php', // Detail order
    'orders_admin' => 'admin/orders/orders.php',
    'logout' => 'logout.php',
    'logout_admin' => 'admin/logout.php',
    'login_admin' => 'admin/login.php',
    'index_admin' => 'admin/index.php',
    'verifyorder_admin' => 'admin/orders/verify-order.php',
    'vieworder_admin' => 'admin/orders/view-order.php' // Halaman view-order
];

// Validasi halaman dan include file
if (array_key_exists($page, $allowed_pages)) {
    include $allowed_pages[$page];
} else {
    include '404.php'; // Halaman 404 jika parameter tidak valid
}
?>
