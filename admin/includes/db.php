<?php
$servername = "db"; // Ganti localhost dengan nama service database di Docker Compose
$username = "root";
$password = "root_password"; // Sesuaikan dengan password dari docker-compose.yml
$dbname = "terranusa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>