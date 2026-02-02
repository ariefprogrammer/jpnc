<?php include 'header.php'; ?>

<!-- Breadcrumb Navigation -->
<section class="breadcrumb-section py-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="listing.php">Perusahaan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Perusahaan</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Product Detail Section -->
<section class="product-detail-section py-2">
    <div class="container">
        <!-- Product Images Slider -->
        <div class="col-12 mt-2" data-aos="fade-right" data-aos-duration="1000">
            <div id="propertyDetailSlider" class="carousel slide property-detail-carousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#propertyDetailSlider" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#propertyDetailSlider" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#propertyDetailSlider" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#propertyDetailSlider" data-bs-slide-to="3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                            class="d-block w-100" alt="Properti Eksterior">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                            class="d-block w-100" alt="Interior Ruang Tamu">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1560184897-ae75f418493e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                            class="d-block w-100" alt="Kamar Tidur">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                            class="d-block w-100" alt="Dapur Modern">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#propertyDetailSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#propertyDetailSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
            
        <!-- Product Info & Table -->
        <div class="col-12 mt-2" data-aos="fade-left" data-aos-duration="1000">
            <!-- Product Basic Info -->
            <div class="mt-5">
                <div class="mb-2">
                    <!-- <span class="badge bg-primary fs-6 mb-3">For Sale</span> -->
                    <h2 class="product-title mb-3">Apartemen Mewah Minami-Azabu, Tokyo</h2>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt text-danger me-2"></i>
                        <span class="text-muted">Minami-Azabu, Minato-ku, Tokyo</span>
                    </div>
                </div>
                
                <div class="product-price">
                    <h3 class="text-primary">¥ 185,000,000</h3>
                </div>

                <!-- Quick Details -->
                <div class="quick-details mt-3">
                    <div class="row">
                        <div class="col-md-2 mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-hashtag me-2"></i>
                                <span>No. 80142</span>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calendar-day me-2" ></i>
                                19/12/2025</span>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-sync-alt me-2"></i>
                                <span>19/12/2025</span>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-eye me-2"></i>
                                <span>1,374</span>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-handshake me-2"></i>
                                <span>41</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-2">
            <div class="mt-5" data-aos="fade-up">
                <h3 class="mb-3">Lokasi Properti</h3>
                <div id="propertyMap" style="height: 400px; width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: 1px solid #ddd;"></div>
            </div>
            <!-- Product Description -->
            <div class="product-description mt-5" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="mb-3">Deskripsi Properti</h3>
                <p style="text-align: justify;">
                    Apartemen mewah berlokasi strategis di pusat kota Tokyo dengan akses mudah ke stasiun kereta, pusat perbelanjaan, dan area bisnis. 
                    Bangunan ini menawarkan fasilitas lengkap termasuk kolam renang, gym 24 jam, ruang konferensi, dan keamanan 24/7.
                </p>
                <p style="text-align: justify;">
                    Unit ini baru saja direnovasi dengan material berkualitas tinggi, sistem smart home, dan desain interior yang modern. 
                    Cocok untuk investasi jangka panjang dengan potensi capital gain yang tinggi atau penyewaan bulanan dengan yield menarik.
                </p>
            </div>

            <!-- Financial Performance Table -->
            <div class="financial-performance mt-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">Penjualan</th>
                                <th class="text-center">Laba Usaha</th>
                                <th class="text-center">Kekayaan Bersih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="height:80px;">
                                <td class="text-center">¥ 8,400,000</td>
                                <td class="text-center">¥ 6,600,000</td>
                                <td class="text-center">¥ 95,000,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="financial-performance mt-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="table-responsive">
                    <table class="table table-bordered custom-table">
                        <tbody>
                            <tr>
                                <td class="text-center bg-body-tertiary">Industri</td>
                                <td class="text-center" colspan="5">Manajemen dan Perantara Properti Sewa</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-body-tertiary">Wilayah</td>
                                <td class="text-center">Tokyo</td>
                                <td class="text-center bg-body-tertiary">Karyawan</td>
                                <td class="text-center">Hingga 4 Orang</td>
                                <td class="text-center bg-body-tertiary">Pembentukan</td>
                                <td class="text-center">Tidak terdaftar</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-body-tertiary">Alasan Penjualan</td>
                                <td class="text-center" colspan="5">Tidak ada penerus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-4" data-aos="fade-up" data-aos-duration="1200">
                <h4>Komentar dari para ahli M&A</h4>
                <div class="product-info-card p-4 mt-3">
                    <p style="text-align: justify;">
                        Properti ini menawarkan peluang investasi yang sangat baik di pasar Tokyo yang dinamis. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
<section class="related-products-section py-5 bg-light">
    <div class="container">
        <div class="financial-performance mt-2" data-aos="fade-up" data-aos-duration="1200">
            <div class="table-responsive">
                <table class="table table-bordered custom-table">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-start" colspan="2">Informasi Bisnis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:80px;">
                            <td class="text-start">Konten Bisnis</td>
                            <td class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        </tr>
                        <tr style="height:80px;">
                            <td class="text-start">Kekuatan dan Poin Penjualan</td>
                            <td class="text-start">(10) Lisensi real estat diperlukan untuk memulai usaha</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="financial-performance mt-4" data-aos="fade-up" data-aos-duration="1200">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-start" colspan="2">Informasi Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:80px;" style="padding: 20px!important;">
                            <td class="text-start">Alasan Transfer</td>
                            <td class="text-start">
                                <span class="btn btn-outline-success">Tidak ada penerus</span>
                                <span class="btn btn-outline-secondary">Keluar</span>
                                <span class="btn btn-outline-secondary">Seleksi & Konsentrasi</span>
                                <span class="btn btn-outline-secondary">Memperluas bisnis melalui akuisisi modal</span>
                            </td>
                        </tr>
                        <tr style="height:80px;">
                            <td class="text-start">Ketentuan Transfer</td>
                            <td class="text-start">
                                <div class="row p-2 bg-white">
                                    <div class="col-4">Subjek Negosiasi</div>
                                    <div class="col-8">: Perusahaan/Perorangan/Pemilik Usaha Perseorangan</div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">Skema Transfer</div>
                                    <div class="col-8">: Pengalihan Perusahaan</div>
                                </div>
                                <div class="row p-2 bg-white">
                                    <div class="col-4">Hal-hal yang perlu dipertimbangkan</div>
                                    <div class="col-8">: Kecepatan</div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">Formula Bisnis</div>
                                    <div class="col-8">: Perusahaan</div>
                                </div>
                                <div class="row p-2 bg-white">
                                    <div class="col-4">Ketersediaan tenaga profesional</div>
                                    <div class="col-8">: Bisa jadi</div>
                                </div>
                            </td>
                        </tr>
                        <tr style="height:80px;">
                            <td class="text-start">Informasi Keuangan</td>
                            <td class="text-start">
                                <div class="row p-2 bg-white">
                                    <div class="col-4">Penjualan</div>
                                    <div class="col-8">: Lorem ipsum</div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">Laba Usaha</div>
                                    <div class="col-8">: Lorem ipsum</div>
                                </div>
                                <div class="row p-2 bg-white">
                                    <div class="col-4">Kompensasi Eksekutif</div>
                                    <div class="col-8">: Lorem ipsum</div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">Aset yang akan dipindahkan</div>
                                    <div class="col-8">: Lorem ipsum</div>
                                </div>
                                <div class="row p-2 bg-white">
                                    <div class="col-4">Pinjaman Keuangan</div>
                                    <div class="col-8">: Lorem ipsum</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            
        <div class="financial-performance mt-4" data-aos="fade-up" data-aos-duration="1200">
            <h4>Biaya selain dari pertimbangan transfer</h4>
            <div class="table-responsive mt-3">
                <table class="table table-bordered custom-table">
                    <tbody>
                        <tr>
                            <td class="text-start">Biaya penggunaan sistem pada saat kontrak</td>
                            <td class="text-start">2,0% dari harga kontrak (2,2% termasuk pajak)</td>
                        </tr>
                        <tr>
                            <td class="text-start">Biaya profesional</td>
                            <td class="text-start">Biaya perantara (pada saat penandatanganan perjanjian dasar): Tidak ada Biaya keberhasilan (pada saat penandatanganan kontrak transfer): 5% dari harga kontrak (dibulatkan ke bawah ke bilangan bulat terdekat), biaya minimum 5 juta yen (tidak termasuk pajak konsumsi)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="product-description mt-3" data-aos="fade-up" data-aos-duration="1000">
            <h5 class="mb-3">Notes</h5>
            <p style="text-align: justify; font-size: 12px;">Harga transfer yang diminta ditampilkan belum termasuk pajak.
            </p>
            <p style="text-align: justify; font-size: 12px;">
                Informasi ini berdasarkan informasi wawancara atau informasi yang dilaporkan sendiri oleh penjual pada tanggal publikasi. Informasi terbaru dan detail lebih lanjut perlu dikonfirmasi seiring berjalannya negosiasi.
            </p>
        </div>
    </div>
</section>

<!-- Listing Section -->
<section id="listing" class="listing-section">
    <div class="container">
        <h2 class="section-title-about text-center" data-aos="fade-up" data-aos-duration="1000">Properti Terkait</h2>
        <p class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Property yang terkait dengan produk ini</p>
        
        <!-- Loading indicator -->
        <div class="loading-indicator" id="loadingIndicator">
            <div class="spinner"></div>
            <p>Memuat data...</p>
        </div>
        
        <!-- Container untuk produk listing -->
        <div class="row" id="listingContainer">
            <!-- Data akan dimuat secara dinamis -->
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

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. DATA KOORDINAT (JSON)
    const propertyLocations = {
        "mainProperty": {
            "lat": 35.6517, 
            "lng": 139.7289,
            "title": "Apartemen Mewah Minami-Azabu"
        },
        "nearby": [
            {
                "lat": 35.6525,
                "lng": 139.7300,
                "title": "Arisugawa Park Residence"
            },
            {
                "lat": 35.6500,
                "lng": 139.7260,
                "title": "Azabu Garden Unit B"
            },
            {
                "lat": 35.6540,
                "lng": 139.7280,
                "title": "Hiroo Plaza Commercial"
            }
        ]
    };

    // 2. INISIALISASI MAP
    const map = L.map('propertyMap').setView([propertyLocations.mainProperty.lat, propertyLocations.mainProperty.lng], 16);

    // 3. LAYER MAP (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // 4. MARKER UTAMA (Merah/Beda Sendiri)
    const mainIcon = L.divIcon({
        html: '<i class="fas fa-map-marker-alt fa-3x" style="color: #e74c3c;"></i>',
        iconSize: [30, 42],
        iconAnchor: [15, 42],
        popupAnchor: [0, -40],
        className: 'custom-div-icon'
    });

    //Fungsi untuk membatasi karakter (Letakkan di bagian atas script)
    const limitChars = (text, limit) => {
        return text.length > limit ? text.substring(0, limit) + "..." : text;
    };

    L.marker([propertyLocations.mainProperty.lat, propertyLocations.mainProperty.lng], {icon: mainIcon})
        .addTo(map)
        .bindPopup(`${limitChars(propertyLocations.mainProperty.title, 20)}`)
        .openPopup();

    // 5. MARKER PROPERTI SEKITAR
    propertyLocations.nearby.forEach(loc => {
        L.marker([loc.lat, loc.lng])
            .addTo(map)
            .bindPopup(limitChars(loc.title, 20));
    });

    // Handle AOS Refresh saat peta dimuat (agar tidak glitch)
    setTimeout(() => {
        map.invalidateSize();
    }, 400);
});

</script>

<?php include 'footer.php'; ?>

<style>
/* Product Detail Styles */
.product-carousel {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.product-carousel .carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 5px;
}

.product-info-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    border: 1px solid #eee;
}

.product-title {
    font-size: 1.8rem;
    font-weight: 600;
    color: #333;
}

.product-price h3 {
    font-size: 2.2rem;
    font-weight: 700;
}

.breadcrumb-section {
    background-color: #f8f9fa;
}

.breadcrumb-item a {
    color: #6c757d;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #007bff;
}

.financial-performance table {
    font-size: 0.95rem;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.financial-performance th {
    background-color: #2c3e50;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 12px 8px;
}

.financial-performance td {
    padding: 10px 8px;
    vertical-align: middle;
}

.financial-performance .table-success {
    background-color: rgba(40, 167, 69, 0.1);
    font-weight: 600;
}

.financial-performance tfoot {
    background-color: #f8f9fa;
    font-style: italic;
}

.financial-metric {
    transition: all 0.3s ease;
}

.financial-metric:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.financial-metric .badge {
    font-size: 0.9rem;
    padding: 5px 10px;
}

@media (max-width: 768px) {
    .financial-performance table {
        font-size: 0.85rem;
    }
    
    .financial-performance th,
    .financial-performance td {
        padding: 8px 5px;
    }
}.financial-performance table {
    font-size: 0.95rem;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.financial-performance th {
    background-color: #2c3e50;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 12px 8px;
}

.financial-performance td {
    padding: 10px 25px;
    vertical-align: middle;
}

.financial-metric {
    transition: all 0.3s ease;
}

.financial-metric:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.financial-metric .badge {
    font-size: 0.9rem;
    padding: 5px 10px;
}

@media (max-width: 768px) {
    .financial-performance table {
        font-size: 0.85rem;
    }
    
    .financial-performance th,
    .financial-performance td {
        padding: 8px 5px;
    }
}

/* Custom Unique Slider Styles */
.property-detail-carousel {
    border-radius: 10px; /* Lebih melengkung agar modern */
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    position: relative;
    height: 460px; /* Menyamakan tinggi dengan card info di sebelahnya */
}

.property-detail-carousel .carousel-item img {
    height: 100%; /* Menyamakan tinggi dengan card info di sebelahnya */
    object-fit: cover;
    transition: transform 0.5s ease;
}

.property-detail-carousel:hover .carousel-item img {
    transform: scale(1.05); /* Efek zoom halus saat hover */
}

/* Custom Indicators */
.property-detail-carousel .carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 6px;
    background-color: rgba(255, 255, 255, 0.7);
    border: 2px solid transparent;
}

.property-detail-carousel .carousel-indicators .active {
    background-color: #fff;
    transform: scale(1.3);
}

/* Custom Navigation Buttons */
.property-detail-carousel .carousel-control-prev,
.property-detail-carousel .carousel-control-next {
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    margin: 0 15px;
    opacity: 0; /* Sembunyi secara default */
    transition: all 0.3s ease;
}

.property-detail-carousel:hover .carousel-control-prev,
.property-detail-carousel:hover .carousel-control-next {
    opacity: 1; /* Muncul saat mouse di atas slider */
}

@media (max-width: 768px) {
    .property-detail-carousel .carousel-item img {
        height: 470px; /* Ukuran lebih kecil di mobile */
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const propertySlider = document.querySelector('#propertyDetailSlider');
    if (propertySlider) {
        new bootstrap.Carousel(propertySlider, {
            interval: 5000,
            wrap: true,
            pause: 'hover'
        });
    }
});

// Add smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Product carousel customization
document.addEventListener('DOMContentLoaded', function() {
    const productCarousel = document.querySelector('#productCarousel');
    if (productCarousel) {
        // Auto-rotate carousel every 5 seconds
        const carousel = new bootstrap.Carousel(productCarousel, {
            interval: 5000,
            wrap: true
        });
    }
});
</script>