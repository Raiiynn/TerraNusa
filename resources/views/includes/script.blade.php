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