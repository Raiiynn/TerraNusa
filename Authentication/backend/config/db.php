<?php
$db_host = 'localhost';
$db_user = 'root';  // Sesuaikan dengan username database Anda
$db_pass = '';      // Sesuaikan dengan password database Anda
$db_name = 'terranusa_db';  // Sesuaikan dengan nama database Anda

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>