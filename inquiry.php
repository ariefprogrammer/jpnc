<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="inquiry-hero">
        <div class="container" data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
            <h1>Buat Inquiry</h1>
            <p>Isi form berikut untuk mengajukan pertanyaan atau minat investasi Anda. Tim kami akan menghubungi Anda dalam 24 jam.</p>
        </div>
    </section>

    <!-- Form Section -->
    <section class="inquiry-form-section">
        <div class="container">
            
            <!-- Form Container -->
            <div class="form-container" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
                <!-- Form Header -->
                <div class="form-header">
                    <h2><i class="fas fa-file-alt me-2"></i>Form Inquiry Investasi</h2>
                    <p>Mohon isi data dengan lengkap dan benar</p>
                </div>
                
                <!-- Form Body -->
                <div class="form-body">
                    <form id="inquiryForm">
                        <!-- Inquiry Type Section -->
                        <div class="form-section-title">
                            <i class="fas fa-clipboard-list me-2"></i>Tipe Inquiry
                        </div>
                        
                        <div class="form-group-enhanced">
                            <label class="form-label-enhanced">Jenis Investasi yang Anda Minati</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-text input-group-text-enhanced">Inquiry Type</span>
                                <select class="select-enhanced" id="inquiryType" required>
                                    <option value="" selected disabled>-- Pilih Salah Satu --</option>
                                    <option value="Acquire Property">Investasi Properti</option>
                                    <option value="Acquire Company">Akuisisi Perusahaan (M&A)</option>
                                    <option value="Both">Keduanya (Properti & M&A)</option>
                                    <option value="Consultation">Konsultasi Investasi</option>
                                    <option value="Company Setup">Pendirian Perusahaan</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Buyer Information Section -->
                        <div class="form-section-title mt-4">
                            <i class="fas fa-user-tie me-2"></i>Informasi Pembeli
                        </div>
                        
                        <div class="form-group-enhanced">
                            <label class="form-label-enhanced">Jenis Pembeli</label>
                            <div class="input-group-enhanced">
                                <span class="input-group-text input-group-text-enhanced">Saya adalah</span>
                                <select class="select-enhanced" id="buyerType" required>
                                    <option value="" selected disabled>-- Pilih Salah Satu --</option>
                                    <option value="Individual">Individu</option>
                                    <option value="Investment Firm">Perusahaan Investasi</option>
                                    <option value="Private Equity">Private Equity</option>
                                    <option value="Corporate Buyer">Perusahaan/Korporasi</option>
                                    <option value="Family Office">Family Office</option>
                                    <option value="Other">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced" for="fullName">Nama Lengkap *</label>
                                    <input type="text" class="form-control form-control-enhanced" id="fullName" 
                                           placeholder="Nama lengkap Anda" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced" for="companyName">Nama Perusahaan</label>
                                    <input type="text" class="form-control form-control-enhanced" id="companyName" 
                                           placeholder="Nama perusahaan (jika ada)">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced" for="email">Email *</label>
                                    <input type="email" class="form-control form-control-enhanced" id="email" 
                                           placeholder="alamat.email@contoh.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced" for="phone">Telepon / WhatsApp *</label>
                                    <input type="tel" class="form-control form-control-enhanced" id="phone" 
                                           placeholder="+62 812-3456-7890" required>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Location Preference Section -->
                        <div class="form-section-title mt-4">
                            <i class="fas fa-map-marker-alt me-2"></i>Preferensi Lokasi
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced" for="country">Kota / Region *</label>
                                    <input type="text" class="form-control form-control-enhanced" id="country" 
                                           placeholder="Contoh: Jakarta, Bandung, dll." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced" for="region">Kode Pos *</label>
                                    <input type="number" class="form-control form-control-enhanced" id="region" 
                                           placeholder="Contoh: 10110, 10210, dll." required>
                                </div>
                            </div>
                        </div>

                        <!-- Property Details Section -->
<div class="form-section-title mt-4">
    <i class="fas fa-home me-2"></i>Detail Properti
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="propertyType">Jenis Properti</label>
    <select class="form-control form-control-enhanced" id="propertyType">
        <option value="" selected>-- Pilih Jenis Properti --</option>
        <option value="Residential">Residensial (Perumahan)</option>
        <option value="Commercial">Komersial (Bisnis)</option>
        <option value="Land">Tanah Kosong</option>
        <option value="Other">Lainnya</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="purpose">Tujuan Pembelian</label>
    <select class="form-control form-control-enhanced" id="purpose">
        <option value="" selected>-- Pilih Tujuan --</option>
        <option value="Investment">Investasi</option>
        <option value="Own Use">Penggunaan Pribadi</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="estimatedBudget">Perkiraan Budget (IDR)</label>
    <select class="form-control form-control-enhanced" id="estimatedBudget">
        <option value="" selected>-- Pilih Range Budget --</option>
        <option value="under-500m">Di bawah 500 juta</option>
        <option value="500m-1b">500 juta - 1 miliar</option>
        <option value="1b-5b">1 - 5 miliar</option>
        <option value="5b-10b">5 - 10 miliar</option>
        <option value="10b-50b">10 - 50 miliar</option>
        <option value="over-50b">Di atas 50 miliar</option>
        <option value="undisclosed">Lebih baik didiskusikan</option>
    </select>
</div>

<!-- Company Acquisition Details Section -->
<div class="form-section-title mt-4">
    <i class="fas fa-building me-2"></i>Detail Akuisisi Perusahaan
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="targetIndustry">Industri Target</label>
    <select class="form-control form-control-enhanced" id="targetIndustry">
        <option value="" selected>-- Pilih Industri --</option>
        <option value="Manufacturing">Manufaktur</option>
        <option value="Retail">Retail (Ritel)</option>
        <option value="Technology">Teknologi</option>
        <option value="Healthcare">Kesehatan</option>
        <option value="F&B">Makanan & Minuman</option>
        <option value="Real Estate">Properti</option>
        <option value="Services">Jasa</option>
        <option value="Other">Lainnya</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="companyBudgetRange">Range Budget Perkiraan (IDR)</label>
    <select class="form-control form-control-enhanced" id="companyBudgetRange">
        <option value="" selected>-- Pilih Range Budget --</option>
        <option value="1-5b">1 - 5 miliar</option>
        <option value="5-10b">5 - 10 miliar</option>
        <option value="10-50b">10 - 50 miliar</option>
        <option value="50-100b">50 - 100 miliar</option>
        <option value="100-500b">100 - 500 miliar</option>
        <option value="over-500b">Di atas 500 miliar</option>
        <option value="undisclosed">Lebih baik didiskusikan</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="companySize">Ukuran Perusahaan</label>
    <select class="form-control form-control-enhanced" id="companySize">
        <option value="" selected>-- Pilih Ukuran Perusahaan --</option>
        <option value="Small">Kecil</option>
        <option value="Medium">Menengah</option>
        <option value="Large">Besar</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="dealType">Jenis Akuisisi</label>
    <select class="form-control form-control-enhanced" id="dealType">
        <option value="" selected>-- Pilih Jenis Akuisisi --</option>
        <option value="Full Acquisition">Akuisisi Penuh</option>
        <option value="Partial Investment">Investasi Parsial</option>
        <option value="Strategic Partnership">Kemitraan Strategis</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="acquisitionReason">Alasan Akuisisi</label>
    <select class="form-control form-control-enhanced" id="acquisitionReason">
        <option value="" selected>-- Pilih Alasan --</option>
        <option value="Expansion">Ekspansi Bisnis</option>
        <option value="Synergy">Sinergi Bisnis</option>
        <option value="Investment">Investasi</option>
        <option value="Market Entry">Masuk ke Pasar Baru</option>
        <option value="Multiple">Beberapa Alasan</option>
    </select>
</div>

<div class="form-group-enhanced">
    <label class="form-label-enhanced" for="acquisitionTimeline">Timeline Akuisisi</label>
    <select class="form-control form-control-enhanced" id="acquisitionTimeline">
        <option value="" selected>-- Pilih Timeline --</option>
        <option value="Immediate">Segera</option>
        <option value="3-6 months">3–6 bulan</option>
        <option value="6-12 months">6–12 bulan</option>
        <option value="12+ months">Lebih dari 12 bulan</option>
    </select>
</div>
                        
                        <!-- Form Note -->
                        <div class="form-note">
                            <p><i class="fas fa-info-circle"></i> Semua field bertanda * wajib diisi. Data Anda akan dijaga kerahasiaannya dan hanya digunakan untuk keperluan pelayanan.</p>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn-submit-inquiry">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Inquiry
                        </button>
                    </form>
                    
                    <!-- Contact Alternative -->
                    <div class="contact-alternative">
                        <p>Atau hubungi kami langsung melalui:</p>
                        <div class="contact-buttons">
                            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20konsultasi%20tentang%20investasi%20di%20Jepang" style="padding-top: 10px;"
                               class="btn btn-whatsapp" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i> WhatsApp
                            </a>
                            <a href="mailto:info@japanect.com" class="btn btn-primary"  style="padding-top: 10px;">
                                <i class="fas fa-envelope me-2"></i> Email
                            </a>
                            <a href="index.php#contact" class="btn btn-primary2" style="padding-top: 10px;">
                                <i class="fas fa-phone me-2"></i> Telepon
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>