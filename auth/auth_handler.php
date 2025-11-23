<?php
// auth_handler.php
session_start();
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['authType'];

    if ($action === 'register') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Cek apakah email sudah terdaftar
        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        
        if ($check->get_result()->num_rows > 0) {
            echo json_encode(['status' => 'error', 'message' => 'Email sudah terdaftar']);
            exit;
        }

        // Insert user baru
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        
        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['username'] = $username;
            echo json_encode(['status' => 'success', 'message' => 'Registrasi berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Registrasi gagal']);
        }
    } 
    else if ($action === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, username, password, profile_image FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['profile_image'] = $user['profile_image'] ?? 'default-profile.png';
            echo json_encode(['status' => 'success', 'message' => 'Login berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Email atau password salah']);
        }
    }
    exit;
}
?>
