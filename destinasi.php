


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi - TerraNusa</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <style>
        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: transform 0.3s ease-in-out;
            background-color: rgba(36, 91, 79, 0.95);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }
        .navbar-hidden {
            transform: translateY(-100%);
        }
        
        .nav-link {
            position: relative;
            padding: 0.25rem 0;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #C4DAD2;
            transition: width 0.3s ease-in-out;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1100;
        }

        .modal.active {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            animation: modalSlideIn 0.3s ease-out;
        }

        @keyframes modalSlideIn {
            from {
                transform: translateY(-10%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1rem 0;
        }

        .container-custom {
            width: 85%;
            margin: 0 auto;
            max-width: 1400px;
            padding: 0 2rem;
        }

        .modal-divider::before,
        .modal-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }

        .modal-divider span {
            padding: 0 0.5rem;
            color: #6b7280;
            font-size: 0.875rem;
        }
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
    
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
    
        .hover-scale {
            transition: transform 0.3s ease;
        }
    
        .hover-scale:hover {
            transform: scale(1.05);
        }
    
        .wave-divider {
            position: relative;
            height: 150px;
            overflow: hidden;
        }
    
        .wave-divider svg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
        }

        header {
            background-color: rgba(36, 91, 79, 0.95); /* Warna hijau tua dengan sedikit transparansi */
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        /* Slider styles */
        .slider-container {
            position: relative;
            width: 100%;
            padding: 0 1px;
        }

        .slider-track {
            transform: translateX(0);
            will-change: transform;
        }

        /* Card styles */
        .destination-card {
            height: 340px;
        }

        .package-card {
            height: 280px;
        }

        .card-title {
            font-size: 1.25rem;
        }

        .card-description {
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .slider-track {
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
            }
            
            .slider-item {
                scroll-snap-align: start;
            }
        }
    </style>
</head>

<body class="bg-background">
    <!-- Navbar -->

<?php
require_once 'includes/navbar.php';
?>

    <!-- Destinasi Section -->
    <section class="relative py-20" id="destinasi">
        <div class="container-custom mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-primary mb-6">Destinasi Wisata Terpopuler</h2>
            <p class="text-lg text-gray-600">Jelajahi keindahan Yogyakarta dan temukan pengalaman yang tak terlupakan!</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 container-custom mx-auto">
            <!-- Destinasi 1 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 2 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 3 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 4 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 5 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 6 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Prambanan.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Candi Prambanan</h3>
                        <p class="opacity-0 group-hover:opacity-100"> Abadikan momen indah di kompleks candi yang penuh pesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 7 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Indrayanti.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Indrayanti</h3>
                        <p class="opacity-0 group-hover:opacity-100">Hamparan pasir putih yang bersih dan lembut.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 8 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Kalibiru.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Kalibiru</h3>
                        <p class="opacity-0 group-hover:opacity-100">Udara segar dan suasana asri yang menenangkan.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 9 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Pinus.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pinus Pengger </h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan Kedamaian di Hutan Pinus yang Menawan.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 10 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/srigethuk.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold"> Air terjun Sri Gethuk</h3>
                        <p class="opacity-0 group-hover:opacity-100"> Nikmati Keajaiban Alam yang Menyegarkan.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 11 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/sonobudoyo.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Museum Sonobudoyo</h3>
                        <p class="opacity-0 group-hover:opacity-100">Pelajari perjalanan sejarah peradaban Jawa yang penuh makna.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 12 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/embung.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Embung Nglanggeran</h3>
                        <p class="opacity-0 group-hover:opacity-100">Embung Nglanggeran, destinasi wisata alam yang menawarkan ketenangan dan keindahan.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 13 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Monumen.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Monumen Jogja Kembali</h3>
                        <p class="opacity-0 group-hover:opacity-100">Napak Tilas Perjuangan Bangsa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 14 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/GoaPindul.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Cave Tubing Goa Pindul</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati serunya menyusuri sungai dalam gua menggunakan ban karet.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 15 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tebing Breksi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Tebing Breksi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati pemandangan eksotis tebing kapur dengan ukiran seni yang memukau.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 16 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Pantai Timang.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Timang</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 17 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Bukit Paralayang.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Bukit Paralayang</h3>
                        <p class="opacity-0 group-hover:opacity-100">Tempat favorit untuk paralayang dan menikmati sunset.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 18 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Heha SkyView.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha SkyView</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 19 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/TamanSari.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Taman Sari</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati suasana romantis di kolam pemandian para raja.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 20 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Alun-Alun Kidul.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Alun-Alun Kidul</h3>
                        <p class="opacity-0 group-hover:opacity-100">Tempat wisata malam dengan atraksi becak hias.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 21 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/KebunBuahMangunan.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Kebun Buah Mangunan</h3>
                        <p class="opacity-0 group-hover:opacity-100">Lanskap hijau yang menyejukkan mata.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 22 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/BukitPangukKediwung.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Bukit Panguk Kediwung</h3>
                        <p class="opacity-0 group-hover:opacity-100">Pemandangan sunrise terbaik di Jogja.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 23 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Bukitbintang.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Bukit Bintang</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati gemerlap lampu kota dari ketinggian.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 24 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Museum Ullen Sentalu.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Museum Ullen Sentalu</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 25 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/MuseumSonobudoyo.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Museum Sonobudoyo</h3>
                        <p class="opacity-0 group-hover:opacity-100"> Koleksi artefak Jawa yang bersejarah.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 26 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/PasarBeringharjo.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pasar Beringharjo</h3>
                        <p class="opacity-0 group-hover:opacity-100">Surga belanja kain batik dan oleh-oleh khas.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 27 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/The Lost World Castle.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">The Lost World Castle</h3>
                        <p class="opacity-0 group-hover:opacity-100">Wisata kastil unik di lereng Merapi.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 28 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/AlamandaJogjaFlowerGarden.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Alamanda Jogja Flower Garden</h3>
                        <p class="opacity-0 group-hover:opacity-100">Kebun bunga dengan spot foto romantis.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 29 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/KopiKlotok.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Warung Kopi Klotok</h3>
                        <p class="opacity-0 group-hover:opacity-100">Kuliner khas dengan suasana pedesaan.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 30 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/TamanMonjali.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Taman Pelangi Monjali</h3>
                        <p class="opacity-0 group-hover:opacity-100"> Wisata malam dengan lampion warna-warni.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 31 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/AirTerjunKedungPedut.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Air Terjun Kedung Pedut </h3>
                        <p class="opacity-0 group-hover:opacity-100">Air terjun dengan kolam alami berwarna toska.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 32 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/obelix.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Obelix Hills</h3>
                        <p class="opacity-0 group-hover:opacity-100">Tempat nongkrong dengan pemandangan spektakuler.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 33 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/TamanPintar.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Taman Pintar</h3>
                        <p class="opacity-0 group-hover:opacity-100">Wisata edukasi interaktif untuk anak-anak dan keluarga.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 34 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/GunungApiPurbaNglanggeran.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Api Purba Nglanggeran</h3>
                        <p class="opacity-0 group-hover:opacity-100">Pendakian ringan ke gunung bersejarah.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 35 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/BukitLintangSewu.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Bukit Lintang Sewu</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati Pemandangan sunset yang memukau dari atas bukit.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 36 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/WatuGoyang.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Watu Goyang</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati Keindahan Alam dari Ketinggian</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 37 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/JogjaAdventureWaterpark.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Jogja Bay Pirates Adventure Waterpark</h3>
                        <p class="opacity-0 group-hover:opacity-100">Wisata air terbesar di Jogja.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 38 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/UpsideDownWorldJogja.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Upside Down World Jogja</h3>
                        <p class="opacity-0 group-hover:opacity-100">Spot foto dengan konsep ruangan terbalik.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 39 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/StonehengeJogja.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Stonehenge Jogja</h3>
                        <p class="opacity-0 group-hover:opacity-100">Replika Stonehenge dengan nuansa modern.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 40 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/SinduKusumaEdupark.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Sindu Kusuma Edupark</h3>
                        <p class="opacity-0 group-hover:opacity-100">Wahana bermain dan edukasi untuk keluarga.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 41 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/MuseumBatikYogyakarta.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Museum Batik Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100"> Pelajari sejarah dan filosofi mendalam di balik setiap motif batik.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 42 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Curug Pulosari Jogja.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Curug Pulosari Jogja</h3>
                        <p class="opacity-0 group-hover:opacity-100">Air terjun tersembunyi di tengah pedesaan.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 43 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Bunker Kali Adem.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Bunker Kali Adem</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 44 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 45 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 46 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 47 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 48 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 49 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 50 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 51 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 52 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 53 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 54 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 55 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 56 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 57 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 58 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 59 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 60 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 61 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 62 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 63 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 64 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 65 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 66 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 67 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 68 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 69 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 70 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 71 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 72 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 73 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 74 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 75 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destinasi 76 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Tritis.jpg" alt="Pantai Parangtritis" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Pantai Parangtritis</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan pantai dengan pemandangan yang luar biasa.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 77 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/HehaForest.jpg" alt="Heha Forest" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Heha Forest</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan sensasi keindahan alam dengan latar belakang hutan yang memesona.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 78 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Keraton Yogyakarta</h3>
                        <p class="opacity-0 group-hover:opacity-100">Eksplorasi sejarah dan budaya Yogyakarta di Keraton yang megah ini.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 79 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Malioboro.jpg" alt="Malioboro" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Malioboro</h3>
                        <p class="opacity-0 group-hover:opacity-100">Rasakan keajaiban suasana jalanan Yogyakarta yang penuh budaya.</p>
                    </div>
                </div>
            </div>

            <!-- Destinasi 80 -->
            <div class="fade-in-up bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="Gambar/Merapi.jpg" alt="Gunung Merapi" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold">Gunung Merapi</h3>
                        <p class="opacity-0 group-hover:opacity-100">Nikmati keindahan matahari terbit di Gunung Merapi yang terkenal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
require_once 'includes/footer.php';
?>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const elements = document.querySelectorAll('.fade-in-up');
            function checkVisibility() {
                elements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top <= window.innerHeight * 0.8) {
                        element.classList.add('visible');
                    }
                });
            }
            window.addEventListener('load', checkVisibility);
            window.addEventListener('scroll', checkVisibility);
        });
    </script>
</body>

</html>
