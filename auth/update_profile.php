<?php
// update_profile.php
session_start();
require_once '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_id = $_SESSION['user_id'];
    
    // Handle profile image upload
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['profile_image']['name'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        if (in_array($ext, $allowed)) {
            $new_filename = uniqid() . "." . $ext;
            $upload_path = "uploads/profiles/" . $new_filename;
            
            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $upload_path)) {
                $sql_image = ", profile_image = ?";
            }
        }
    }

    // Update user information
    $sql = "UPDATE users SET username = ?, email = ?";
    $params = ["ss", $username, $email];
    
    if (isset($sql_image)) {
        $sql .= $sql_image;
        $params[0] .= "s";
        $params[] = $upload_path;
    }
    
    if (!empty($_POST['new_password'])) {
        $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        $sql .= ", password = ?";
        $params[0] .= "s";
        $params[] = $new_password;
    }
    
    $sql .= " WHERE id = ?";
    $params[0] .= "i";
    $params[] = $user_id;
    
    $stmt = $conn->prepare($sql);
    call_user_func_array([$stmt, 'bind_param'], $params);
    
    if ($stmt->execute()) {
        $_SESSION['username'] = $username;
        if (isset($upload_path)) {
            $_SESSION['profile_image'] = $upload_path;
        }
        $_SESSION['success'] = "Profile updated successfully";
    } else {
        $_SESSION['error'] = "Failed to update profile";
    }
    
    header("Location: ../profile.php");
    exit;
}
?>