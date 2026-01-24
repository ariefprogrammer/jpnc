<?php include 'header.php'; ?>

<section>
    <div class="col-12" data-aos="fade-down-left" data-aos-duration="1000">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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

        <!-- About Section -->
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
<?php include 'footer.php'; ?>