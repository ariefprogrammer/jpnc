<?php include 'header.php'; ?>

<!-- About Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
            <h1>Listing Properti</h1>
            <p>Temukan berbagai properti investasi yang tersedia di Jepang. Pilih properti yang sesuai dengan kebutuhan investasi Anda.</p>
        </div>
    </div>
</section>

<!-- Listings Section -->
<section class="listings-section py-4">
    <div class="container">

        <!-- Sorting Section -->
        <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <div class="card filter-card p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-3 mb-md-0">
                            <h5 class="mb-2">Filter Property</h5>
                            <!-- Filter disini -->
                             <div class="col-md-12">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <select class="form-select filter-input" id="filterArea">
                                            <option value="">Semua Area</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Kyoto">Kyoto</option>
                                            <option value="Kanagawa">Kanagawa</option>
                                            <option value="Osaka">Osaka</option>
                                            <option value="Hokkaido">Hokkaido</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select filter-input" id="filterJenis">
                                            <option value="">Semua Jenis</option>
                                            <option value="Apartemen">Apartemen</option>
                                            <option value="Rumah">Rumah</option>
                                            <option value="Kondo">Kondo</option>
                                            <option value="Villa">Villa</option>
                                            <option value="Komersial">Komersial</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select filter-input" id="filterBudget">
                                            <option value="">Semua Budget</option>
                                            <option value="0-100">Dibawah ¥ 100 Juta</option>
                                            <option value="100-300">¥ 100 - 300 Juta</option>
                                            <option value="300-9999">Diatas ¥ 300 Juta</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select filter-input" id="filterType">
                                            <option value="">Buy/Rent</option>
                                            <option value="Buy">Buy</option>
                                            <option value="Rent">Rent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <h5 class="mb-2">Urutkan</h5>
                            <select class="form-select sort-select" style="min-width: 200px;">
                                <option value="newest">Terbaru</option>
                                <option value="price-low">Harga: Rendah ke Tinggi</option>
                                <option value="price-high">Harga: Tinggi ke Rendah</option>
                                <option value="name">Nama (A-Z)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Loading indicator -->
        <div class="loading-indicator text-center py-5" id="loadingIndicator">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                <span class="visually-hidden">Memuat...</span>
            </div>
            <p class="mt-3">Memuat semua properti...</p>
        </div>
        
        <!-- Container untuk semua listing -->
        <div class="row" id="allListingsContainer">
            <!-- Data akan dimuat secara dinamis -->
        </div>
        
        <!-- Pagination -->
        <div class="row mt-5 d-none" id="paginationContainer">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center" id="paginationList">
                        <!-- Pagination akan dibuat secara dinamis -->
                    </ul>
                </nav>
            </div>
        </div>
        
        <!-- Empty state -->
        <div class="row d-none" id="emptyState">
            <div class="col-md-8 mx-auto text-center py-5">
                <div class="empty-state-icon mb-4">
                    <i class="fas fa-building fa-3x text-muted"></i>
                </div>
                <h4>Tidak ada properti yang ditemukan</h4>
                <p class="text-muted">Coba ubah pengurutan atau kunjungi kembali nanti.</p>
                <button class="btn btn-primary reset-filters">Reset Pengurutan</button>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="row mt-3" data-aos="fade-up" data-aos-duration="1000" style="display:none;">
            <div class="col-12">
                <div class="stats-card p-4 text-center">
                    <h4 class="text-white mb-3">Statistik Properti</h4>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="text-white" id="totalListingsCount">0</h3>
                            <p class="text-white mb-0">Total Properti</p>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="text-white" id="apartmentCount">0</h3>
                            <p class="text-white mb-0">Apartemen</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-white" id="houseCount">0</h3>
                            <p class="text-white mb-0">Rumah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-section" style="background-color: var(--primary-color); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2>Siap Memulai Investasi di Jepang?</h2>
                <p>Buat inquiry dan kami akan tim kami akan segera menghubungi anda</p>
            </div>
            <div class="col-lg-5 text-lg-end text-center">
                <a href="inquiry.php" class="btn btn-primary2" style="background-color: var(--secondary-color); border-color: var(--secondary-color);">
                    <i class="fas fa-envelope me-2"></i> Buat Inquiry
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<style>
    .listings-section {
        background-color: #fff;
    }
    
    .filter-card {
        background: #f8f9fa;
        border-radius: 10px;
        border: 1px solid #eaeaea;
    }
    
    .property-card {
        border: 1px solid #eaeaea;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        background: white;
    }
    
    .property-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .property-img {
        height: 220px;
        overflow: hidden;
    }
    
    .property-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .property-card:hover .property-img img {
        transform: scale(1.05);
    }
    
    .property-info {
        padding: 1.5rem;
    }
    
    .property-price {
        font-size: 1.25rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }
    
    .property-features {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .property-features span {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        color: #666;
    }
    
    .property-features i {
        margin-right: 5px;
        color: #1d1f21;
    }
    
    .property-type-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 1;
        box-shadow: 0 2px 6px rgba(248, 248, 248, 0.3);
        background-color: var(--primary-color);
        color: white;
    }
    
    .stats-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 10px;
    }
    
    .stats-card h3 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }
    
    .stats-card p {
        color: rgba(255, 255, 255, 0.9)!important;
    }
    
    .loading-indicator {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .empty-state-icon {
        opacity: 0.5;
    }
    
    @media (max-width: 768px) {
        .property-img {
            height: 180px;
        }
        
        .filter-group {
            width: 100%;
        }
        
        .sort-select {
            width: 100% !important;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM Elements
        const allListingsContainer = document.getElementById('allListingsContainer');
        const loadingIndicator = document.getElementById('loadingIndicator');
        const emptyState = document.getElementById('emptyState');
        const paginationContainer = document.getElementById('paginationContainer');
        const paginationList = document.getElementById('paginationList');
        const sortSelect = document.querySelector('.sort-select');
        const resetFiltersBtn = document.querySelector('.reset-filters');
        
        // Filter Elements (Pastikan ID ini sesuai dengan di HTML Anda)
        const filterArea = document.getElementById('filterArea');
        const filterJenis = document.getElementById('filterJenis');
        const filterBudget = document.getElementById('filterBudget');
        const filterType = document.getElementById('filterType');

        // Counter elements
        const totalListingsCount = document.getElementById('totalListingsCount');
        const apartmentCount = document.getElementById('apartmentCount');
        const houseCount = document.getElementById('houseCount');
        
        // Variabel Global
        let currentPage = 1;
        const listingsPerPage = 9;
        
        // Data Listings
        const propertyListingsData = [
            { id: 1, link: "detail-product-mna.php?id=1", title: "Apartemen Premium Shinjuku Sky View", location: "Shinjuku, Tokyo", price: "¥ 120 Juta", image: "https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "2 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-ruler-combined", text: "65 m²" }], dateAdded: "2024-02-15" },
            { id: 2, link: "detail-product-mna.php?id=2", title: "Rumah Tradisional Kyoto Machiya", location: "Gion, Kyoto", price: "¥ 250 Juta", image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Rumah", features: [{ icon: "fas fa-bed", text: "4 Kamar" }, { icon: "fas fa-bath", text: "2 Kamar Mandi" }, { icon: "fas fa-tree", text: "Taman Jepang" }], dateAdded: "2024-02-10" },
            { id: 3, link: "detail-product-mna.php?id=3", title: "Kondo Modern di Akihabara", location: "Akihabara, Tokyo", price: "¥ 85 Juta", image: "https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Kondo", features: [{ icon: "fas fa-bed", text: "1 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-ruler-combined", text: "40 m²" }], dateAdded: "2024-02-08" },
            { id: 4, link: "detail-product-mna.php?id=4", title: "Townhouse Luxe di Roppongi", location: "Roppongi, Tokyo", price: "¥ 350 Juta", image: "https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Townhouse", features: [{ icon: "fas fa-bed", text: "3 Kamar" }, { icon: "fas fa-bath", text: "2.5 Kamar Mandi" }, { icon: "fas fa-car", text: "Parkir 2 Mobil" }], dateAdded: "2024-02-05" },
            { id: 5, link: "detail-product-mna.php?id=5", title: "Apartemen dengan Onsen View Hakone", location: "Hakone, Kanagawa", price: "¥ 180 Juta", image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "2 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-hot-tub", text: "Onsen Private" }], dateAdded: "2024-02-03" },
            { id: 6, link: "detail-product-mna.php?id=6", title: "Villa Modern di Shonan", location: "Shonan, Kanagawa", price: "¥ 500 Juta", image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Villa", features: [{ icon: "fas fa-bed", text: "5 Kamar" }, { icon: "fas fa-bath", text: "3 Kamar Mandi" }, { icon: "fas fa-swimming-pool", text: "Kolam Renang" }], dateAdded: "2024-02-01" },
            { id: 7, link: "detail-product-mna.php?id=7", title: "Ruko Komersial di Shibuya", location: "Shibuya, Tokyo", price: "¥ 450 Juta", image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Komersial", features: [{ icon: "fas fa-store", text: "2 Lantai" }, { icon: "fas fa-car", text: "Parkir 5 Mobil" }, { icon: "fas fa-ruler-combined", text: "200 m²" }], dateAdded: "2024-01-28" },
            { id: 8, link: "detail-product-mna.php?id=8", title: "Apartemen Studio di Shinagawa", location: "Shinagawa, Tokyo", price: "¥ 75 Juta", image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "Studio" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-ruler-combined", text: "30 m²" }], dateAdded: "2024-01-25" },
            { id: 9, link: "detail-product-mna.php?id=9", title: "Rumah Keluarga di Yokohama", location: "Yokohama, Kanagawa", price: "¥ 320 Juta", image: "https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Rumah", features: [{ icon: "fas fa-bed", text: "4 Kamar" }, { icon: "fas fa-bath", text: "2 Kamar Mandi" }, { icon: "fas fa-tree", text: "Taman Luas" }], dateAdded: "2024-01-22" },
            { id: 10, link: "detail-product-mna.php?id=10", title: "Apartemen View Fuji di Gotemba", location: "Gotemba, Shizuoka", price: "¥ 150 Juta", image: "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "2 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-mountain", text: "View Gunung Fuji" }], dateAdded: "2024-01-20" },
            { id: 11, link: "detail-product-mna.php?id=11", title: "Rumah Minimalis di Kobe", location: "Kobe, Hyogo", price: "¥ 280 Juta", image: "https://images.unsplash.com/photo-1518780664697-55e3ad937233?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Rumah", features: [{ icon: "fas fa-bed", text: "3 Kamar" }, { icon: "fas fa-bath", text: "2 Kamar Mandi" }, { icon: "fas fa-ruler-combined", text: "180 m²" }], dateAdded: "2024-01-18" },
            { id: 12, link: "detail-product-mna.php?id=12", title: "Apartemen Premium di Ginza", location: "Ginza, Tokyo", price: "¥ 200 Juta", image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "2 Kamar" }, { icon: "fas fa-bath", text: "2 Kamar Mandi" }, { icon: "fas fa-building", text: "Concierge 24/7" }], dateAdded: "2024-01-15" },
            { id: 13, link: "detail-product-mna.php?id=13", title: "Tanah Kavling di Chiba", location: "Chiba-shi, Chiba", price: "¥ 90 Juta", image: "https://images.unsplash.com/photo-1448630360428-65456885c650?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Tanah", features: [{ icon: "fas fa-ruler-combined", text: "300 m²" }, { icon: "fas fa-road", text: "Akses Jalan Raya" }, { icon: "fas fa-tree", text: "Lokasi Strategis" }], dateAdded: "2024-01-12" },
            { id: 14, link: "detail-product-mna.php?id=14", title: "Rumah Tua Renovasi di Osaka", location: "Namba, Osaka", price: "¥ 190 Juta", image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Rumah", features: [{ icon: "fas fa-bed", text: "3 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-hammer", text: "Full Renovasi 2023" }], dateAdded: "2024-01-10" },
            { id: 15, link: "detail-product-mna.php?id=15", title: "Apartemen dekat Stasiun Tokyo", location: "Chiyoda, Tokyo", price: "¥ 135 Juta", image: "https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "1 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-train", text: "5 menit ke Stasiun" }], dateAdded: "2024-01-08" },
            { id: 16, link: "detail-product-mna.php?id=16", title: "Villa Ski di Niseko", location: "Niseko, Hokkaido", price: "¥ 600 Juta", image: "https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Rent", category: "Villa", features: [{ icon: "fas fa-bed", text: "6 Kamar" }, { icon: "fas fa-bath", text: "4 Kamar Mandi" }, { icon: "fas fa-skiing", text: "Akses Ski Resort" }], dateAdded: "2024-01-05" },
            { id: 17, link: "detail-product-mna.php?id=17", title: "Gedung Perkantoran di Nagoya", location: "Nagoya, Aichi", price: "¥ 800 Juta", image: "https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Komersial", features: [{ icon: "fas fa-building", text: "8 Lantai" }, { icon: "fas fa-elevator", text: "2 Elevator" }, { icon: "fas fa-ruler-combined", text: "1200 m²" }], dateAdded: "2024-01-03" },
            { id: 18, link: "detail-product-mna.php?id=18", title: "Mansion di Meguro", location: "Meguro, Tokyo", price: "¥ 420 Juta", image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Mansion", features: [{ icon: "fas fa-bed", text: "4 Kamar" }, { icon: "fas fa-bath", text: "3 Kamar Mandi" }, { icon: "fas fa-gem", text: "Interior Mewah" }], dateAdded: "2024-01-01" },
            { id: 19, link: "detail-product-mna.php?id=19", title: "Apartemen Murah di Saitama", location: "Saitama-shi, Saitama", price: "¥ 65 Juta", image: "https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Apartemen", features: [{ icon: "fas fa-bed", text: "1 Kamar" }, { icon: "fas fa-bath", text: "1 Kamar Mandi" }, { icon: "fas fa-wallet", text: "Harga Terjangkau" }], dateAdded: "2023-12-28" },
            { id: 20, link: "detail-product-mna.php?id=20", title: "Rumah Peternakan di Hokkaido", location: "Sapporo, Hokkaido", price: "¥ 350 Juta", image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", type: "Buy", category: "Rumah", features: [{ icon: "fas fa-bed", text: "5 Kamar" }, { icon: "fas fa-bath", text: "3 Kamar Mandi" }, { icon: "fas fa-tractor", text: "Lahan 5000 m²" }], dateAdded: "2023-12-25" }
        ];

        // --- CORE FUNCTIONS ---

        // 1. Fungsi Filter Utama
        function getFilteredAndSortedListings() {
            let filtered = [...propertyListingsData];

            // Ambil nilai filter
            const areaValue = filterArea.value.toLowerCase();
            const jenisValue = filterJenis.value;
            const budgetValue = filterBudget.value;
            const typeValue = filterType.value;

            // Proses Filtering
            filtered = filtered.filter(item => {
                const matchArea = areaValue === "" || item.location.toLowerCase().includes(areaValue);
                const matchJenis = jenisValue === "" || item.category === jenisValue;
                const matchType = typeValue === "" || item.type === typeValue;
                
                let matchBudget = true;
                if (budgetValue !== "") {
                    // Extract angka dari string "¥ 120 Juta" -> 120
                    const priceNum = parseFloat(item.price.replace(/[^\d]/g, ''));
                    const [min, max] = budgetValue.split('-').map(Number);
                    matchBudget = priceNum >= min && priceNum <= max;
                }

                return matchArea && matchJenis && matchType && matchBudget;
            });

            // Proses Sorting
            return sortListings(filtered, sortSelect.value);
        }

        // 2. Fungsi Sorting
        function sortListings(listings, sortBy) {
            const sorted = [...listings];
            const extractNum = (str) => {
                const matches = str.match(/[\d,.]+/);
                return matches ? parseFloat(matches[0].replace(/[,.]/g, '')) : 0;
            };

            switch(sortBy) {
                case 'price-low': sorted.sort((a, b) => extractNum(a.price) - extractNum(b.price)); break;
                case 'price-high': sorted.sort((a, b) => extractNum(b.price) - extractNum(a.price)); break;
                case 'name': sorted.sort((a, b) => a.title.localeCompare(b.title)); break;
                case 'newest':
                default: sorted.sort((a, b) => new Date(b.dateAdded) - new Date(a.dateAdded)); break;
            }
            return sorted;
        }

        // 3. Fungsi Render ke HTML
        function renderAllListings() {
            const listings = getFilteredAndSortedListings();
            allListingsContainer.innerHTML = '';
            
            if (listings.length === 0) {
                emptyState.classList.remove('d-none');
                allListingsContainer.classList.add('d-none');
                paginationContainer.classList.add('d-none');
                updateCounters([]);
                return;
            }
            
            emptyState.classList.add('d-none');
            allListingsContainer.classList.remove('d-none');
            
            const startIndex = (currentPage - 1) * listingsPerPage;
            const paginatedListings = listings.slice(startIndex, startIndex + listingsPerPage);
            
            createPagination(listings.length, currentPage, listingsPerPage);
            
            paginatedListings.forEach((listing, index) => {
                const featuresHtml = listing.features.map(f => `<span><i class="${f.icon}"></i> ${f.text}</span>`).join('');
                const delay = index % 3 * 100;
                
                allListingsContainer.innerHTML += `
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="${delay}">
                        <div class="property-card h-100 position-relative">
                            <div class="property-type-badge">${listing.type}</div>
                            <div class="property-img"><img src="${listing.image}" alt="${listing.title}" loading="lazy"></div>
                            <div class="property-info">
                                <h5 class="mb-2">${listing.title}</h5>
                                <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-1"></i> ${listing.location}</p>
                                <p class="property-price mb-3">${listing.price}</p>
                                <div class="property-features mb-3">${featuresHtml}</div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-secondary">${listing.category}</span>
                                    <a href="${listing.link}" class="btn btn-primary btn-sm">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>`;
            });
            
            updateCounters(listings);
            setTimeout(() => AOS.refresh(), 100);
        }

        // 4. Pagination & Counters
        function createPagination(totalItems, current, perPage) {
            paginationList.innerHTML = '';
            const totalPages = Math.ceil(totalItems / perPage);
            if (totalPages <= 1) { paginationContainer.classList.add('d-none'); return; }
            paginationContainer.classList.remove('d-none');

            const addPage = (p, label, active = false, disabled = false) => {
                const li = document.createElement('li');
                li.className = `page-item ${active ? 'active' : ''} ${disabled ? 'disabled' : ''}`;
                li.innerHTML = `<a class="page-link" href="#" data-page="${p}">${label}</a>`;
                paginationList.appendChild(li);
            };

            addPage(current - 1, '<i class="fas fa-chevron-left"></i>', false, current === 1);
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= current - 1 && i <= current + 1)) {
                    addPage(i, i, i === current);
                }
            }
            addPage(current + 1, '<i class="fas fa-chevron-right"></i>', false, current === totalPages);
        }

        function updateCounters(listings) {
            totalListingsCount.textContent = listings.length;
            apartmentCount.textContent = listings.filter(l => l.category === 'Apartemen').length;
            houseCount.textContent = listings.filter(l => l.category === 'Rumah' || l.category === 'Townhouse').length;
        }

        // --- EVENT LISTENERS ---

        // Listener untuk semua dropdown Filter
        [filterArea, filterJenis, filterBudget, filterType].forEach(el => {
            if(el) el.addEventListener('change', () => {
                currentPage = 1;
                renderAllListings();
            });
        });

        // Listener Sort
        sortSelect.addEventListener('change', () => {
            currentPage = 1;
            renderAllListings();
        });

        // Listener Pagination
        paginationContainer.addEventListener('click', (e) => {
            e.preventDefault();
            const link = e.target.closest('.page-link');
            if (link && !link.parentElement.classList.contains('disabled')) {
                currentPage = parseInt(link.dataset.page);
                renderAllListings();
                window.scrollTo({ top: allListingsContainer.offsetTop - 100, behavior: 'smooth' });
            }
        });

        // Reset Filter
        if (resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', () => {
                [filterArea, filterJenis, filterBudget, filterType].forEach(el => { if(el) el.value = ""; });
                sortSelect.value = 'newest';
                currentPage = 1;
                renderAllListings();
            });
        }

        // --- INITIAL LOAD ---
        setTimeout(() => {
            loadingIndicator.classList.add('d-none');
            renderAllListings();
        }, 500);
    });
</script>