<?php
// config.php
$host = 'localhost';
$dbname = 'terranusa_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Function untuk generate nomor order
function generateOrderNumber() {
    return 'TN' . date('Ymd') . rand(1000, 9999);
}
?>