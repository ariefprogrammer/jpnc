<?php include 'header.php'; ?>

<!-- Hero Section dengan Carousel -->
<section id="home" class="hero-section" style="margin-top:-100px;">
    <!-- Carousel Background -->
    <div class="hero-carousel-container">
        <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                        class="d-block w-100" alt="Modern Property">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                        class="d-block w-100" alt="Luxury Apartment">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                        class="d-block w-100" alt="Traditional Japanese House">
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    
    <!-- Content Overlay -->
    <div class="container">
        <div class="hero-content-left" data-aos="fade-down-right" data-aos-duration="1000">
            <h1>Brokerage satu pintu: M&A, pembelian properti, pendirian perusahaan di Jepang.</h1>
            <p>
                Kami berdiri di sisi pembeli/investor: pencarian deal, negosiasi, hingga closing. Bekerja sama dengan agen berlisensi & profesional hukum pajak.
            </p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary p-3">
                    <i class="fas fa-calendar-check me-2"></i> Jadwalkan Konsultasi Gratis
                </a>
                <a href="inquiry.php" class="btn btn-whatsapp p-3" target="_blank">
                    <i class="fas fa-envelope me-2"></i> Buat Inquiry
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container" data-aos="fade-up">
        <h2 class="section-title-about text-center">Layanan (Buy - Side)</h2>
        <p class="text-center mb-5">Kami menyediakan berbagai layanan properti untuk memenuhi kebutuhan investasi dan bisnis Anda</p>
        
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-md-4 mb-2" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card service-card">
                    <div class="p-top-reason__tag">
                        Service 1
                    </div>
                    <div class="card-body p-4 text-center">
                        <div class="text-center p-3">
                            <img src="img/house.png" alt="Property Icon" style="max-width: 180px;"/>
                        </div>
                        <h4 class="card-title mb-3">Properti (Buy‑side)</h4>
                        <p class="card-text" style="height: 50px;">
                            Pencarian, tur, negosiasi, closing/registrasi.
                        </p>
                        <p class="service-note">
                            *Dengan agen berlisensi*
                        </p>
                        <div class="dashline-separator-custom">
                            <a href="detail-service.php" class="btn btn-primary2 mt-3">Lihat Detail <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div class="col-md-4 mb-2" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="card service-card">
                    <div class="p-top-reason__tag">
                        Service 2
                    </div>
                    <div class="card-body p-4 text-center">
                        <div class="text-center p-3">
                            <img src="img/mna.png" alt="Property Icon" style="max-width: 180px;"/>
                        </div>
                        <h4 class="card-title mb-3">M&A (Buy‑side)</h4>
                        <p class="card-text" style="height: 50px;">
                            Pencarian target UKM, evaluasi awal, DD, negosiasi, closing/PMI.
                        </p>
                        <p class="service-note">
                            *Ikuti pedoman M&A UKM*
                        </p>
                        <div class="dashline-separator-custom">
                            <a href="detail-service.php" class="btn btn-primary2 mt-3">Lihat Detail <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div class="col-md-4 mb-2" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="card service-card">
                    <div class="p-top-reason__tag">
                        Service 3
                    </div>
                    <div class="card-body p-4 text-center">
                        <div class="text-center p-3">
                            <img src="img/company.png" alt="Property Icon" style="max-width: 180px;"/>
                        </div>
                        <h4 class="card-title mb-3">Pendirian Perusahaan</h4>
                        <p class="card-text" style="height: 50px;">
                            KK/GK, rekening, pajak/jamsos, visa dengan pakar terkait.
                        </p>
                        <p class="service-note">
                            *Layanan lengkap dan terintegrasi*
                        </p>
                        <div class="dashline-separator-custom">
                            <a href="detail-service.php" class="btn btn-primary2 mt-3">Lihat Detail <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section id="about" class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-down-right" data-aos-duration="1000">
                <h2 class="section-title-about">Tentang Japanect Consulting</h2>
                <p style="text-align: justify;">Japanect Consulting adalah perusahaan konsultasi terpercaya yang telah beroperasi sejak 2010. Kami mengkhususkan diri dalam pengembangan, penjualan, dan pengelolaan properti residensial dan komersial.</p>
                <p style="text-align: justify;">Dengan tim profesional yang berpengalaman, kami berkomitmen untuk memberikan solusi properti terbaik yang sesuai dengan kebutuhan dan anggaran klien kami.</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i> Lebih dari 500 properti terjual</li>
                    <li><i class="fas fa-check text-success me-2"></i> Tim profesional dengan sertifikasi</li>
                    <li><i class="fas fa-check text-success me-2"></i> Layanan purna jual 24/7</li>
                    <li><i class="fas fa-check text-success me-2"></i> Jaringan luas di seluruh Indonesia</li>
                </ul>
                <a class="btn btn-primary2 ps-4 pe-4 mb-3" href="about.php">Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-lg-6" data-aos="fade-down-left" data-aos-duration="1000">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid" style="border-radius: 10px;" alt="About Us">
            </div>
        </div>
    </div>
</section>

<!-- Listing property Section -->
<section id="listing" class="listing-section">
    <div class="container">
        <h2 class="section-title-about text-center" data-aos="fade-up" data-aos-duration="1000">Properti Unggulan</h2>
        <p class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Temukan properti impian Anda dari koleksi terbaik kami</p>
        
        <!-- Loading indicator -->
        <div class="loading-indicator" id="loadingIndicator">
            <div class="spinner"></div>
            <p>Memuat data...</p>
        </div>
        
        <!-- Container untuk produk listing -->
        <div class="row" id="listingContainer">
            <!-- Data akan dimuat secara dinamis -->
        </div>

        <div class="row">
            <div class="col-10 mt-1 text-danger"><hr></div>
            <div class="col-2">
                <a href="listings.php" type="button" class="btn btn-outline-danger">
                    <span class="d-none d-lg-inline">Lihat Semua</span>
                    <i class="fas fa-arrow-right ms-lg-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Listing mna Section -->
<section id="listing" class="listing-section" style="margin-top:-100px!important;">
    <div class="container">
        <h2 class="section-title-about text-center" data-aos="fade-up" data-aos-duration="1000">M&A Unggulan</h2>
        <p class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Temukan M&A impian Anda dari koleksi terbaik kami</p>
        
        <!-- Loading indicator -->
        <div class="loading-indicator" id="loadingIndicator">
            <div class="spinner"></div>
            <p>Memuat data...</p>
        </div>
        
        <!-- Container untuk produk listing -->
        <div class="row" id="listingMnaContainer">
            <!-- Produk 1 -->
            <div class="col-md-6 col-lg-4" 
                data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="800">
                <div class="property-card">
                    <div class="property-img">
                        <img src="https://images.unsplash.com/photo-1559329007-40df8a9345d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Restoran Jepang di Shinjuku">
                    </div>
                    <div class="property-info">
                        <h5>Restoran Jepang di Shinjuku</h5>
                        <p class="text-muted">Tokyo, Jepang</p>
                        <p class="property-price">¥ 150 Juta</p>
                        <div class="property-features">
                            <span><i class="fas fa-utensils"></i> Restoran</span>
                            <span><i class="fas fa-yen-sign"></i> Omzet ¥50jt/bulan</span>
                            <span><i class="fas fa-users"></i> 10 Karyawan</span>
                        </div>
                        <a href="detail-product-mna.php?id=1" class="btn btn-primary mt-3" data-aos="zoom-in" data-aos-delay="200">
                            Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Produk 2 -->
            <div class="col-md-6 col-lg-4" 
                data-aos="fade-up"
                data-aos-delay="200"
                data-aos-duration="800">
                <div class="property-card">
                    <div class="property-img">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Kafe Minimalis di Shibuya">
                    </div>
                    <div class="property-info">
                        <h5>Kafe Minimalis di Shibuya</h5>
                        <p class="text-muted">Tokyo, Jepang</p>
                        <p class="property-price">¥ 80 Juta</p>
                        <div class="property-features">
                            <span><i class="fas fa-coffee"></i> Kafe</span>
                            <span><i class="fas fa-yen-sign"></i> Omzet ¥30jt/bulan</span>
                            <span><i class="fas fa-users"></i> 6 Karyawan</span>
                        </div>
                        <a href="detail-product-mna.php?id=2" class="btn btn-primary mt-3" data-aos="zoom-in" data-aos-delay="400">
                            Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Produk 3 -->
            <div class="col-md-6 col-lg-4" 
                data-aos="fade-up"
                data-aos-delay="400"
                data-aos-duration="800">
                <div class="property-card">
                    <div class="property-img">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Ramen Shop di Ginza">
                    </div>
                    <div class="property-info">
                        <h5>Ramen Shop di Ginza</h5>
                        <p class="text-muted">Tokyo, Jepang</p>
                        <p class="property-price">¥ 120 Juta</p>
                        <div class="property-features">
                            <span><i class="fas fa-utensils"></i> Ramen Shop</span>
                            <span><i class="fas fa-yen-sign"></i> Omzet ¥45jt/bulan</span>
                            <span><i class="fas fa-users"></i> 8 Karyawan</span>
                        </div>
                        <a href="detail-product-mna.php?id=3" class="btn btn-primary mt-3" data-aos="zoom-in" data-aos-delay="600">
                            Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-10 mt-1 text-danger"><hr></div>
            <div class="col-2">
                <a href="listings.php" type="button" class="btn btn-outline-danger">
                    <span class="d-none d-lg-inline">Lihat Semua</span>
                    <i class="fas fa-arrow-right ms-lg-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="blog" class="blog-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <h2 class="section-title-about">Blog Terbaru</h2>
            <p class="section-subtitle">Update terbaru seputar investasi properti dan bisnis di Jepang</p>
        </div>

        <div class="row g-4">
            <!-- Blog Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                alt="Investasi Properti di Tokyo" class="img-fluid">
                        <div class="blog-category">Investasi</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar me-1"></i> 15 Maret 2024</span>
                            <span class="blog-read-time"><i class="far fa-eye me-1"></i> 5.754 Views</span>
                        </div>
                        <h3 class="blog-title">Panduan Investasi Properti di Tokyo untuk Pemula</h3>
                        <p class="blog-excerpt">
                            Pelajari langkah-langkah awal investasi properti di Tokyo, mulai dari pemilihan lokasi hingga perkiraan ROI.
                        </p>
                        <div class="blog-footer">
                            <a href="blog-detail.php" class="btn btn-link">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                alt="Regulasi M&A Jepang" class="img-fluid">
                        <div class="blog-category">Regulasi</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar me-1"></i> 10 Maret 2024</span>
                            <span class="blog-read-time"><i class="far fa-eye me-1"></i> 796 Views</span>
                        </div>
                        <h3 class="blog-title">Perubahan Regulasi M&A UKM di Jepang 2024</h3>
                        <p class="blog-excerpt">
                            Update terbaru regulasi M&A untuk UKM di Jepang dan dampaknya bagi investor asing.
                        </p>
                        <div class="blog-footer">
                            <a href="blog-detail.php" class="btn btn-link">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                alt="Pendirian Perusahaan di Jepang" class="img-fluid">
                        <div class="blog-category">Bisnis</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar me-1"></i> 5 Maret 2024</span>
                            <span class="blog-read-time"><i class="far fa-eye me-1"></i> 1.567 Views</span>
                        </div>
                        <h3 class="blog-title">Tips Pendirian Perusahaan Asing di Jepang</h3>
                        <p class="blog-excerpt">
                            Langkah-langkah praktis mendirikan perusahaan asing di Jepang, termasuk persyaratan dan prosedur.
                        </p>
                        <div class="blog-footer">
                            <a href="blog-detail.php" class="btn btn-link">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-10 mt-1 text-danger"><hr></div>
            <div class="col-2">
                <a href="blogs.php" type="button" class="btn btn-outline-danger">
                    <span class="d-none d-lg-inline">Lihat Semua</span>
                    <i class="fas fa-arrow-right ms-lg-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title-about text-center" data-aos="fade-up" data-aos-duration="1000">Hubungi Kami</h2>
        <p class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Kami siap membantu Anda menemukan properti impian</p>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1500">
                <div class="contact-box-wrapper h-100">
                    <div class="contact-box-inner">
                        <div class="contact-box-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="contact-box-title">Lokasi</h3>
                        <p class="contact-box-desc">Gedung ABC 1544 Jl. Sudirman No. 123, Tanah Abang, Jakarta Pusat</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1700">
                <div class="contact-box-wrapper h-100">
                    <div class="contact-box-inner">
                        <div class="contact-box-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="contact-box-title">Telepon</h3>
                        <p class="contact-box-desc">(021) 1234-5678</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1900">
                <div class="contact-box-wrapper h-100">
                    <div class="contact-box-inner">
                        <div class="contact-box-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-box-title">Email</h3>
                        <p class="contact-box-desc">info@japanect.com</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-out-up" data-aos-duration="2100">
                <div class="contact-box-wrapper h-100">
                    <div class="contact-box-inner">
                        <div class="contact-box-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="contact-box-title">Jam Operasional</h3>
                        <p class="contact-box-desc">Senin - Jumat<br>09:00 - 17:00</p>
                    </div>
                </div>
            </div>
            <div class="map-container mt-3 mb-4" data-aos="fade-up" data-aos-duration="2300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613506394!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sJl.%20Jend.%20Sudirman%2C%20RT.5%2FRW.3%2C%20Karet%20Tengah%2C%20Kecamatan%20Setiabudi%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012920!5e0!3m2!1sid!2sid!4v1647429577350!5m2!1sid!2sid" width="100%" height="453" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

    <?php include 'footer.php'; ?>