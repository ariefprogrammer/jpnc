<?php include 'header.php'; ?>

<!-- About Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
            <h1>Listing Mergers & Acquisitions</h1>
            <p>Temukan berbagai peluang bisnis dan akuisisi perusahaan yang tersedia di Jepang.</p>
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
                    <div class="align-items-center">
                        <div class="mb-3 mb-md-0">
                            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                                <form id="filterForm">
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label small fw-bold">Bidang</label>
                                            <select class="form-select filter-input" id="filterBidang">
                                                <option value="">Semua Bidang</option>
                                                <option value="F&B">F&B (Restoran/Cafe)</option>
                                                <option value="Technology">Technology & IT</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Kesehatan">Kesehatan & Medis</option>
                                                <option value="Hospitality">Hospitality (Hotel)</option>
                                                <option value="Logistik">Logistik & Transportasi</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label small fw-bold">Area</label>
                                            <select class="form-select filter-input" id="filterArea">
                                                <option value="">Semua Area</option>
                                                <option value="Tokyo">Tokyo</option>
                                                <option value="Osaka">Osaka</option>
                                                <option value="Kyoto">Kyoto</option>
                                                <option value="Nagoya">Nagoya</option>
                                                <option value="Fukuoka">Fukuoka</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label small fw-bold">Budget (Yen)</label>
                                            <select class="form-select filter-input" id="filterBudget">
                                                <option value="">Semua Budget</option>
                                                <option value="0-300">Dibawah ¥ 300 Juta</option>
                                                <option value="300-600">¥ 300 - 600 Juta</option>
                                                <option value="600-1000">¥ 600 Juta - 1 Miliar</option>
                                                <option value="1000-99999">Diatas ¥ 1 Miliar</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label small fw-bold">Urutkan</label>
                                            <select class="form-select sort-select">
                                                <option value="newest">Terbaru</option>
                                                <option value="price-low">Harga: Rendah ke Tinggi</option>
                                                <option value="price-high">Harga: Tinggi ke Rendah</option>
                                                <option value="name">Nama (A-Z)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-link btn-sm text-decoration-none reset-filters">
                                            <i class="fas fa-sync-alt me-1"></i> Reset Filter
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Loading indicator -->
        <div class="loading-indicator text-center py-5" id="loadingIndicator">
            <div class="spinner-border text-secondary" role="status" style="width: 3rem; height: 3rem;">
                <span class="visually-hidden">Memuat...</span>
            </div>
            <p class="mt-3">Memuat semua peluang M&A...</p>
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
                    <i class="fas fa-handshake fa-3x text-muted"></i>
                </div>
                <h4>Tidak ada peluang M&A yang ditemukan</h4>
                <p class="text-muted">Coba ubah pengurutan atau kunjungi kembali nanti.</p>
                <button class="btn btn-secondary reset-filters">Reset Pengurutan</button>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="row mt-3" data-aos="fade-up" data-aos-duration="1000" style="display:none;">
            <div class="col-12">
                <div class="stats-card p-4 text-center" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);">
                    <h4 class="text-white mb-3">Statistik M&A</h4>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="text-white" id="totalListingsCount">0</h3>
                            <p class="text-white mb-0">Total Peluang</p>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="text-white" id="fnbCount">0</h3>
                            <p class="text-white mb-0">F&B</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-white" id="techCount">0</h3>
                            <p class="text-white mb-0">Teknologi</p>
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
    
    .mna-card {
        border: 1px solid #eaeaea;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        background: white;
    }
    
    .mna-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .mna-img {
        height: 220px;
        overflow: hidden;
    }
    
    .mna-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .mna-card:hover .mna-img img {
        transform: scale(1.05);
    }
    
    .mna-info {
        padding: 1.5rem;
    }
    
    .mna-price {
        font-size: 1.25rem;
        font-weight: bold;
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }
    
    .mna-features {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .mna-features span {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        color: #666;
    }
    
    .mna-features i {
        margin-right: 5px;
        color: #1d1f21;
    }
    
    .mna-type-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 1;
        box-shadow: 0 2px 6px rgba(248, 248, 248, 0.3);
        background-color: var(--secondary-color);
        color: white;
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
        .mna-img {
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
        // Elements
        const allListingsContainer = document.getElementById('allListingsContainer');
        const loadingIndicator = document.getElementById('loadingIndicator');
        const emptyState = document.getElementById('emptyState');
        const paginationContainer = document.getElementById('paginationContainer');
        const paginationList = document.getElementById('paginationList');
        
        // Input Elements
        const sortSelect = document.querySelector('.sort-select');
        const resetFiltersBtn = document.querySelector('.reset-filters');
        const filterBidang = document.getElementById('filterBidang');
        const filterArea = document.getElementById('filterArea');
        const filterBudget = document.getElementById('filterBudget');
        
        // Stats Elements
        const totalListingsCount = document.getElementById('totalListingsCount');
        const fnbCount = document.getElementById('fnbCount');
        const techCount = document.getElementById('techCount');
        
        let currentPage = 1;
        const listingsPerPage = 9;

        // Data dummy (Sama seperti data Anda sebelumnya)
        const mnaListingsData = [
            {
                id: 1,
                link: "detail-product-mna.php?id=1",
                title: "Restoran Sushi Premium di Ginza",
                location: "Ginza, Tokyo",
                price: "¥ 300 Juta",
                image: "https://images.unsplash.com/photo-1559329007-40df8a9345d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "F&B",
                features: [
                    { icon: "fas fa-utensils", text: "Restoran Sushi" },
                    { icon: "fas fa-yen-sign", text: "Omzet ¥80jt/bulan" },
                    { icon: "fas fa-users", text: "15 Karyawan" }
                ],
                dateAdded: "2024-02-14"
            },
            {
                id: 2,
                link: "detail-product-mna.php?id=2",
                title: "Startup Fintech Payment Gateway",
                location: "Shibuya, Tokyo",
                price: "¥ 750 Juta",
                image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Fintech",
                features: [
                    { icon: "fas fa-credit-card", text: "Payment System" },
                    { icon: "fas fa-chart-line", text: "Growth 35%/tahun" },
                    { icon: "fas fa-calendar-alt", text: "Berdiri 2019" }
                ],
                dateAdded: "2024-02-12"
            },
            {
                id: 3,
                link: "detail-product-mna.php?id=3",
                title: "Pabrik Elektronik di Osaka",
                location: "Osaka, Osaka",
                price: "¥ 1.2 Miliar",
                image: "https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Manufacturing",
                features: [
                    { icon: "fas fa-industry", text: "Pabrik Elektronik" },
                    { icon: "fas fa-chart-line", text: "Revenue Stabil" },
                    { icon: "fas fa-users", text: "120 Karyawan" }
                ],
                dateAdded: "2024-02-10"
            },
            {
                id: 4,
                link: "detail-product-mna.php?id=4",
                title: "Perusahaan Logistik & Distribution",
                location: "Yokohama, Kanagawa",
                price: "¥ 950 Juta",
                image: "https://images.unsplash.com/photo-1562887189-e5d078343de4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Logistik",
                features: [
                    { icon: "fas fa-truck", text: "Logistik Nasional" },
                    { icon: "fas fa-warehouse", text: "5 Gudang" },
                    { icon: "fas fa-users", text: "85 Karyawan" }
                ],
                dateAdded: "2024-02-08"
            },
            {
                id: 5,
                link: "detail-product-mna.php?id=5",
                title: "Klinik Kecantikan & Dermatologi",
                location: "Omotesando, Tokyo",
                price: "¥ 450 Juta",
                image: "https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Kesehatan",
                features: [
                    { icon: "fas fa-stethoscope", text: "Klinik Kecantikan" },
                    { icon: "fas fa-yen-sign", text: "Revenue ¥25jt/bulan" },
                    { icon: "fas fa-users", text: "8 Dokter" }
                ],
                dateAdded: "2024-02-06"
            },
            {
                id: 6,
                link: "detail-product-mna.php?id=6",
                title: "Platform E-commerce Fashion Local",
                location: "Harajuku, Tokyo",
                price: "¥ 380 Juta",
                image: "https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "E-commerce",
                features: [
                    { icon: "fas fa-store", text: "Fashion E-commerce" },
                    { icon: "fas fa-chart-line", text: "30K User Active" },
                    { icon: "fas fa-calendar-alt", text: "Berdiri 2020" }
                ],
                dateAdded: "2024-02-04"
            },
            {
                id: 7,
                link: "detail-product-mna.php?id=7",
                title: "Cafe & Roastery Speciality Coffee",
                location: "Daikanyama, Tokyo",
                price: "¥ 220 Juta",
                image: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "F&B",
                features: [
                    { icon: "fas fa-coffee", text: "Specialty Coffee" },
                    { icon: "fas fa-yen-sign", text: "Omzet ¥35jt/bulan" },
                    { icon: "fas fa-users", text: "12 Karyawan" }
                ],
                dateAdded: "2024-02-02"
            },
            {
                id: 8,
                link: "detail-product-mna.php?id=8",
                title: "Software House AI Development",
                location: "Shibuya, Tokyo",
                price: "¥ 680 Juta",
                image: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Technology",
                features: [
                    { icon: "fas fa-laptop-code", text: "AI Development" },
                    { icon: "fas fa-chart-line", text: "MRR ¥15jt" },
                    { icon: "fas fa-users", text: "25 Developer" }
                ],
                dateAdded: "2024-01-30"
            },
            {
                id: 9,
                link: "detail-product-mna.php?id=9",
                title: "Perusahaan Konstruksi & Engineering",
                location: "Chiyoda, Tokyo",
                price: "¥ 1.5 Miliar",
                image: "https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Konstruksi",
                features: [
                    { icon: "fas fa-hard-hat", text: "Konstruksi" },
                    { icon: "fas fa-yen-sign", text: "Revenue ¥500jt/tahun" },
                    { icon: "fas fa-users", text: "50 Engineer" }
                ],
                dateAdded: "2024-01-28"
            },
            {
                id: 10,
                link: "detail-product-mna.php?id=10",
                title: "Boutique Hotel Kecil di Kyoto",
                location: "Kyoto, Kyoto",
                price: "¥ 850 Juta",
                image: "https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Hospitality",
                features: [
                    { icon: "fas fa-hotel", text: "Boutique Hotel" },
                    { icon: "fas fa-bed", text: "12 Kamar" },
                    { icon: "fas fa-users", text: "10 Staff" }
                ],
                dateAdded: "2024-01-26"
            },
            {
                id: 11,
                link: "detail-product-mna.php?id=11",
                title: "Perusahaan Renewable Energy Solar",
                location: "Fukuoka, Fukuoka",
                price: "¥ 1.1 Miliar",
                image: "https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Energy",
                features: [
                    { icon: "fas fa-solar-panel", text: "Solar Energy" },
                    { icon: "fas fa-chart-line", text: "Growing Market" },
                    { icon: "fas fa-users", text: "35 Karyawan" }
                ],
                dateAdded: "2024-01-24"
            },
            {
                id: 12,
                link: "detail-product-mna.php?id=12",
                title: "Ramen Chain 3 Outlet",
                location: "Shinjuku, Tokyo",
                price: "¥ 550 Juta",
                image: "https://images.unsplash.com/photo-1557872943-16a5ac26437e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "F&B",
                features: [
                    { icon: "fas fa-utensils", text: "Ramen Chain" },
                    { icon: "fas fa-store", text: "3 Outlet" },
                    { icon: "fas fa-users", text: "45 Karyawan" }
                ],
                dateAdded: "2024-01-22"
            },
            {
                id: 13,
                link: "detail-product-mna.php?id=13",
                title: "Startup EduTech Platform",
                location: "Shibuya, Tokyo",
                price: "¥ 320 Juta",
                image: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "EduTech",
                features: [
                    { icon: "fas fa-graduation-cap", text: "Learning Platform" },
                    { icon: "fas fa-chart-line", text: "50K Active Users" },
                    { icon: "fas fa-users", text: "20 Developer" }
                ],
                dateAdded: "2024-01-20"
            },
            {
                id: 14,
                link: "detail-product-mna.php?id=14",
                title: "Perusahaan Trading Import-Export",
                location: "Osaka, Osaka",
                price: "¥ 700 Juta",
                image: "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Trading",
                features: [
                    { icon: "fas fa-globe", text: "Import-Export" },
                    { icon: "fas fa-yen-sign", text: "Revenue ¥800jt/tahun" },
                    { icon: "fas fa-users", text: "30 Karyawan" }
                ],
                dateAdded: "2024-01-18"
            },
            {
                id: 15,
                link: "detail-product-mna.php?id=15",
                title: "Digital Marketing Agency",
                location: "Minato, Tokyo",
                price: "¥ 280 Juta",
                image: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Marketing",
                features: [
                    { icon: "fas fa-bullhorn", text: "Digital Marketing" },
                    { icon: "fas fa-chart-line", text: "30 Client Active" },
                    { icon: "fas fa-users", text: "18 Specialist" }
                ],
                dateAdded: "2024-01-16"
            },
            {
                id: 16,
                link: "detail-product-mna.php?id=16",
                title: "Distributor Otomotif Parts",
                location: "Nagoya, Aichi",
                price: "¥ 620 Juta",
                image: "https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Otomotif",
                features: [
                    { icon: "fas fa-car", text: "Auto Parts" },
                    { icon: "fas fa-warehouse", text: "3 Gudang" },
                    { icon: "fas fa-users", text: "40 Karyawan" }
                ],
                dateAdded: "2024-01-14"
            },
            {
                id: 17,
                link: "detail-product-mna.php?id=17",
                title: "Pharmacy Chain 5 Outlet",
                location: "Sapporo, Hokkaido",
                price: "¥ 480 Juta",
                image: "https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Kesehatan",
                features: [
                    { icon: "fas fa-pills", text: "Pharmacy Chain" },
                    { icon: "fas fa-store", text: "5 Outlet" },
                    { icon: "fas fa-users", text: "35 Pharmacist" }
                ],
                dateAdded: "2024-01-12"
            },
            {
                id: 18,
                link: "detail-product-mna.php?id=18",
                title: "VR/AR Tech Startup",
                location: "Shibuya, Tokyo",
                price: "¥ 400 Juta",
                image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Technology",
                features: [
                    { icon: "fas fa-vr-cardboard", text: "VR/AR Technology" },
                    { icon: "fas fa-chart-line", text: "Seed Funding Stage" },
                    { icon: "fas fa-users", text: "15 Developer" }
                ],
                dateAdded: "2024-01-10"
            }
        ];

        // --- CORE LOGIC ---

        function getFilteredAndSortedData() {
            let filtered = [...mnaListingsData];

            // 1. Filter Bidang
            const bidang = filterBidang.value;
            if (bidang) {
                filtered = filtered.filter(item => item.category === bidang);
            }

            // 2. Filter Area
            const area = filterArea.value.toLowerCase();
            if (area) {
                filtered = filtered.filter(item => item.location.toLowerCase().includes(area));
            }

            // 3. Filter Budget
            const budget = filterBudget.value;
            if (budget) {
                const [min, max] = budget.split('-').map(Number);
                filtered = filtered.filter(item => {
                    // Konversi "¥ 1.2 Miliar" atau "¥ 300 Juta" ke angka numerik jutaan
                    let priceStr = item.price.replace(/[^\d.]/g, '');
                    let priceNum = parseFloat(priceStr);
                    if (item.price.includes('Miliar')) priceNum *= 1000;
                    return priceNum >= min && priceNum <= max;
                });
            }

            // 4. Sorting
            const sortBy = sortSelect.value;
            const extractPrice = (str) => {
                let p = parseFloat(str.replace(/[^\d.]/g, ''));
                return str.includes('Miliar') ? p * 1000 : p;
            };

            switch(sortBy) {
                case 'price-low': filtered.sort((a, b) => extractPrice(a.price) - extractPrice(b.price)); break;
                case 'price-high': filtered.sort((a, b) => extractPrice(b.price) - extractPrice(a.price)); break;
                case 'name': filtered.sort((a, b) => a.title.localeCompare(b.title)); break;
                case 'newest':
                default: filtered.sort((a, b) => new Date(b.dateAdded) - new Date(a.dateAdded)); break;
            }

            return filtered;
        }

        function renderAllListings() {
            const listings = getFilteredAndSortedData();
            allListingsContainer.innerHTML = '';
            
            if (listings.length === 0) {
                emptyState.classList.remove('d-none');
                allListingsContainer.classList.add('d-none');
                paginationContainer.classList.add('d-none');
                updateStats([]);
                return;
            }
            
            emptyState.classList.add('d-none');
            allListingsContainer.classList.remove('d-none');
            
            // Pagination logic
            const startIndex = (currentPage - 1) * listingsPerPage;
            const paginatedListings = listings.slice(startIndex, startIndex + listingsPerPage);
            createPagination(listings.length);
            
            paginatedListings.forEach((listing, index) => {
                const featuresHtml = listing.features.map(f => `<span><i class="${f.icon}"></i> ${f.text}</span>`).join('');
                const html = `
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="${index % 3 * 100}">
                        <div class="mna-card h-100 position-relative">
                            <div class="mna-type-badge">M&A</div>
                            <div class="mna-img"><img src="${listing.image}" alt="${listing.title}" loading="lazy"></div>
                            <div class="mna-info">
                                <h5 class="mb-2">${listing.title}</h5>
                                <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-1"></i> ${listing.location}</p>
                                <p class="mna-price mb-3">${listing.price}</p>
                                <div class="mna-features mb-3">${featuresHtml}</div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-secondary">${listing.category}</span>
                                    <a href="${listing.link}" class="btn btn-secondary btn-sm">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>`;
                allListingsContainer.innerHTML += html;
            });
            
            updateStats(listings);
            setTimeout(() => AOS.refresh(), 100);
        }

        function createPagination(totalItems) {
            paginationList.innerHTML = '';
            const totalPages = Math.ceil(totalItems / listingsPerPage);
            if (totalPages <= 1) { paginationContainer.classList.add('d-none'); return; }
            paginationContainer.classList.remove('d-none');

            // Previous
            paginationList.innerHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}"><a class="page-link" href="#" data-page="${currentPage - 1}">Sebelumnya</a></li>`;
            
            for (let i = 1; i <= totalPages; i++) {
                paginationList.innerHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}"><a class="page-link" href="#" data-page="${i}">${i}</a></li>`;
            }

            // Next
            paginationList.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}"><a class="page-link" href="#" data-page="${currentPage + 1}">Selanjutnya</a></li>`;
        }

        function updateStats(listings) {
            totalListingsCount.textContent = listings.length;
            fnbCount.textContent = listings.filter(l => l.category === 'F&B').length;
            techCount.textContent = listings.filter(l => l.category === 'Technology').length;
        }

        // --- EVENTS ---

        [filterBidang, filterArea, filterBudget, sortSelect].forEach(el => {
            el.addEventListener('change', () => {
                currentPage = 1;
                renderAllListings();
            });
        });

        resetFiltersBtn.addEventListener('click', () => {
            filterBidang.value = "";
            filterArea.value = "";
            filterBudget.value = "";
            sortSelect.value = "newest";
            currentPage = 1;
            renderAllListings();
        });

        paginationList.addEventListener('click', (e) => {
            e.preventDefault();
            const page = parseInt(e.target.dataset.page);
            if (page && page !== currentPage) {
                currentPage = page;
                renderAllListings();
                window.scrollTo({ top: allListingsContainer.offsetTop - 100, behavior: 'smooth' });
            }
        });

        // Init
        setTimeout(() => {
            loadingIndicator.classList.add('d-none');
            renderAllListings();
        }, 500);
    });
</script>