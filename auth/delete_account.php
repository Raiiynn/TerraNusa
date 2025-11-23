<?php
// delete_account.php
session_start();
require_once '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);

if ($stmt->execute()) {
    session_destroy();
    header("Location: ../index.php");
} else {
    $_SESSION['error'] = "Failed to delete account";
    header("Location: profile.php");
}
?>