<?php include 'header.php'; ?>

<!-- About Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
            <h1>Semua Product Listing</h1>
            <p>Temukan seluruh properti dan peluang M&A yang tersedia. Filter berdasarkan kategori untuk menemukan yang sesuai dengan kebutuhan investasi Anda.</p>
        </div>
    </div>
</section>

<!-- Listings Section -->
<section class="listings-section py-4">
    <div class="container">
        <!-- Filter Section -->
        <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <div class="card filter-card p-4">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <h5 class="mb-2">Filter Listing</h5>
                            <p class="text-muted small">Sesuaikan pencarian sesuai kebutuhan</p>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex flex-wrap align-items-center justify-content-md-end gap-3">
                                <div class="filter-group">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label small text-muted mb-0 me-2">Tipe Listing:</label>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-outline-primary filter-btn active" data-type="all">Semua</button>
                                            <button type="button" class="btn btn-outline-primary filter-btn" data-type="property">Properti</button>
                                            <button type="button" class="btn btn-outline-primary filter-btn" data-type="mna">M&A</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-group">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label small text-muted mb-0 me-2">Urutkan:</label>
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
                </div>
            </div>
        </div>
        
        <!-- Loading indicator -->
        <div class="loading-indicator text-center py-5" id="loadingIndicator">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                <span class="visually-hidden">Memuat...</span>
            </div>
            <p class="mt-3">Memuat semua listing...</p>
        </div>
        
        <!-- Container untuk semua listing -->
        <div class="row" id="allListingsContainer">
            <!-- Data akan dimuat secara dinamis -->
        </div>
        
        <!-- Pagination (opsional untuk data banyak) -->
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
                    <i class="fas fa-search fa-3x text-muted"></i>
                </div>
                <h4>Tidak ada listing yang ditemukan</h4>
                <p class="text-muted">Coba ubah filter pencarian Anda atau kunjungi kembali nanti.</p>
                <button class="btn btn-primary reset-filters">Reset Filter</button>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="row mt-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <div class="stats-card p-4 text-center" style="display: none">
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="text-primary" id="totalListingsCount">0</h3>
                            <p class="text-muted mb-0">Total Listing</p>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3 class="text-primary" id="propertyCount">0</h3>
                            <p class="text-muted mb-0">Properti Tersedia</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-primary" id="mnaCount">0</h3>
                            <p class="text-muted mb-0">Peluang M&A</p>
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
    /* Additional Styles for Listings Page */
    .listings-section {
        background-color: #fff;
    }
    
    .filter-card {
        background: #f8f9fa;
        border-radius: 10px;
        border: 1px solid #eaeaea;
    }
    
    /* Perbaikan untuk filter section */
    .filter-group .d-flex {
        flex-wrap: nowrap;
    }

    /* Responsive untuk mobile */
    @media (max-width: 768px) {
        .filter-group {
            width: 100%;
        }
        
        .filter-group .d-flex {
            flex-wrap: wrap;
        }
        
        .filter-group .btn-group {
            width: 100%;
            margin-top: 5px;
        }
        
        .filter-group .btn-group .btn {
            flex: 1;
            /* margin-right: 5px; */
            margin-bottom: 5px;
        }
        
        .sort-select {
            min-width: 100% !important;
            margin-top: 5px;
        }
    }

    /* Untuk desktop */
    @media (min-width: 769px) {
        .filter-group {
            flex: 0 0 auto;
        }
    }

    .btn-outline-primary {
        border-color: var(--primary-color);
        color: #8c8c8c;
    }


    .btn-outline-primary.active {
        border-color: var(--secondary-color); /* Hijau untuk properti */
        color: #dedcdc;
        background-color: var(--primary-color);
    }

    /* Warna khusus untuk hover */
    .btn-outline-primary:hover:not(.active) {
        border-color: #1d1f21;
        color: #1d1f21;
        background-color: #c6c6c6;
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
        color: var(--secondary-color);
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
    }
    
    .badge-property {
        background-color: var(--primary-color);
        color: white;
    }
    
    .badge-mna {
        background-color: var(--secondary-color);
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
        color: white!important;
    }
    
    .stats-card p {
        color: white!important;
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
    
    /* Pagination Styles */
    .pagination .page-link {
        padding: 0.5rem 0.75rem;
        border: 1px solid #dee2e6;
        color: var(--primary-color);
        transition: all 0.2s ease;
    }

    .pagination .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    .pagination .page-link:hover {
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .pagination .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
        border-color: #dee2e6;
    }

    /* Hover effect */
    .pagination .page-item:not(.active):not(.disabled) .page-link:hover {
        background-color: #f8f9fa;
        transform: translateY(-1px);
    }
    
    @media (max-width: 768px) {
        .property-img {
            height: 180px;
        }
        
        .filter-group {
            width: 100%;
        }
        
        .btn-group {
            width: 100%;
        }
        
        .btn-group .btn {
            flex: 1;
        }
        
        .sort-select {
            width: 100% !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const allListingsContainer = document.getElementById('allListingsContainer');
        const loadingIndicator = document.getElementById('loadingIndicator');
        const emptyState = document.getElementById('emptyState');
        const paginationContainer = document.getElementById('paginationContainer');
        const paginationList = document.getElementById('paginationList');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const sortSelect = document.querySelector('.sort-select');
        const resetFiltersBtn = document.querySelector('.reset-filters');
        
        // Counter elements
        const totalListingsCount = document.getElementById('totalListingsCount');
        const propertyCount = document.getElementById('propertyCount');
        const mnaCount = document.getElementById('mnaCount');
        
        // Variabel untuk pagination
        let currentPage = 1;
        const listingsPerPage = 6; // Tampilkan 6 item per halaman
        
        // Data dummy untuk semua listing (gabungan dari property dan M&A)
        const allListingsData = [
            // Property Listings
            {
                id: 1,
                link: "detail-product-mna.php?id=1",
                title: "Apartemen Green Valley",
                location: "Jakarta Selatan",
                price: "Rp 1,2 Miliar",
                image: "https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "property",
                category: "Apartemen",
                features: [
                    { icon: "fas fa-bed", text: "3 Kamar" },
                    { icon: "fas fa-bath", text: "2 Kamar Mandi" },
                    { icon: "fas fa-ruler-combined", text: "120 m²" }
                ],
                dateAdded: "2024-01-15",
                animation: "fade-up"
            },
            {
                id: 2,
                link: "detail-product-mna.php?id=2",
                title: "Rumah Mewah Taman Palem",
                location: "Tangerang",
                price: "Rp 3,5 Miliar",
                image: "https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "property",
                category: "Rumah",
                features: [
                    { icon: "fas fa-bed", text: "4 Kamar" },
                    { icon: "fas fa-bath", text: "3 Kamar Mandi" },
                    { icon: "fas fa-ruler-combined", text: "250 m²" }
                ],
                dateAdded: "2024-01-10",
                animation: "fade-up"
            },
            {
                id: 3,
                link: "detail-product-mna.php?id=3",
                title: "Gedung Perkantoran Central Park",
                location: "Jakarta Barat",
                price: "Rp 25 Miliar",
                image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "property",
                category: "Komersial",
                features: [
                    { icon: "fas fa-building", text: "12 Lantai" },
                    { icon: "fas fa-car", text: "100 Parkir" },
                    { icon: "fas fa-ruler-combined", text: "5000 m²" }
                ],
                dateAdded: "2024-01-05",
                animation: "fade-up"
            },
            {
                id: 6,
                link: "detail-product-mna.php?id=6",
                title: "Apartemen Lux di Kuningan",
                location: "Jakarta Selatan",
                price: "Rp 2,8 Miliar",
                image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "property",
                category: "Apartemen",
                features: [
                    { icon: "fas fa-bed", text: "3 Kamar" },
                    { icon: "fas fa-bath", text: "2 Kamar Mandi" },
                    { icon: "fas fa-swimming-pool", text: "Kolam Renang" }
                ],
                dateAdded: "2024-01-18",
                animation: "fade-up"
            },
            {
                id: 7,
                link: "detail-product-mna.php?id=7",
                title: "Townhouse BSD City",
                location: "Tangerang Selatan",
                price: "Rp 4,2 Miliar",
                image: "https://images.unsplash.com/photo-1518780664697-55e3ad937233?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "property",
                category: "Rumah",
                features: [
                    { icon: "fas fa-bed", text: "4 Kamar" },
                    { icon: "fas fa-bath", text: "3 Kamar Mandi" },
                    { icon: "fas fa-car", text: "2 Carport" }
                ],
                dateAdded: "2024-01-12",
                animation: "fade-up"
            },
            
            // M&A Listings
            {
                id: 4,
                link: "detail-product-mna.php?id=4",
                title: "Restoran Jepang di Shinjuku",
                location: "Tokyo, Jepang",
                price: "Rp 150 Juta",
                image: "https://images.unsplash.com/photo-1559329007-40df8a9345d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "F&B",
                features: [
                    { icon: "fas fa-utensils", text: "Restoran" },
                    { icon: "fas fa-yen-sign", text: "Omzet ¥50jt/bulan" },
                    { icon: "fas fa-users", text: "10 Karyawan" }
                ],
                dateAdded: "2024-01-20",
                animation: "fade-left"
            },
            {
                id: 5,
                link: "detail-product-mna.php?id=5",
                title: "Startup E-commerce Fashion",
                location: "Osaka, Jepang",
                price: "Rp 500 Juta",
                image: "https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "E-commerce",
                features: [
                    { icon: "fas fa-store", text: "E-commerce" },
                    { icon: "fas fa-chart-line", text: "Growth 20%/tahun" },
                    { icon: "fas fa-calendar-alt", text: "Berdiri 2018" }
                ],
                dateAdded: "2024-01-17",
                animation: "fade-left"
            },
            {
                id: 8,
                link: "detail-product-mna.php?id=8",
                title: "Manufacturing Company Nagoya",
                location: "Nagoya, Jepang",
                price: "Rp 800 Juta",
                image: "https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Manufacturing",
                features: [
                    { icon: "fas fa-industry", text: "Pabrik" },
                    { icon: "fas fa-chart-line", text: "Stabil 5 tahun" },
                    { icon: "fas fa-users", text: "45 Karyawan" }
                ],
                dateAdded: "2024-01-14",
                animation: "fade-left"
            },
            {
                id: 9,
                link: "detail-product-mna.php?id=9",
                title: "Tech Startup Kyoto",
                location: "Kyoto, Jepang",
                price: "Rp 300 Juta",
                image: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                type: "mna",
                category: "Technology",
                features: [
                    { icon: "fas fa-laptop-code", text: "SaaS Platform" },
                    { icon: "fas fa-chart-line", text: "MRR ¥10jt" },
                    { icon: "fas fa-users", text: "8 Karyawan" }
                ],
                dateAdded: "2024-01-08",
                animation: "fade-left"
            }
        ];
        
        // Fungsi untuk membuat pagination
        function createPagination(totalItems, currentPage, itemsPerPage) {
            paginationList.innerHTML = '';
            
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            
            if (totalPages <= 1) {
                paginationContainer.classList.add('d-none');
                return;
            }
            
            paginationContainer.classList.remove('d-none');
            
            // Tombol Previous
            const prevLi = document.createElement('li');
            prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
            prevLi.innerHTML = `
                <a class="page-link" href="#" data-page="${currentPage - 1}">
                    <i class="fas fa-chevron-left me-1"></i> Sebelumnya
                </a>
            `;
            paginationList.appendChild(prevLi);
            
            // Nomor halaman
            let startPage = Math.max(1, currentPage - 1);
            let endPage = Math.min(totalPages, startPage + 2);
            
            if (endPage - startPage < 2) {
                startPage = Math.max(1, endPage - 2);
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageLi = document.createElement('li');
                pageLi.className = `page-item ${i === currentPage ? 'active' : ''}`;
                pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
                paginationList.appendChild(pageLi);
            }
            
            // Tombol Next
            const nextLi = document.createElement('li');
            nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
            nextLi.innerHTML = `
                <a class="page-link" href="#" data-page="${currentPage + 1}">
                    Selanjutnya <i class="fas fa-chevron-right ms-1"></i>
                </a>
            `;
            paginationList.appendChild(nextLi);
        }
        
        // Fungsi untuk merender semua listing dengan pagination
        function renderAllListings(listings) {
            allListingsContainer.innerHTML = '';
            
            if (listings.length === 0) {
                emptyState.classList.remove('d-none');
                allListingsContainer.classList.add('d-none');
                paginationContainer.classList.add('d-none');
                return;
            }
            
            emptyState.classList.add('d-none');
            allListingsContainer.classList.remove('d-none');
            
            // Hitung pagination
            const startIndex = (currentPage - 1) * listingsPerPage;
            const endIndex = startIndex + listingsPerPage;
            const paginatedListings = listings.slice(startIndex, endIndex);
            
            // Buat pagination
            createPagination(listings.length, currentPage, listingsPerPage);
            
            // Render listing untuk halaman saat ini
            paginatedListings.forEach((listing, index) => {
                const featuresHtml = listing.features.map(feature => 
                    `<span><i class="${feature.icon}"></i> ${feature.text}</span>`
                ).join('');
                
                const animationDelay = index % 3 * 100;
                const badgeClass = listing.type === 'property' ? 'badge-property' : 'badge-mna';
                const badgeText = listing.type === 'property' ? 'Properti' : 'M&A';
                
                const listingHtml = `
                    <div class="col-md-6 col-lg-4 mb-4" 
                         data-aos="${listing.animation || 'fade-up'}"
                         data-aos-delay="${animationDelay}"
                         data-aos-duration="800">
                        <div class="property-card h-100 position-relative">
                            <div class="property-type-badge ${badgeClass}">${badgeText}</div>
                            <div class="property-img">
                                <img src="${listing.image}" alt="${listing.title}" loading="lazy">
                            </div>
                            <div class="property-info">
                                <h5 class="mb-2">${listing.title}</h5>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-1"></i> ${listing.location}
                                </p>
                                <p class="property-price mb-3">${listing.price}</p>
                                <div class="property-features mb-3">
                                    ${featuresHtml}
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-secondary">${listing.category}</span>
                                    <a href="${listing.link}" class="btn btn-primary btn-sm">
                                        Detail <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                allListingsContainer.innerHTML += listingHtml;
            });
            
            // Update counters
            updateCounters(listings);
            
            // Refresh AOS setelah menambahkan elemen baru
            setTimeout(() => {
                AOS.refresh();
            }, 100);
        }
        
        // Fungsi untuk update counters
        function updateCounters(listings) {
            totalListingsCount.textContent = listings.length;
            
            const propertyCountValue = listings.filter(listing => listing.type === 'property').length;
            const mnaCountValue = listings.filter(listing => listing.type === 'mna').length;
            
            propertyCount.textContent = propertyCountValue;
            mnaCount.textContent = mnaCountValue;
        }
        
        // Fungsi untuk filter listing
        function filterListings(type) {
            loadingIndicator.classList.remove('d-none');
            allListingsContainer.classList.add('d-none');
            
            setTimeout(() => {
                let filteredListings = [];
                
                if (type === 'all') {
                    filteredListings = [...allListingsData];
                } else {
                    filteredListings = allListingsData.filter(listing => listing.type === type);
                }
                
                // Apply sorting
                const sortValue = sortSelect.value;
                filteredListings = sortListings(filteredListings, sortValue);
                
                renderAllListings(filteredListings);
                
                loadingIndicator.classList.add('d-none');
                allListingsContainer.classList.remove('d-none');
                
                // Update active filter button
                filterButtons.forEach(btn => {
                    if (btn.dataset.type === type) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            }, 500);
        }
        
        // Fungsi untuk sorting
        function sortListings(listings, sortBy) {
            const sortedListings = [...listings];
            
            switch(sortBy) {
                case 'price-low':
                    // Untuk sorting harga, perlu konversi ke angka
                    sortedListings.sort((a, b) => {
                        // Extract numeric value from price string
                        const extractNumber = (priceStr) => {
                            const matches = priceStr.match(/[\d,.]+/);
                            return matches ? parseFloat(matches[0].replace(/[,.]/g, '')) : 0;
                        };
                        
                        return extractNumber(a.price) - extractNumber(b.price);
                    });
                    break;
                    
                case 'price-high':
                    sortedListings.sort((a, b) => {
                        const extractNumber = (priceStr) => {
                            const matches = priceStr.match(/[\d,.]+/);
                            return matches ? parseFloat(matches[0].replace(/[,.]/g, '')) : 0;
                        };
                        
                        return extractNumber(b.price) - extractNumber(a.price);
                    });
                    break;
                    
                case 'name':
                    sortedListings.sort((a, b) => a.title.localeCompare(b.title));
                    break;
                    
                case 'newest':
                default:
                    sortedListings.sort((a, b) => new Date(b.dateAdded) - new Date(a.dateAdded));
                    break;
            }
            
            return sortedListings;
        }
        
        // Event listener untuk tombol filter
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const type = this.dataset.type;
                currentPage = 1; // Reset ke halaman 1 saat filter berubah
                filterListings(type);
            });
        });
        
        // Event listener untuk sorting
        sortSelect.addEventListener('change', function() {
            const activeFilter = document.querySelector('.filter-btn.active').dataset.type;
            currentPage = 1; // Reset ke halaman 1 saat sorting berubah
            filterListings(activeFilter);
        });
        
        // Event listener untuk reset filters
        if (resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', function() {
                currentPage = 1; // Reset ke halaman 1 saat reset filter
                filterListings('all');
                sortSelect.value = 'newest';
                
                filterButtons.forEach(btn => {
                    if (btn.dataset.type === 'all') {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });
            });
        }
        
        // Event listener untuk pagination (gunakan event delegation)
        paginationContainer.addEventListener('click', function(e) {
            e.preventDefault();
            
            const pageLink = e.target.closest('.page-link');
            if (!pageLink) return;
            
            const page = parseInt(pageLink.dataset.page);
            if (!isNaN(page)) {
                currentPage = page;
                
                const activeFilter = document.querySelector('.filter-btn.active').dataset.type;
                let filteredListings = [];
                
                if (activeFilter === 'all') {
                    filteredListings = [...allListingsData];
                } else {
                    filteredListings = allListingsData.filter(listing => listing.type === activeFilter);
                }
                
                // Apply sorting
                const sortValue = sortSelect.value;
                filteredListings = sortListings(filteredListings, sortValue);
                
                renderAllListings(filteredListings);
                
                // Scroll ke atas kontainer listing
                allListingsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
        
        // Load semua listing saat halaman pertama kali diakses
        filterListings('all');
    });
</script>