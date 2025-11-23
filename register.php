<?php
// Include konfigurasi koneksi database
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validasi apakah kata sandi dan konfirmasi kata sandi cocok
    if ($password !== $confirmPassword) {
        echo "Kata sandi tidak cocok.";
        exit;
    }

    // Cek apakah email sudah terdaftar
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email sudah terdaftar.";
        exit;
    }

    // Simpan data ke database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil! <a href='login.html'>Masuk di sini</a>";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - TerraNusa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#16423C',
                        secondary: '#6A9C89',
                        tertiary: '#C4DAD2',
                        background: '#E9EFEC',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-3xl font-bold text-primary mb-6 text-center">Daftar di TerraNusa</h1>
        <form action="register.php" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required>
            </div>
            <div class="mb-6">
                <label for="confirm-password" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Kata Sandi</label>
                <input type="password" id="confirm-password" name="confirm-password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required>
            </div>
            <button type="submit" class="w-full bg-secondary text-white py-2 px-4 rounded-md hover:bg-secondary-dark transition duration-300">Daftar</button>
        </form>
        <p class="mt-4 text-center text-sm">
            Sudah punya akun? <a href="login.html" class="text-secondary hover:underline">Masuk di sini</a>
        </p>
        <p class="mt-2 text-center text-sm">
            <a href="index.html" class="text-secondary hover:underline">Kembali ke Beranda</a>
        </p>
    </div>
</body>
</html>
