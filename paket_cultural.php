<?php
session_start();
$pageTitle = "Paket Cultural Heritage";
$package_id = 5; // Sesuaikan dengan ID paket di database
$package_name = "Paket Cultural Heritage";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
$basePrice = 1750000;
?>

<main class="pt-32">
    <div class="container-custom">
        <!-- Breadcrumb -->
        

        <!-- Package Header -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Image Gallery -->
            <div class="space-y-4">
                <div class="aspect-video rounded-lg overflow-hidden">
                    <img src="Gambar/Keraton.jpg" alt="Keraton Yogyakarta" class="w-full h-full object-cover">
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img src="Gambar/TamanSari.jpg" alt="Taman Sari" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img src="Gambar/Prambanan.jpg" alt="Prambanan" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img src="Gambar/Ratu.jpg" alt="Ratu Boko" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Package Summary -->
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm mb-2">3 Hari 2 Malam</span>
                        <h1 class="text-3xl font-bold text-primary">Cultural Heritage</h1>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-600">Mulai dari</p>
                        <p class="text-3xl font-bold text-secondary">Rp 1.750.000</p>
                        <p class="text-sm text-gray-600">per orang</p>
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Durasi</p>
                        <p class="font-semibold">3 Hari 2 Malam</p>
                    </div>
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Akomodasi</p>
                        <p class="font-semibold">Hotel Bintang 4</p>
                    </div>
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Makan</p>
                        <p class="font-semibold">7x Makan</p>
                    </div>
                    <div class="bg-background rounded-lg p-4">
                        <p class="text-sm text-gray-600">Transportasi</p>
                        <p class="font-semibold">Mobil AC Premium</p>
                    </div>
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
                <span id="totalPrice" class="text-primary">Rp 1.750.000</span>
                <!-- Input tersembunyi untuk total_amount -->
                <input type="hidden" name="total_amount" id="totalAmountInput" value="1750000">
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
                        Jelajahi warisan budaya Yogyakarta yang kaya dalam perjalanan 3 hari yang menakjubkan! Paket Cultural Heritage akan membawa Anda mengunjungi situs-situs bersejarah paling ikonik di Yogyakarta, dari kemegahan Keraton hingga keagungan Candi Prambanan.
                    </p>
                    <p class="text-gray-600">
                        Sempurna untuk pencinta sejarah dan budaya, paket ini menawarkan pengalaman mendalam menjelajahi warisan budaya Yogyakarta. Dilengkapi dengan akomodasi hotel bintang 4 dan pertunjukan Ramayana Ballet yang memukau.
                    </p>
                </div>

                <!-- Itinerary Tab -->
                <div id="itinerary" class="hidden bg-white rounded-lg p-6 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-6">Jadwal Perjalanan</h2>
                    <div class="space-y-8">
                        <!-- Hari 1 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Pertama</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">09:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Penjemputan</h4>
                                        <p class="text-gray-600">Penjemputan di hotel/bandara/stasiun</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">10:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Keraton Yogyakarta</h4>
                                        <p class="text-gray-600">Mengunjungi istana Sultan dan melihat koleksi pusaka</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">13:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Makan Siang</h4>
                                        <p class="text-gray-600">Menikmati hidangan khas keraton</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">14:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Taman Sari</h4>
                                        <p class="text-gray-600">Menjelajahi istana air dan taman kerajaan</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">17:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Check-in Hotel</h4>
                                        <p class="text-gray-600">Istirahat dan makan malam</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hari 2 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Kedua</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">07:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Sarapan</h4>
                                        <p class="text-gray-600">Sarapan di hotel</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">08:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Candi Prambanan</h4>
                                        <p class="text-gray-600">Mengunjungi kompleks candi Hindu terbesar di Indonesia</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">13:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Makan Siang</h4>
                                        <p class="text-gray-600">Makan siang di restoran lokal</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">14:30</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Kraton Ratu Boko</h4>
                                        <p class="text-gray-600">Menjelajahi situs istana kuno</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">19:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Ramayana Ballet</h4>
                                        <p class="text-gray-600">Menyaksikan pertunjukan tari tradisional</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hari 3 -->
                        <div>
                            <h3 class="text-lg font-bold text-secondary mb-4">Hari Ketiga</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">07:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Sarapan</h4>
                                        <p class="text-gray-600">Sarapan di hotel</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">09:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Museum Sonobudoyo</h4>
                                        <p class="text-gray-600">Mengunjungi museum budaya Jawa</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">12:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Makan Siang</h4>
                                        <p class="text-gray-600">Makan siang dan belanja oleh-oleh</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-20 text-secondary font-bold">14:00</div>
                                    <div>
                                        <h4 class="font-bold text-primary">Kembali</h4>
                                        <p class="text-gray-600">Transfer ke hotel/bandara/stasiun</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facility Tab -->
                <div id="facility" class="hidden bg-white rounded-lg p-6 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-6">Fasilitas Tour</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-bold text-primary mb-4">Termasuk</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Hotel bintang 4 (2 malam)
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Transportasi AC Premium PP
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Tiket masuk semua destinasi
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    7x makan (2x sarapan, 3x makan siang, 2x makan malam)
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Guide profesional bersertifikat
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Tiket Ramayana Ballet
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Air mineral
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
                                    Tiket pesawat/kereta
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
                                    Tips untuk guide
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
                        <a href="adventure-package.php" class="block p-4 border border-gray-200 rounded-lg hover:border-primary transition-colors">
                            <div class="aspect-video rounded-lg overflow-hidden mb-3">
                                <img src="Gambar/Merapi.jpg" alt="Adventure Package" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-primary">Adventure Package</h4>
                            <p class="text-sm text-gray-600">Mulai dari Rp 2.250.000</p>
                        </a>
                        <a href="nature-escape.php" class="block p-4 border border-gray-200 rounded-lg hover:border-primary transition-colors">
                            <div class="aspect-video rounded-lg overflow-hidden mb-3">
                                <img src="Gambar/HehaForest.jpg" alt="Nature Escape" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-primary">Nature Escape</h4>
                            <p class="text-sm text-gray-600">Mulai dari Rp 850.000</p>
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

<?php
require_once 'includes/footer.php';
?>

<!-- Scripts -->
<script>
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

    // Definisi harga dasar
    const basePrice = <?php echo $basePrice; ?>; 

    // Format harga ke format Rupiah
    function formatPrice(price) {
        return new Intl.NumberFormat('id-ID', { 
            style: 'currency', 
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0 
        }).format(price);
    }

    // Update total harga berdasarkan jumlah peserta
    function updatePrice() {
        const count = parseInt(document.getElementById('participant-count').value);
        const totalPrice = basePrice * count;
        document.getElementById('totalPrice').textContent = formatPrice(totalPrice);
        document.getElementById('totalAmountInput').value = totalPrice;
    }

    // Fungsi untuk menambah jumlah peserta
    function incrementCount() {
        const input = document.getElementById('participant-count');
        const currentValue = parseInt(input.value);
        input.value = currentValue + 1;
        updatePrice();
    }

    // Fungsi untuk mengurangi jumlah peserta
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
<script>
    const basePrice = <?php echo $basePrice; ?>; // Definisi harga dasar
</script>