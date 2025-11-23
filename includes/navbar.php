<header id="navbar" class="bg-primary text-white transition-transform duration-300 ease-in-out">
    <div class="w-[85%] max-w-[1400px] mx-auto px-8 py-4 flex justify-between items-center">
        <div class="h-10">
            <a href="?page=index" class="block">
                <img src="Gambar\LogoTerraNusa.png" alt="TerraNusa Logo" class="h-12 w-auto">
            </a>
        </div>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="get.php?page=index" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Beranda</a></li>
                <li><a href="get.php?page=destinasi" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Destinasi</a></li>
                <li><a href="get.php?page=paket_travel" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Paket Travel</a></li>
                <li><a href="get.php?page=pemesanan" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Pemesanan</a></li>-->
                <li><a href="get.php?page=profile" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Profile</a></li>
            </ul>
        </nav>
        <div class="flex space-x-2" id="userSection">
            <!-- Bagian login/register jika belum login -->
            <?php if (!isset($_SESSION['user_id'])): ?>
                <button onclick="openModal('login')" class="bg-secondary/80 hover:bg-secondary px-4 py-2 rounded text-white">Masuk</button>
                <button onclick="openModal('register')" class="bg-tertiary/90 hover:bg-tertiary px-4 py-2 rounded text-primary">Daftar</button>
            <?php else: ?>
                <!-- Bagian untuk username dan gambar profil -->
                <div class="flex items-center space-x-4">
                    <img id="userProfilePic" src="default-profile.jpg" alt="Profile" class="h-8 w-8 rounded-full">
                    <span id="usernameDisplay" class="text-sm font-semibold text-white"></span>
                </div>
                <a href="?page=logout" class="bg-secondary/80 hover:bg-secondary px-4 py-2 rounded text-white">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php include('auth/auth_modal.php'); ?>

<!-- Spacer div -->
<div id="navbar-spacer" class="hidden"></div>

<script>
// Navbar Scroll Functionality
let lastScrollTop = 0;
const navbar = document.getElementById('navbar');
const navbarSpacer = document.getElementById('navbar-spacer');
const navbarHeight = navbar.offsetHeight;

// Set height for spacer based on navbar height
navbarSpacer.style.height = `${navbarHeight}px`;

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > 0) {
        navbar.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'bg-primary/95', 'backdrop-blur-sm');
        navbarSpacer.classList.remove('hidden');
    } else {
        navbar.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'bg-primary/95', 'backdrop-blur-sm');
        navbarSpacer.classList.add('hidden');
    }
    
    if (scrollTop > lastScrollTop && scrollTop > navbarHeight) {
        navbar.classList.add('-translate-y-full');
    } else {
        navbar.classList.remove('-translate-y-full');
    }
    
    lastScrollTop = scrollTop;
});


</script>