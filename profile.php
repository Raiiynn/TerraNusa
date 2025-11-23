<?php
// profile.php
require_once 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: get.php?page=index");
    exit;
}

// Get user data
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>


<body>
<?php include 'includes/header.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <main class="container mx-auto px-4 py-8 mt-20">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold text-primary mb-6">Profil Saya</h1>

            <form action="auth/update_profile.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div class="flex items-center space-x-6">
                    <div class="flex-shrink-0">
                        <img src="<?php echo $user['profile_image'] ?? 'default-profile.jpg'; ?>" 
                             alt="Profile" 
                             class="h-32 w-32 rounded-full object-cover">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Update Foto Profil
                        </label>
                        <input type="file" name="profile_image" accept="image/*" class="mt-1">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password Baru (Kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" name="new_password" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                    </div>
                </div>

                <div class="flex justify-end space-x-4">
                    <button type="submit" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

            <!-- Delete Account Section -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h2 class="text-lg font-medium text-red-600">Hapus Akun</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Setelah akun Anda dihapus, semua data akan terhapus secara permanen.
                </p>
                <button onclick="confirmDelete()" class="mt-4 bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                    Hapus Akun
                </button>
            </div>
        </div>
    </main>

    <script>
    function confirmDelete() {
        if (confirm('Anda yakin ingin menghapus akun? Tindakan ini tidak dapat dibatalkan.')) {
            window.location.href = 'auth/delete_account.php';
        }
    }
    </script>
</body>
</html>