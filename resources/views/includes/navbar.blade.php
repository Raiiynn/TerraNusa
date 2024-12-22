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