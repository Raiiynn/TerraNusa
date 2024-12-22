<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TerraNusa - Jelajahi Keindahan Yogyakarta</title>
    <script src="{{ url('https://cdn.tailwindcss.com') }}"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#245B4F',
                        'secondary': '#6A9C89',
                        'tertiary': '#C4DAD2',
                        'background': '#E9EFEC',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background">
    <!-- Navbar -->
    <header id="navbar" class="bg-primary text-white transition-transform duration-300 ease-in-out">
        <div class="w-[85%] max-w-[1400px] mx-auto px-8 py-4 flex justify-between items-center">
            <div class="h-10">
                <a href="index.html" class="block">
                    <img src="frontend\images\LogoTerraNusa.png" alt="TerraNusa Logo" class="h-12 w-auto">
                </a>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="index.html" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Beranda</a></li>
                    <li><a href="destinasi.html" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Destinasi</a></li>
                    <li><a href="paket-travel.html" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">Paket Travel</a></li>
                    <li><a href="about.html" class="text-sm hover:text-tertiary relative py-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-0.5 after:bg-tertiary after:transition-all after:duration-300 hover:after:w-full">About</a></li>
                </ul>
            </nav>
            <div class="flex space-x-2">
                <button onclick="openModal('login')" class="bg-secondary/80 px-4 py-2 rounded text-sm hover:bg-secondary transition">Masuk</button>
                <button onclick="openModal('register')" class="bg-tertiary/90 text-primary px-4 py-2 rounded text-sm hover:bg-tertiary transition">Daftar</button>
            </div>
        </div>
    </header>

    <!-- Modal Login/Register -->
    <div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 id="modalTitle" class="text-2xl font-bold text-primary"></h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <form onsubmit="handleSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                </div>
                <button type="submit" class="w-full bg-secondary text-white py-2 px-4 rounded-md hover:bg-opacity-90 transition">
                    <span id="submitButtonText">Masuk</span>
                </button>
            </form>

            <div class="relative flex items-center justify-center my-4">
                <div class="absolute border-t border-gray-300 w-full"></div>
                <span class="relative bg-white px-2 text-sm text-gray-500">atau lanjutkan dengan</span>
            </div>

            <div class="space-y-3">
                <button onclick="handleGoogleLogin()" class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-50 transition">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    Lanjutkan dengan Google
                </button>
                <button onclick="handleFacebookLogin()" class="w-full flex items-center justify-center gap-2 bg-[#1877F2] text-white py-2 px-4 rounded-md hover:bg-opacity-90 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Lanjutkan dengan Facebook
                </button>
            </div>
        </div>
    </div>

    <!-- Spacer div -->
    <div id="navbar-spacer" class="hidden"></div>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-primary text-white py-8">
        <div class="w-[85%] max-w-[1400px] mx-auto px-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-4 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">TerraNusa</h3>
                    <p>Jelajahi keindahan Indonesia bersama kami.</p>
                </div>
                <div class="w-full md:w-1/4 mb-4 md:mb-0">
                    <h4 class="font-bold mb-2">Hubungi Kami</h4>
                    <p>Email: info@terranusa.com</p>
                    <p>Telepon: +62 123 4567 890</p>
                </div>
                <div class="w-full md:w-1/4">
                    <h4 class="font-bold mb-2">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-tertiary transition-colors">Facebook</a>
                        <a href="#" class="hover:text-tertiary transition-colors">Twitter</a>
                        <a href="#" class="hover:text-tertiary transition-colors">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-secondary text-center">
                <p>&copy; 2023 TerraNusa. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script>
        // Hero Image Slider
        document.addEventListener('DOMContentLoaded', function() {
            // Konfigurasi untuk kedua slider
            const sliders = [
                {
                    container: '.destination-slider-container',
                    track: '.destination-slider-track',
                    items: '.destination-slider-container .slider-item',
                    position: 0
                },
                {
                    container: '.package-slider-container',
                    track: '.package-slider-track',
                    items: '.package-slider-container .slider-item',
                    position: 0
                }
            ];
        
            // Fungsi untuk mengupdate dimensi slider
            function updateSliderDimensions(slider) {
                const container = document.querySelector(slider.container);
                const track = document.querySelector(slider.track);
                const items = document.querySelectorAll(slider.items);
                
                const containerWidth = container.offsetWidth;
                const itemsPerView = window.innerWidth >= 768 ? 3 : 1;
                const itemWidth = containerWidth / itemsPerView;
                
                items.forEach(item => {
                    item.style.width = `${itemWidth}px`;
                });
                
                const maxPosition = -(Math.max(0, items.length - itemsPerView) * itemWidth);
                
                return { track, itemWidth, maxPosition };
            }
        
            // Fungsi untuk menggerakkan slider
            window.moveSlider = function(sliderIndex, direction) {
                const slider = sliders[sliderIndex];
                const { track, itemWidth, maxPosition } = updateSliderDimensions(slider);
                
                if (direction === 'next' && slider.position > maxPosition) {
                    slider.position = Math.max(maxPosition, slider.position - itemWidth);
                } else if (direction === 'prev' && slider.position < 0) {
                    slider.position = Math.min(0, slider.position + itemWidth);
                }
                
                track.style.transform = `translateX(${slider.position}px)`;
            }
        
            // Attach click handlers ke tombol
            document.querySelectorAll('[data-slider]').forEach(button => {
                button.addEventListener('click', (e) => {
                    const sliderIndex = parseInt(button.dataset.slider);
                    const direction = button.dataset.direction;
                    moveSlider(sliderIndex, direction);
                });
            });
        
            // Initialize sliders
            sliders.forEach((slider, index) => {
                updateSliderDimensions(slider);
            });
        
            // Update on resize
            window.addEventListener('resize', () => {
                sliders.forEach(slider => {
                    slider.position = 0;
                    const track = document.querySelector(slider.track);
                    track.style.transform = 'translateX(0)';
                    updateSliderDimensions(slider);
                });
            });
        });
    </script>
    
    <script>
        // Navbar Scroll Functionality
        let lastScrollTop = 0;
        const navbar = document.getElementById('navbar');
        const navbarSpacer = document.getElementById('navbar-spacer');
        const navbarHeight = navbar.offsetHeight;
        
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
        

        // Modal Functionality
        const modal = document.getElementById('authModal');
        const modalTitle = document.getElementById('modalTitle');
        const submitButtonText = document.getElementById('submitButtonText');
        let currentMode = 'login';

        function openModal(mode) {
            currentMode = mode;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            
            if (mode === 'login') {
                modalTitle.textContent = 'Masuk';
                submitButtonText.textContent = 'Masuk';
            } else {
                modalTitle.textContent = 'Daftar';
                submitButtonText.textContent = 'Daftar';
            }
        }

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        function handleSubmit(event) {
            event.preventDefault();
            console.log('Form submitted:', currentMode);
        }

        function handleGoogleLogin() {
            console.log('Google login clicked');
            window.location.href = "https://accounts.google.com/o/oauth2/v2/auth";
        }

        function handleFacebookLogin() {
            console.log('Facebook login clicked');
            window.location.href = "https://www.facebook.com/v12.0/dialog/oauth";
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });
        // Fade-in Animation
function checkVisibility() {
    const elements = document.querySelectorAll('.opacity-0.translate-y-5');
    elements.forEach(element => {
        const rect = element.getBoundingClientRect();
        const isVisible = (rect.top <= window.innerHeight * 0.8);
        
        if (isVisible) {
            element.classList.remove('opacity-0', 'translate-y-5');
            element.classList.add('opacity-100', 'translate-y-0');
        }
    });
}

window.addEventListener('load', checkVisibility);
window.addEventListener('scroll', checkVisibility);

        
    </script>
</body>
</html>