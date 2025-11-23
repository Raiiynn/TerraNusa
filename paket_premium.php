<?php
session_start();
$pageTitle = "Paket Premium Experience";
$package_id = 8; // Sesuaikan dengan ID paket di database
$package_name = "Paket Premium Experience";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
$basePrice = 5500000;
?>

<main class="pt-32">
<div class="container-custom">
        <!-- Package Header -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Image Gallery -->
            <div class="space-y-4">
                <div class="aspect-video rounded-lg overflow-hidden">
                    <img src="Gambar/Luxury.jpg" alt="Luxury Hotel" class="w-full h-full object-cover">
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img src="Gambar/Dining.jpg" alt="Fine Dining" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img src="Gambar/Spa.jpg" alt="Luxury Spa" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img src="Gambar/Transport.jpg" alt="Premium Transport" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Package Summary -->
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm mb-2">4 Hari 3 Malam</span>
                        <h1 class="text-3xl font-bold text-primary">Premium Experience</h1>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-600">Mulai dari</p>
                        <p class="text-3xl font-bold text-secondary">Rp 5.500.000</p>
                        <p class="text-sm text-gray-600">per orang</p>
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Akomodasi</p>
                        <p class="font-semibold">Hotel Bintang 5</p>
                    </div>
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Transportasi</p>
                        <p class="font-semibold">Private Luxury Car</p>
                    </div>
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Makan</p>
                        <p class="font-semibold">All-Inclusive Dining</p>
                    </div>
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Bonus</p>
                        <p class="font-semibold">Spa Treatment</p>
                    </div>
                </div>

                <!-- Selling Points -->
                <div class="mb-6">
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Private Tour Guide Eksklusif
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Luxury Fine Dining Experience
                        </li>
                        <li class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Traditional Spa Treatment
                        </li>
                    </ul>
                </div>

                <!-- Booking Form -->
                <form action="./process/process_order.php" method="POST">
    <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
    <input type="hidden" name="package_name" value="<?php echo $package_name; ?>">
    <input type="hidden" name="base_price" value="<?php echo $basePrice; ?>">
    
    <div>
        <label class="block text-gray-700 mb-2">Nama Lengkap</label>
        <input type="text" name="customer_name" required 
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
    </div>
    <div>
        <label class="block text-gray-700 mb-2">No. HP</label>
        <input type="tel" name="customer_phone" required 
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
    </div>
    <div class="space-y-4">
        <div>
            <label class="block text-gray-700 mb-2">Tanggal Tour</label>
            <input type="date" id="tourDate" name="tourDate" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary" required>
        </div>
        <div>
            <label class="block text-gray-700 mb-2">Jumlah Peserta</label>
            <div class="flex items-center border border-gray-300 rounded-lg">
                <button type="button" onclick="decrementCount()" class="p-3 text-primary hover:bg-gray-100 rounded-l-lg">-</button>
                <input type="number" id="participant-count" name="participantCount" value="1" min="1" class="w-full p-3 text-center border-x border-gray-300 focus:outline-none" onchange="updatePrice()" readonly>
                <button type="button" onclick="incrementCount()" class="p-3 text-primary hover:bg-gray-100 rounded-r-lg">+</button>
            </div>
        </div>
        <div class="bg-tertiary/20 p-4 rounded-lg">
            <div class="flex justify-between items-center text-lg font-semibold">
                <span>Total Pembayaran:</span>
                <span id="totalPrice" class="text-primary">Rp 5.550.000</span>
                <!-- Input tersembunyi untuk total_amount -->
                <input type="hidden" name="total_amount" id="totalAmountInput" value="5500000">
            </div>
        </div>
        <button type="submit" class="w-full bg-secondary hover:bg-secondary/90 text-white py-3 rounded-lg transition-colors duration-300">
            Lanjutkan ke Pembayaran
        </button>
    </div>
</form>
</div>
</div>

        <!-- Tabs Navigation -->
        <div class="mb-8">
            <div class="flex space-x-4 border-b border-gray-200">
                <button onclick="switchTab('overview')" class="px-4 py-2 text-primary border-b-2 border-primary">Overview</button>
                <button onclick="switchTab('itinerary')" class="px-4 py-2 text-gray-600 hover:text-primary">Itinerary</button>
                <button onclick="switchTab('facility')" class="px-4 py-2 text-gray-600 hover:text-primary">Fasilitas</button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Overview Tab -->
                <div id="overview" class="bg-white rounded-lg p-6 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-4">Deskripsi Paket</h2>
                    <p class="text-gray-600 mb-4">
                        Nikmati pengalaman wisata paling mewah di Yogyakarta dengan Premium Experience package. Paket ini dirancang khusus untuk memberikan kenyamanan dan kemewahan maksimal selama Anda menjelajahi keindahan kota budaya ini.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Menginap di hotel bintang 5 terbaik, menikmati fine dining di restoran-restoran terkemuka, dan bepergian dengan mobil mewah private. Setiap detail perjalanan telah dipersiapkan untuk memberikan pengalaman yang tak terlupakan.
                    </p>
                    <p class="text-gray-600">
                        Dilengkapi dengan traditional spa treatment dan pemandu wisata profesional yang akan memastikan perjalanan Anda sempurna dari awal hingga akhir.
                    </p>
                </div>

                <!-- Itinerary Tab -->
                <div id="itinerary" class="hidden bg-white rounded-lg p-6 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-6">Jadwal Perjalanan</h2>
                    <div class="space-y-8">
                        <!-- Hari 1 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Pertama - Royal Heritage</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">09:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">VIP Airport Meeting</h4>
                                        <p class="text-gray-600">Welcome drink dan penjemputan dengan luxury car</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">10:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Check-in Hotel</h4>
                                        <p class="text-gray-600">Check-in di hotel bintang 5</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">12:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Royal Lunch</h4>
                                        <p class="text-gray-600">Fine dining dengan menu royal Jawa</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">14:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Private Keraton Tour</h4>
                                        <p class="text-gray-600">Tour eksklusif Keraton dengan akses khusus</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">19:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Welcome Dinner</h4>
                                        <p class="text-gray-600">Fine dining dengan pemandangan kota</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hari 2 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Kedua - Cultural Immersion</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">06:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Sunrise Borobudur</h4>
                                        <p class="text-gray-600">Akses VIP untuk melihat sunrise dari Borobudur</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">08:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Gourmet Breakfast</h4>
                                        <p class="text-gray-600">Sarapan mewah dengan pemandangan Borobudur</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">10:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Private Art Workshop</h4>
                                        <p class="text-gray-600">Workshop batik privat dengan maestro batik</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">13:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Luxury Lunch</h4>
                                        <p class="text-gray-600">Fine dining di restoran terbaik Jogja</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">15:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Traditional Spa</h4>
                                        <p class="text-gray-600">Spa treatment tradisional Jawa premium</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">19:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Royal Dinner</h4>
                                        <p class="text-gray-600">Makan malam dengan pertunjukan tari tradisional privat</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hari 3 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Ketiga - Nature & Adventure</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">07:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Gourmet Breakfast</h4>
                                        <p class="text-gray-600">Sarapan di hotel</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">09:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Private Merapi Tour</h4>
                                        <p class="text-gray-600">Eksplorasi Merapi dengan Jeep premium privat</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">12:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Picnic Lunch</h4>
                                        <p class="text-gray-600">Makan siang gourmet di lokasi eksotis</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">15:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Prambanan Visit</h4>
                                        <p class="text-gray-600">Tour privat Candi Prambanan dengan akses VIP</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">18:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Sunset Dinner</h4>
                                        <p class="text-gray-600">Fine dining dengan pemandangan Prambanan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hari 4 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Keempat - Leisure & Departure</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">08:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Breakfast in Bed</h4>
                                        <p class="text-gray-600">Sarapan mewah diantar ke kamar</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">10:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Private Shopping Tour</h4>
                                        <p class="text-gray-600">Tur belanja dengan personal shopper</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">12:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Farewell Lunch</h4>
                                        <p class="text-gray-600">Makan siang perpisahan di restoran fine dining</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">14:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Departure</h4>
                                        <p class="text-gray-600">Transfer ke bandara dengan luxury car</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility Tab -->
                <div id="facility" class="hidden bg-white rounded-lg p-6 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-6">Fasilitas Premium</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-bold text-primary mb-4">Termasuk</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Hotel bintang 5 luxury room
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Private luxury car dengan sopir
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    All meals di restoran premium
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Traditional spa treatment
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Private tour guide profesional
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    VIP access di semua destinasi
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Workshop batik privat
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Pertunjukan tari privat
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Welcome gift premium
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Dokumentasi profesional
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary mb-4">Tidak Termasuk</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Tiket pesawat
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Pengeluaran pribadi
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Minibar di hotel
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Asuransi perjalanan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Content -->
            <div class="lg:col-span-1">
                <!-- Similar Packages -->
                <div class="bg-white rounded-lg p-6 shadow-lg mb-8">
                    <h3 class="text-xl font-bold text-primary mb-4">Paket Lainnya</h3>
                    <div class="space-y-4">
                        <a href="cultural-heritage.php" class="block p-4 border border-gray-200 rounded-lg hover:border-primary transition-colors">
                            <div class="aspect-video rounded-lg overflow-hidden mb-3">
                                <img src="Gambar/Keraton.jpg" alt="Cultural Heritage" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-primary">Cultural Heritage</h4>
                            <p class="text-sm text-gray-600">Mulai dari Rp 1.750.000</p>
                        </a>
                        <a href="complete-yogyakarta.php" class="block p-4 border border-gray-200 rounded-lg hover:border-primary transition-colors">
                            <div class="aspect-video rounded-lg overflow-hidden mb-3">
                                <img src="Gambar/Malioboro.jpg" alt="Complete Yogyakarta" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-primary">Complete Yogyakarta</h4>
                            <p class="text-sm text-gray-600">Mulai dari Rp 3.500.000</p>
                        </a>
                    </div>
                </div>
                <!-- Need Help -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-primary mb-4">Butuh Bantuan?</h3>
                        <div class="space-y-4">
                            <a href="tel:+6281234567890" class="flex items-center gap-2 text-gray-600 hover:text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +62 812 3456 7890
                            </a>
                            <a href="mailto:info@terranusa.com" class="flex items-center gap-2 text-gray-600 hover:text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                info@terranusa.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php
require_once 'includes/footer.php';
?>

    <!-- Scripts -->
    <script>
        const basePrice = <?php echo $basePrice; ?>;

        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID', { 
                style: 'currency', 
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0 
            }).format(price);
        }

        function switchTab(tabId) {
            // Hide all tabs
            document.getElementById('overview').classList.add('hidden');
            document.getElementById('itinerary').classList.add('hidden');
            document.getElementById('facility').classList.add('hidden');
            
            // Show selected tab
            document.getElementById(tabId).classList.remove('hidden');
            
            // Update tab buttons
            const buttons = document.querySelectorAll('[onclick^="switchTab"]');
            buttons.forEach(button => {
                button.classList.remove('text-primary', 'border-b-2', 'border-primary');
                button.classList.add('text-gray-600');
            });
            
            // Highlight active tab
            event.target.classList.remove('text-gray-600');
            event.target.classList.add('text-primary', 'border-b-2', 'border-primary');
        }

        function updatePrice() {
            const count = parseInt(document.getElementById('participant-count').value);
            const totalPrice = basePrice * count;
            document.getElementById('totalPrice').textContent = formatPrice(totalPrice);
            document.getElementById('totalAmountInput').value = totalPrice;
        }

        function incrementCount() {
            const input = document.getElementById('participant-count');
            const currentValue = parseInt(input.value);
            input.value = currentValue + 1;
            updatePrice();
        }

        function decrementCount() {
            const input = document.getElementById('participant-count');
            const currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
                updatePrice();
            }
        }

        // Initialize price on page load
        document.addEventListener('DOMContentLoaded', updatePrice);
    </script>
</body>
</html>