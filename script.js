document.addEventListener('DOMContentLoaded', function() {
    let currentPosition = 0;
    const track = document.querySelector('.slider-track');
    const items = document.querySelectorAll('.slider-item');

    function updateSliderDimensions() {
        const containerWidth = document.querySelector('.slider-container').offsetWidth;
        const itemsPerView = window.innerWidth >= 768 ? 3 : 1;
        const itemWidth = containerWidth / itemsPerView;
        const maxPosition = -((items.length - itemsPerView) * itemWidth);

        items.forEach(item => {
            item.style.width = `${itemWidth}px`;
        });

        return { itemWidth, maxPosition, itemsPerView };
    }

    function moveSlider(direction) {
        const { itemWidth, maxPosition } = updateSliderDimensions();
        const moveAmount = itemWidth;

        if (direction === 'next' && currentPosition > maxPosition) {
            currentPosition -= moveAmount;
        } else if (direction === 'prev' && currentPosition < 0) {
            currentPosition += moveAmount;
        }

        currentPosition = Math.max(Math.min(currentPosition, 0), maxPosition);

        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = `translateX(${currentPosition}px)`;

        setTimeout(() => {
            track.style.transition = '';
        }, 500);
    }

    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    });

    track.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                moveSlider('next');
            } else {
                moveSlider('prev');
            }
        }
    }

    updateSliderDimensions();

    window.addEventListener('resize', () => {
        currentPosition = 0;
        track.style.transform = `translateX(0)`;
        updateSliderDimensions();
    });

    window.moveSlider = moveSlider;
});

let lastScrollTop = 0;
const navbar = document.getElementById('navbar');
const navbarSpacer = document.getElementById('navbar-spacer');
const navbarHeight = navbar.offsetHeight;

navbarSpacer.style.height = navbarHeight + 'px';

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 0) {
        navbar.classList.add('navbar-fixed');
        navbarSpacer.classList.remove('hidden');
    } else {
        navbar.classList.remove('navbar-fixed');
        navbarSpacer.classList.add('hidden');
    }

    if (scrollTop > lastScrollTop && scrollTop > navbarHeight) {
        navbar.classList.add('navbar-hidden');
    } else {
        navbar.classList.remove('navbar-hidden');
    }

    lastScrollTop = scrollTop;
});

const modal = document.getElementById('authModal');
const modalTitle = document.getElementById('modalTitle');
const submitButtonText = document.getElementById('submitButtonText');
let currentMode = 'login';

document.getElementById("form_login").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "") {
        alert("Username tidak boleh kosong!");
       
    } else if (password === "") {
        alert("Password tidak boleh kosong!");
       
    } else if (username !== "SyntechLabs") {
        alert("Username tidak ditemukan!");
       
    } else if (password !== "1234") {
        alert("Password salah!");
       
    }
});


document.getElementById("username").addEventListener("mouseover", function() {
    this.setAttribute('title', 'isikan username sesuai dengan registrasi');
});

document.getElementById("password").addEventListener("mouseover", function() {
    this.setAttribute('title', 'isikan password sesuai dengan registrasi');
});

var TombolLogin = document.getElementById("TombolLogin");
var usernameField = document.getElementById("username");
var passwordField = document.getElementById("password");

TombolLogin.addEventListener("mouseover", function() {
    if (usernameField.value === "" || passwordField.value === "") {
        TombolLogin.textContent = "Isikan Dulu Ya!";
        TombolLogin.classList.add("hover-red");
    }
});

TombolLogin.addEventListener("mouseout", function() {
    TombolLogin.textContent = "Login";
    TombolLogin.classList.remove("hover-red");
});

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
