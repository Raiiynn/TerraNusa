<?php
require 'config.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada data.";
}
?>
