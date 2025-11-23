<?php
$pageTitle = "Paket Travel";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
    <style>

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        .no-scrollbar {
            -ms-overflow-style: none;
             scrollbar-width: none;
        }

        main {
            padding-top: 140px !important;
        }
    </style>
</head>

    <!-- Header Section -->
    <section class="pt-32 pb-16 bg-primary">
        <div class="container-custom">
            <h1 class="text-4xl font-bold text-white text-center mb-4">Paket Travel TerraNusa</h1>
            <p class="text-white/80 text-center max-w-2xl mx-auto">Pilih paket perjalanan yang sesuai dengan kebutuhan Anda. Kami menyediakan berbagai pilihan durasi untuk pengalaman wisata terbaik di Yogyakarta.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="py-16">
        <div class="container-custom">
            <!-- One Day Trip Section -->
            <section id="oneday" class="mb-16">
                <h2 class="text-2xl font-bold text-primary mb-8">One Day Trip</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/Tritis.jpg" alt="Paket Pantai" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
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
                                <a href="paket_pantaiselatan.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/Malioboro.jpg" alt="City Tour" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">One Day</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-2">City Tour Yogyakarta</h3>
                            <p class="text-gray-600 mb-4">Malioboro, Keraton, Taman Sari, dan Pasar Beringharjo</p>
                            <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                <li>Termasuk transportasi AC</li>
                                <li>Makan siang gudeg</li>
                                <li>Guide lokal</li>
                                <li>Tiket masuk objek wisata</li>
                            </ul>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-secondary">Rp 300.000</span>
                                <a href="paket_citytour.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/Merapi.jpg" alt="Merapi Tour" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">One Day</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-2">Merapi Adventure</h3>
                            <p class="text-gray-600 mb-4">Lava Tour Merapi, Museum Merapi, dan Bunker Kaliadem</p>
                            <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                <li>Termasuk Jeep 4x4 </li>
                                <li>Makan siang lokal</li>
                                <li>Guide profesional</li>
                                <li>Dokumentasi</li>
                            </ul>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-secondary">Rp 450.000</span>
                                <a href="paket_merapiadventure.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2D1N Section -->
            <section id="2d1n" class="mb-16">
                <h2 class="text-2xl font-bold text-primary mb-8">2 Hari 1 Malam</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/HehaForest.jpg" alt="Paket Alam" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
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
                                <a href="paket_nature.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3D2N Section -->
            <section id="3d2n" class="mb-16">
                <h2 class="text-2xl font-bold text-primary mb-8">3 Hari 2 Malam</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/Keraton.jpg" alt="Cultural Heritage" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
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
                                <li>Pertunjukan Ramayana Ballet</li>
                            </ul>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-secondary">Rp 1.750.000</span>
                                <a href="paket_cultural.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/Merapi.jpg" alt="Adventure Package" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">3D2N</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-2">Adventure Package</h3>
                            <p class="text-gray-600 mb-4">Merapi Trekking, Goa Pindul, Pantai Timang, Goa Jomblang</p>
                            <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                <li>Hotel bintang 3</li>
                                <li>Makan 7x</li>
                                <li>Peralatan safety</li>
                                <li>Guide profesional</li>
                                <li>Dokumentasi</li>
                            </ul>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-secondary">Rp 2.250.000</span>
                                <a href="paket_adventure.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4D3N Section -->
            <section id="4d3n" class="mb-16">
                <h2 class="text-2xl font-bold text-primary mb-8">4 Hari 3 Malam</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/Malioboro.jpg" alt="Complete Yogya" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
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
                                <li>Semua tiket masuk</li>
                                <li>Souvenir khas Jogja</li>
                            </ul>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-secondary">Rp 3.500.000</span>
                                <a href="paket_complete.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg group">
                        <div class="relative h-[240px]">
                            <img src="Gambar/HehaForest.jpg" alt="Premium Experience" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 right-4 bg-primary text-white px-4 py-1 rounded-full text-sm">4D3N</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-2">Premium Experience</h3>
                            <p class="text-gray-600 mb-4">Luxury tour with exclusive experiences</p>
                            <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                                <li>Hotel bintang 5</li>
                                <li>All meals included</li>
                                <li>Private transport</li>
                                <li>Professional guide</li>
                                <li>Exclusive dinner experience</li>
                                <li>Spa treatment</li>
                            </ul>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-secondary">Rp 5.500.000</span>
                                <a href="paket_premium.php" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary/90 transition">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <?php
require_once 'includes/footer.php';
?>

    <!-- Scripts -->
    <script>
        // Navbar scroll behavior
        let lastScroll = 0;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 0) {
                navbar.classList.add('bg-primary/95', 'backdrop-blur-md');
            } else {
                navbar.classList.remove('bg-primary/95', 'backdrop-blur-md');
            }

            if (currentScroll > lastScroll && currentScroll > 100) {
                navbar.classList.add('-translate-y-full');
            } else {
                navbar.classList.remove('-translate-y-full');
            }

            lastScroll = currentScroll;
        });

        // Package filtering functionality
        function filterPackages(category) {
            // Reset all buttons to default state
            const buttons = document.querySelectorAll('[id^="btn-"]');
            buttons.forEach(button => {
                button.classList.remove('bg-primary', 'text-white');
                button.classList.add('text-primary');
            });
            
            // Set active button
            const activeButton = document.getElementById(`btn-${category}`);
            activeButton.classList.remove('text-primary');
            activeButton.classList.add('bg-primary', 'text-white');
            
            // Filter content
            const sections = ['oneday', '2d1n', '3d2n', '4d3n'];
            
            if (category === 'all') {
                sections.forEach(section => {
                    document.getElementById(section).style.display = 'block';
                });
            } else {
                sections.forEach(section => {
                    document.getElementById(section).style.display = 
                        section === category ? 'block' : 'none';
                });
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            filterPackages('all');
        });
    </script>
</body>
</html>