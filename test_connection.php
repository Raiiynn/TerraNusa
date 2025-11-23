<?php
$servername = "db"; // Nama service database di docker-compose.yml
$username = "root"; // Sesuaikan dengan docker-compose.yml
$password = "root_password"; // Sesuaikan dengan docker-compose.yml
$dbname = "terranusa"; // Nama database Anda

// Coba koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
