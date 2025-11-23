
<!-- Login/Register Modal -->
<div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-xl w-full max-w-md mx-4 p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 id="modalTitle" class="text-2xl font-bold text-primary">Masuk</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <form id="authForm" action="auth_handler.php" method="POST" class="space-y-4">
            <input type="hidden" id="authType" name="authType" value="login">
            
            <div id="usernameField" class="hidden">
                <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" name="username" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
            </div>
            <button type="submit" class="w-full bg-secondary text-white py-2 px-4 rounded-md hover:bg-opacity-90 transition">
                <span id="submitButtonText">Masuk</span>
            </button>
        </form>

        <!-- Link untuk admin di pojok kanan bawah -->
        <div class="mt-4 text-right">
            <a href="get.php?page=login_admin" class="text-xs text-gray-500 hover:text-secondary">admin</a>
        </div>
    </div>
</div>


<script>
// Auth Modal Functions
function openModal(type) {
    const modal = document.getElementById('authModal');
    const modalTitle = document.getElementById('modalTitle');
    const submitButtonText = document.getElementById('submitButtonText');
    const usernameField = document.getElementById('usernameField');
    const authTypeInput = document.getElementById('authType');
    
    authTypeInput.value = type;
    
    if (type === 'login') {
        modalTitle.textContent = "Masuk";
        submitButtonText.textContent = "Masuk";
        usernameField.classList.add('hidden');
    } else if (type === 'register') {
        modalTitle.textContent = "Daftar";
        submitButtonText.textContent = "Daftar";
        usernameField.classList.remove('hidden');
    }

    modal.classList.remove('hidden');
}

function closeModal() {
    const modal = document.getElementById('authModal');
    modal.classList.add('hidden');
}

// Update UI after successful login/register
function updateUIAfterAuth(username, profilePic = 'default-profile.png') {
    const userSection = document.getElementById('userSection');
    
    userSection.innerHTML = `
        <div class="flex items-center space-x-4">
            <img src="${profilePic}" alt="Profile" class="h-8 w-8 rounded-full">
            <span class="text-sm font-semibold text-white">${username}</span>
        </div>
        <a href="?page=logout" class="bg-secondary/80 hover:bg-secondary px-4 py-2 rounded text-white">Logout</a>
    `;
    
    closeModal();
}

// Handle form submission
document.getElementById('authForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('auth/auth_handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert(data.message);
            if (formData.get('authType') === 'register') {
                updateUserSection(formData.get('username'), 'default-profile.png');
            } else {
                window.location.href = 'get.php?page=index';
            }
            closeModal();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan, silakan coba lagi');
    });
});

function updateUserSection(username, profileImage) {
    const userSection = document.getElementById('userSection');
    userSection.innerHTML = `
        <div class="flex items-center space-x-4">
            <a href="?page=update_profile" class="flex items-center space-x-2">
                <img src="${profileImage}" alt="Profile" class="h-8 w-8 rounded-full">
                <span class="text-sm font-semibold text-white">${username}</span>
            </a>
            <a href="?page=logout" class="bg-secondary/80 hover:bg-secondary px-4 py-2 rounded text-white">Logout</a>
        </div>
    `;
}
</script>