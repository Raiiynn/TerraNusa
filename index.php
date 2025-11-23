<?php
$pageTitle = "Beranda";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


        <!-- Hero section -->
        <section class="py-48 bg-cover bg-center relative">
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000" style="background-image: url('Gambar/tes1.jpg'); opacity: 1;" id="sliderImage1"></div>
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000" style="background-image: url('Gambar/tes.jpg'); opacity: 0;" id="sliderImage2"></div>
            <div class="w-[85%] max-w-[1400px] mx-auto px-8 relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 text-center">Jelajahi Keindahan Yogyakarta dengan TerraNusa</h2>
                <p class="text-white text-center mb-8 text-lg">Temukan destinasi wisata terbaik, penginapan nyaman, dan pengalaman perjalanan tak terlupakan.</p>
                <div class="flex justify-center">
                    <a href="get.php?page=destinasi" class="bg-secondary text-white px-6 py-3 rounded-full text-base font-semibold hover:bg-opacity-90 transition duration-300">
                        Mulai Petualangan
                    </a>
                </div>
            </div>
        </section>

        <!-- Destinasi Populer Section -->
<section class="py-16 bg-white">
    <div class="w-[85%] max-w-[1400px] mx-auto px-8">
        <h2 class="text-2xl font-bold text-primary text-left mb-8">Destinasi Populer</h2>
        <!-- Slider container -->
        <div class="relative">
            <!-- Slider wrapper -->
            <div class="destination-slider-container overflow-hidden">
                <div class="destination-slider-track flex transition-transform duration-300 ease-in-out flex-nowrap">
                    <!-- Card 1 -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <a href="destinasi.html" class="block">
                            <div class="relative h-[340px] rounded-lg overflow-hidden group cursor-pointer">
                                <img src="Gambar/Tritis.jpg" alt="Parang Tritis" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                    <h3 class="text-xl font-bold text-white mb-2">Pantai Parangtritis</h3>
                                    <p class="text-sm text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">Nikmati keindahan Pantai parangtritis.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <a href="destinasi.html" class="block">
                            <div class="relative h-[340px] rounded-lg overflow-hidden group cursor-pointer">
                                <img src="Gambar/HehaForest.jpg" alt="Heha Sky View" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                    <h3 class="text-xl font-bold text-white mb-2">Heha Forest</h3>
                                    <p class="text-sm text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">Dengan keindahan bulannya bisa membuat hati senang.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <a href="destinasi.html" class="block">
                            <div class="relative h-[340px] rounded-lg overflow-hidden group cursor-pointer">
                                <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                    <h3 class="text-xl font-bold text-white mb-2">Keraton Yogyakarta</h3>
                                    <p class="text-sm text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">Nikmati kemegahan arsitektur kuno yang penuh nilai historis.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 4 -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <a href="destinasi.html" class="block">
                            <div class="relative h-[340px] rounded-lg overflow-hidden group cursor-pointer">
                                <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                    <h3 class="text-xl font-bold text-white mb-2">Malioboro</h3>
                                    <p class="text-sm text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">Rasakan suasana malam dengan alunan musik jalanan dan seni budaya.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 5 -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <a href="destinasi.html" class="block">
                            <div class="relative h-[340px] rounded-lg overflow-hidden group cursor-pointer">
                                <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                    <h3 class="text-xl font-bold text-white mb-2">Merapi</h3>
                                    <p class="text-sm text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">Gunung legendaris dengan pemandangan matahari terbit yang menakjubkan.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-3 rounded-full shadow-lg z-10 focus:outline-none group" data-slider="0" data-direction="prev">
                <svg class="w-6 h-6 text-primary transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-3 rounded-full shadow-lg z-10 focus:outline-none group" data-slider="0" data-direction="next">
                <svg class="w-6 h-6 text-primary transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Lihat Selengkapnya button -->
        <div class="flex justify-end mt-8">
            <a href="get.php?page=destinasi" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-secondary text-secondary hover:bg-secondary hover:text-white transition-all duration-300 rounded-lg">
                <span>Lihat Selengkapnya</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

        <!-- Wave divider setelah Destinasi - yang dari white ke background -->
        <div class="relative h-[150px] overflow-hidden bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 w-full h-full" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#E9EFEC" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,128C672,128,768,160,864,176C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
        
<!-- Why Choose Us Section -->
        <!-- Why Choose Us Section -->
<section class="bg-background py-20">
    <div class="w-[85%] max-w-[1400px] mx-auto px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami menawarkan pengalaman perjalanan terbaik dengan layanan profesional dan harga yang kompetitif</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105">
                <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3 text-center">Terpercaya</h3>
                <p class="text-gray-600 text-center">Pengalaman bertahun-tahun melayani ribuan pelanggan dengan kepuasan tinggi</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105">
                <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3 text-center">Harga Terbaik</h3>
                <p class="text-gray-600 text-center">Penawaran harga kompetitif dengan kualitas layanan premium</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105">
                <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3 text-center">Responsif</h3>
                <p class="text-gray-600 text-center">Layanan cepat tanggap 24/7 untuk kebutuhan perjalanan Anda</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105">
                <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3 text-center">Pengalaman Terbaik</h3>
                <p class="text-gray-600 text-center">Menciptakan momen perjalanan yang tak terlupakan</p>
            </div>
        </div>
    </div>
</section>

        <!-- Wave divider sebelum Paket Travel - yang tadinya dari background ke white -->
        <div class="relative h-[150px] overflow-hidden bg-background">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 w-full h-full" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#FFFFFF" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,106.7C672,117,768,171,864,176C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

<!-- Paket Travel Section -->
<section class="py-16 bg-white">
    <div class="w-[85%] max-w-[1400px] mx-auto px-8">
        <h2 class="text-2xl font-bold text-primary text-left mb-8">Paket Travel</h2>
        <!-- Slider container -->
        <div class="relative">
            <!-- Slider wrapper -->
            <div class="package-slider-container overflow-hidden">
                <div class="package-slider-track flex transition-transform duration-300 ease-in-out flex-nowrap">
                    <!-- Card 1 - One Day Trip -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                            <div class="relative h-[240px]">
                                <img src="Gambar/Tritis.jpg" alt="Paket Pantai" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">One Day</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-primary mb-2">Paket Pantai Selatan</h3>
                                <p class="text-gray-600 mb-4">Pantai Parangtritis, Pantai Depok, Gumuk Pasir, dan Hutan Pinus</p>
                                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                    <li>Termasuk transportasi AC</li>
                                    <li>Makan siang seafood</li>
                                    <li>Guide lokal</li>
                                    <li>Tiket masuk objek wisata</li>
                                </ul>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-secondary">Rp 350.000</span>
                                    <button class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 - 2D1N -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                            <div class="relative h-[240px]">
                                <img src="Gambar/HehaForest.jpg" alt="Paket Alam" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">2D1N</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-primary mb-2">Nature Escape</h3>
                                <p class="text-gray-600 mb-4">Heha Sky View, Kalibiru, Pinus Pengger, dan Tebing Breksi</p>
                                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                    <li>Hotel bintang 3</li>
                                    <li>Makan 3x</li>
                                    <li>Transportasi AC</li>
                                    <li>Guide profesional</li>
                                </ul>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-secondary">Rp 850.000</span>
                                    <button class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 - 3D2N -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                            <div class="relative h-[240px]">
                                <img src="Gambar/Keraton.jpg" alt="Cultural Heritage" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">3D2N</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-primary mb-2">Cultural Heritage</h3>
                                <p class="text-gray-600 mb-4">Keraton, Tamansari, Prambanan, Ratu Boko, Museum Sonobudoyo</p>
                                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                    <li>Hotel bintang 4</li>
                                    <li>Makan 7x</li>
                                    <li>Transport AC</li>
                                    <li>Guide profesional</li>
                                </ul>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-secondary">Rp 1.750.000</span>
                                    <button class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 - 4D3N -->
                    <div class="slider-item min-w-full md:min-w-[33.333%] px-2">
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                            <div class="relative h-[240px]">
                                <img src="Gambar/Malioboro.jpg" alt="Complete Yogya" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">4D3N</div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-primary mb-2">Complete Yogyakarta</h3>
                                <p class="text-gray-600 mb-4">Explores all the best spots in Yogyakarta</p>
                                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                    <li>Hotel bintang 4</li>
                                    <li>Makan 10x</li>
                                    <li>Transport premium</li>
                                    <li>Guide profesional</li>
                                </ul>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-secondary">Rp 3.500.000</span>
                                    <button class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Navigation buttons -->
            <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-3 rounded-full shadow-lg z-10 focus:outline-none group" data-slider="1" data-direction="prev">
                <svg class="w-6 h-6 text-primary transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-3 rounded-full shadow-lg z-10 focus:outline-none group" data-slider="1" data-direction="next">
                <svg class="w-6 h-6 text-primary transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Lihat Selengkapnya button -->
        <div class="flex justify-end mt-8">
            <a href="get.php?page=paket_travel" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-secondary text-secondary hover:bg-secondary hover:text-white transition-all duration-300 rounded-lg">
                <span>Lihat Selengkapnya</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

        <!-- Services Section -->
    </main>

    <!-- Footer -->
    <?php
require_once 'includes/footer.php';
?>
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