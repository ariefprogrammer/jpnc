<?php include 'header.php'; ?>

    <?php
    // Data blogs dalam format JSON
    $blogsJson = '[
        {
            "id": 1,
            "title": "Strategi Investasi Properti di Tokyo untuk Pemula",
            "slug": "strategi-investasi-properti-tokyo-pemula",
            "excerpt": "Panduan lengkap untuk investor pemula yang ingin memulai investasi properti di Tokyo. Pelajari lokasi terbaik, perkiraan ROI, dan tips negosiasi.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Investasi",
            "author": "Admin",
            "publish_date": "2024-03-20",
            "read_time": "5",
            "tags": ["investasi", "properti", "tokyo"],
            "views": 1245
        },
        {
            "id": 2,
            "title": "Update Regulasi M&A UKM di Jepang 2024",
            "slug": "update-regulasi-mna-ukm-jepang-2024",
            "excerpt": "Perubahan regulasi terbaru yang berdampak pada proses M&A untuk UKM di Jepang. Pahami implikasinya bagi investor asing.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Regulasi",
            "author": "Legal Team",
            "publish_date": "2024-03-18",
            "read_time": "7",
            "tags": ["regulasi", "mna", "ukm"],
            "views": 892
        },
        {
            "id": 3,
            "title": "Panduan Lengkap Pendirian Perusahaan Asing di Jepang",
            "slug": "panduan-pendirian-perusahaan-asing-jepang",
            "excerpt": "Langkah demi langkah mendirikan perusahaan asing di Jepang, termasuk persyaratan dokumen dan biaya yang perlu dipersiapkan.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Bisnis",
            "author": "Business Consultant",
            "publish_date": "2024-03-15",
            "read_time": "6",
            "tags": ["bisnis", "perusahaan", "jepang"],
            "views": 1567
        },
        {
            "id": 4,
            "title": "Analisis Pasar Properti di Osaka: Peluang & Tantangan",
            "slug": "analisis-pasar-properti-osaka-peluang-tantangan",
            "excerpt": "Mengungkap potensi investasi properti di Osaka dengan analisis mendalam terhadap tren pasar dan proyeksi pertumbuhan.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Properti",
            "author": "Property Analyst",
            "publish_date": "2024-03-12",
            "read_time": "8",
            "tags": ["properti", "osaka", "investasi"],
            "views": 1034
        },
        {
            "id": 5,
            "title": "Tips Due Diligence yang Efektif untuk M&A di Jepang",
            "slug": "tips-due-diligence-efektif-mna-jepang",
            "excerpt": "Strategi melakukan due diligence yang komprehensif dalam proses M&A untuk meminimalkan risiko dan memaksimalkan nilai.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "M&A",
            "author": "M&A Specialist",
            "publish_date": "2024-03-10",
            "read_time": "9",
            "tags": ["mna", "due diligence", "investasi"],
            "views": 756
        },
        {
            "id": 6,
            "title": "Mengapa Fukuoka Menjadi Destinasi Investasi Properti Terbaik",
            "slug": "fukuoka-destinasi-investasi-properti-terbaik",
            "excerpt": "Eksplorasi keunggulan Fukuoka sebagai kota dengan pertumbuhan properti tercepat di Jepang dan peluang investasinya.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Investasi",
            "author": "Investment Advisor",
            "publish_date": "2024-03-08",
            "read_time": "5",
            "tags": ["investasi", "properti", "fukuoka"],
            "views": 1892
        },
        {
            "id": 7,
            "title": "Memahami Sistem Perpajakan Properti di Jepang",
            "slug": "memahami-sistem-perpajakan-properti-jepang",
            "excerpt": "Panduan komprehensif tentang berbagai jenis pajak properti di Jepang dan strategi perencanaan pajak yang optimal.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Regulasi",
            "author": "Tax Consultant",
            "publish_date": "2024-03-05",
            "read_time": "10",
            "tags": ["regulasi", "pajak", "properti"],
            "views": 1432
        },
        {
            "id": 8,
            "title": "Jenis Visa Bisnis untuk Investor Asing di Jepang",
            "slug": "jenis-visa-bisnis-investor-asing-jepang",
            "excerpt": "Informasi lengkap tentang berbagai jenis visa bisnis yang tersedia untuk investor asing yang ingin berbisnis di Jepang.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Bisnis",
            "author": "Immigration Specialist",
            "publish_date": "2024-03-03",
            "read_time": "6",
            "tags": ["bisnis", "visa", "imigrasi"],
            "views": 987
        },
        {
            "id": 9,
            "title": "Tips Renovasi Properti di Jepang: Tradisional vs Modern",
            "slug": "tips-renovasi-properti-jepang-tradisional-modern",
            "excerpt": "Panduan praktis untuk renovasi properti di Jepang dengan mempertahankan nilai tradisional dan menambahkan sentuhan modern.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Properti",
            "author": "Renovation Expert",
            "publish_date": "2024-03-01",
            "read_time": "7",
            "tags": ["properti", "renovasi", "desain"],
            "views": 1123
        },
        {
            "id": 10,
            "title": "Strategi Exit Investment di Pasar Properti Jepang",
            "slug": "strategi-exit-investment-pasar-properti-jepang",
            "excerpt": "Bagaimana merencanakan strategi exit yang tepat untuk investasi properti di Jepang dengan keuntungan maksimal.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1518780664697-55e3ad937233?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Investasi",
            "author": "Investment Strategist",
            "publish_date": "2024-02-28",
            "read_time": "8",
            "tags": ["investasi", "properti", "strategi"],
            "views": 654
        },
        {
            "id": 11,
            "title": "Digital Transformation dalam Industri Real Estate Jepang",
            "slug": "digital-transformation-industri-real-estate-jepang",
            "excerpt": "Bagaimana teknologi mengubah industri properti di Jepang dan peluang yang muncul bagi investor.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Teknologi",
            "author": "Tech Analyst",
            "publish_date": "2024-02-25",
            "read_time": "6",
            "tags": ["teknologi", "properti", "inovasi"],
            "views": 876
        },
        {
            "id": 12,
            "title": "Green Building: Tren Properti Berkelanjutan di Jepang",
            "slug": "green-building-tren-properti-berkelanjutan-jepang",
            "excerpt": "Mengenal konsep green building dan mengapa ini menjadi tren penting dalam properti Jepang saat ini.",
            "content": "Konten lengkap artikel...",
            "featured_image": "https://images.unsplash.com/photo-1487956382158-bb926046304a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
            "category": "Properti",
            "author": "Sustainability Expert",
            "publish_date": "2024-02-22",
            "read_time": "7",
            "tags": ["properti", "green building", "sustainability"],
            "views": 765
        }
    ]';

    // Konversi JSON ke array PHP
    $allBlogs = json_decode($blogsJson, true);
    
    // Konfigurasi pagination
    $itemsPerPage = 6; // Jumlah blog per halaman
    $totalItems = count($allBlogs);
    $totalPages = ceil($totalItems / $itemsPerPage);
    
    // Get current page dari URL parameter
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $currentPage = max(1, min($currentPage, $totalPages)); // Validasi
    
    // Hitung item yang akan ditampilkan
    $startIndex = ($currentPage - 1) * $itemsPerPage;
    $blogsToShow = array_slice($allBlogs, $startIndex, $itemsPerPage);
    
    // Get filter category dari URL
    $selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
    
    // Filter blogs berdasarkan kategori jika dipilih
    if ($selectedCategory !== 'all') {
        $filteredBlogs = array_filter($allBlogs, function($blog) use ($selectedCategory) {
            return strtolower($blog['category']) === strtolower($selectedCategory);
        });
        $filteredBlogs = array_values($filteredBlogs); // Reset array keys
        $totalFilteredItems = count($filteredBlogs);
        $totalPages = ceil($totalFilteredItems / $itemsPerPage);
        $blogsToShow = array_slice($filteredBlogs, $startIndex, $itemsPerPage);
    }
    
    // Format tanggal Indonesia
    function formatDateIndonesian($dateString) {
        $months = [
            '01' => 'Januari', '02' => 'Februari', '03' => 'Maret',
            '04' => 'April', '05' => 'Mei', '06' => 'Juni',
            '07' => 'Juli', '08' => 'Agustus', '09' => 'September',
            '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
        ];
        
        $date = DateTime::createFromFormat('Y-m-d', $dateString);
        $day = $date->format('d');
        $month = $months[$date->format('m')];
        $year = $date->format('Y');
        
        return "$day $month $year";
    }
    
    // Get semua kategori unik untuk filter
    $categories = array_unique(array_column($allBlogs, 'category'));
    sort($categories);
    ?>

    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
                <h1>Blog dan Artikel</h1>
                <p>Temukan wawasan terbaru seputar investasi properti, M&A, dan bisnis di Jepang dari tim ahli kami.</p>
            </div>
        </div>
    </section>

    <!-- Blog Hero Section -->
<section class="blog-hero-section py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 filter-category-custom">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-filters" data-aos="fade-up">
                            <form method="GET" action="" class="row g-3 align-items-center">
                                <div class="col-auto d-none d-md-block">
                                    <label for="categoryFilter" class="col-form-label fw-bold">Filter by:</label>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group">
                                        <span class="input-group-text d-md-none">
                                            <i class="fas fa-filter"></i>
                                        </span>
                                        <select name="category" id="categoryFilter" class="form-select category-dropdown" 
                                                onchange="this.form.submit()">
                                            <option value="all" <?php echo $selectedCategory == 'all' ? 'selected' : ''; ?>>Semua Kategori</option>
                                            <?php foreach ($categories as $category): ?>
                                                <option value="<?php echo urlencode(strtolower($category)); ?>" 
                                                    <?php echo strtolower($selectedCategory) == strtolower($category) ? 'selected' : ''; ?>>
                                                    <?php echo htmlspecialchars($category); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Hidden input untuk menjaga parameter page -->
                                <input type="hidden" name="page" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end filter-search-custom" data-aos="fade-left">
                <div class="blog-search">
                    <form method="GET" action="" class="d-flex">
                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($selectedCategory); ?>">
                        <input type="text" name="search" class="form-control input-search-custom" placeholder="Cari artikel..." 
                               value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                        <button class="btn btn-primary btn-search-custom" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Blog Content Section -->
    <section class="blog-content-section py-5">
        <div class="container">
            <!-- Blog Grid -->
            <?php if (count($blogsToShow) > 0): ?>
                <div class="row g-4">
                    <?php foreach ($blogsToShow as $index => $blog): ?>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="<?php echo htmlspecialchars($blog['featured_image']); ?>" 
                                        alt="<?php echo htmlspecialchars($blog['title']); ?>" class="img-fluid">
                                    <div class="blog-category"><?php echo htmlspecialchars($blog['category']); ?></div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="blog-date"><i class="far fa-calendar me-1"></i> <?php echo formatDateIndonesian($blog['publish_date']); ?></span>
                                        <span class="blog-read-time"><i class="far fa-eye me-1"></i> <?php echo number_format($blog['views']); ?> views</span>
                                    </div>
                                    <h3 class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></h3>
                                    <p class="blog-excerpt">
                                        <?php echo htmlspecialchars($blog['excerpt']); ?>
                                    </p>
                                    <div class="blog-footer">
                                        <a href="detail-blog.php" class="btn btn-link">
                                            Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-12">
                        <div class="text-center py-5" data-aos="fade-up">
                            <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                            <h4 class="text-muted">Tidak ada artikel ditemukan</h4>
                            <p class="text-muted">Silakan coba dengan kategori atau kata kunci lain.</p>
                            <a href="?category=all&page=1" class="btn btn-primary">
                                <i class="fas fa-redo me-2"></i> Tampilkan Semua Artikel
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
                <div class="row mt-5">
                    <div class="col-12">
                        <nav aria-label="Page navigation" data-aos="fade-up">
                            <ul class="pagination justify-content-center">
                                <!-- Previous button -->
                                <li class="page-item <?php echo $currentPage == 1 ? 'disabled' : ''; ?>">
                                    <a class="page-link" 
                                       href="?category=<?php echo urlencode($selectedCategory); ?>&page=<?php echo $currentPage - 1; ?>"
                                       aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                
                                <!-- Page numbers -->
                                <?php
                                // Tampilkan maksimal 5 nomor halaman
                                $startPage = max(1, $currentPage - 2);
                                $endPage = min($totalPages, $currentPage + 2);
                                
                                // Adjust jika di awal
                                if ($startPage == 1) {
                                    $endPage = min(5, $totalPages);
                                }
                                
                                // Adjust jika di akhir
                                if ($endPage == $totalPages) {
                                    $startPage = max(1, $totalPages - 4);
                                }
                                
                                // Tampilkan nomor halaman
                                for ($page = $startPage; $page <= $endPage; $page++):
                                ?>
                                    <li class="page-item <?php echo $page == $currentPage ? 'active' : ''; ?>">
                                        <a class="page-link" 
                                           href="?category=<?php echo urlencode($selectedCategory); ?>&page=<?php echo $page; ?>">
                                            <?php echo $page; ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                                
                                <!-- Next button -->
                                <li class="page-item <?php echo $currentPage == $totalPages ? 'disabled' : ''; ?>">
                                    <a class="page-link" 
                                       href="?category=<?php echo urlencode($selectedCategory); ?>&page=<?php echo $currentPage + 1; ?>"
                                       aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            
                            <!-- Page info -->
                            <div class="text-center mt-3 text-muted">
                                <small>
                                    Menampilkan <?php echo count($blogsToShow); ?> dari <?php echo ($selectedCategory == 'all' ? $totalItems : $totalFilteredItems); ?> artikel
                                    (Halaman <?php echo $currentPage; ?> dari <?php echo $totalPages; ?>)
                                </small>
                            </div>
                        </nav>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Popular Blogs Sidebar -->
    <section class="popular-blogs-section py-5 bg-light">
        <div class="container">
            <h3 class="section-title-about text-center mb-5" data-aos="fade-up">Artikel Terpopuler</h3>
            <div class="row">
                <?php
                // Sort blogs by views descending
                usort($allBlogs, function($a, $b) {
                    return $b['views'] - $a['views'];
                });
                
                // Take top 3
                $popularBlogs = array_slice($allBlogs, 0, 3);
                ?>
                
                <?php foreach ($popularBlogs as $index => $blog): ?>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="<?php echo htmlspecialchars($blog['featured_image']); ?>" 
                                    alt="<?php echo htmlspecialchars($blog['title']); ?>" class="img-fluid">
                                    <div class="popular-badge">
                                        <i class="fas fa-fire me-1"></i> Populer
                                    </div>
                                <div class="blog-category"><?php echo htmlspecialchars($blog['category']); ?></div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="blog-date"><i class="far fa-calendar me-1"></i> <?php echo formatDateIndonesian($blog['publish_date']); ?></span>
                                    <span class="blog-read-time"><i class="far fa-eye me-1"></i> <?php echo number_format($blog['views']); ?> views</span>
                                </div>
                                <h3 class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></h3>
                                <p class="blog-excerpt">
                                    <?php echo htmlspecialchars($blog['excerpt']); ?>
                                </p>
                                <div class="blog-footer">
                                    <a href="detail-blog.php" class="btn btn-link">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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

    <style>
/* Blog Filters */
.blog-filters {
    background: transparent;
}

.category-dropdown {
    border: 2px solid var(--primary-color);
    border-radius: 5px;
    padding: 6px 35px 6px 20px; 
    font-weight: 600;
    color: var(--primary-color);
    background: white url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%230056b3' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e") no-repeat right 15px center/16px 12px;
    background-color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    height: auto;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%;
}

.category-dropdown:focus {
    border-color: var(--secondary-color);
    box-shadow: 0 0 0 0.25rem rgba(var(--primary-rgb), 0.25);
    outline: none;
}

.category-dropdown:hover {
    border-color: var(--secondary-color);
}

.category-dropdown option {
    padding: 10px;
    font-weight: 500;
}

/* Input group untuk mobile */
.input-group {
    width: auto;
}

.input-group-text {
    background-color: var(--primary-color);
    border: 2px solid var(--primary-color);
    border-right: none;
    border-radius: 10px 0 0 10px;
    color: white;
    padding: 8px 15px;
}

.input-group-text + .category-dropdown {
    /* border-radius: 0 25px 25px 0; */
    border-left: none;
    padding-left: 10px;
}

/* Hapus border kiri saat ada input-group-text */
.input-group-text + .category-dropdown {
    border-left: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .category-dropdown {
        min-width: 180px;
        padding: 7px 15px;
        font-size: 0.9rem;
        border-radius: 0 10px 10px 0 !important;
    }
    
    .input-group-text {
        padding: 8px 12px;
    }

    .filter-category-custom{
        width:50%;
        margin-top:2px;
    }

    .filter-search-custom{
        width:50%;
        margin-top:-18px;
    }
}

@media (max-width: 576px) {
    .blog-filters .row {
        justify-content: center;
    }
    
    .blog-filters .col-auto {
        width: 100%;
    }
    
    .input-group {
        width: 100%;
    }
    
    .category-dropdown {
        width: 100%;
        min-width: unset;
        flex: 1;
    }
    
    /* Sembunyikan icon di tablet kecil */
    @media (max-width: 400px) {
        .input-group-text {
            padding: 8px 10px;
            font-size: 0.9rem;
        }
    }
}

/* Desktop-only label */
@media (min-width: 768px) {
    .input-group-text {
        display: none !important;
    }
    
    .category-dropdown {
        border-radius: 10px !important;
        border-left: 2px solid var(--primary-color) !important;
        padding-left: 20px !important;
    }
}

.btn-search-custom{
    border-radius: 0 10px 10px 0;
}

.input-search-custom{
    border-radius: 10px 0 0 10px;
}
        /* Blog Hero Section */
        .blog-hero-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            /* border-bottom: 3px solid var(--primary-color); */
        }
        
        .blog-hero-section h1 {
            color: var(--primary-color);
        }
        
        .blog-search .form-control {
            border: 2px solid var(--primary-color);
        }
        
        .blog-search .btn {
            border: 2px solid var(--primary-color);
            background-color: var(--primary-color);
            color: white;
        }
        
        /* Blog Filters */
        .blog-filters {
            background: transparent;
        }

        .blog-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .blog-post-content {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .blog-meta span {
            display: flex;
            align-items: center;
        }
        
        .blog-post-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            line-height: 1.4;
            min-height: 70px;
        }
        
        .blog-excerpt {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            flex: 1;
            min-height: 80px;
        }
        
        .blog-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            font-size: 0.85rem;
            color: #888;
        }
        
        .blog-stats span {
            display: flex;
            align-items: center;
        }
        
        .read-more {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            padding: 0;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            margin-top: auto;
        }
        
        .read-more:hover {
            color: var(--secondary-color);
            transform: translateX(5px);
        }
        
        /* Popular Blogs */
        .popular-blog-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .popular-blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .popular-blog-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .popular-blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .popular-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #ff6b6b;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .popular-blog-content {
            padding: 20px;
        }
        
        .popular-blog-category {
            display: inline-block;
            background: #e9ecef;
            color: var(--primary-color);
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .popular-blog-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
            line-height: 1.4;
        }
        
        .popular-blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 15px;
        }
        
        .popular-read-more {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0;
        }
        
        /* Pagination */
        .pagination .page-link {
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            margin: 0 5px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
        
        .pagination .page-item.disabled .page-link {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .pagination .page-link:hover:not(.disabled) {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .blog-hero-section .row {
                text-align: center;
            }
            
            .blog-search {
                margin-top: 20px;
            }
        }
        
        @media (max-width: 768px) {
            /* .filter-categories {
                gap: 8px;
            }
            
            .filter-btn {
                padding: 6px 15px;
                font-size: 0.9rem;
            } */
            
            .blog-post-image {
                height: 200px;
            }
            
            .blog-post-content {
                padding: 20px;
            }
            
            .blog-post-title {
                font-size: 1.1rem;
                min-height: auto;
            }
            
            .blog-excerpt {
                min-height: auto;
            }
            
            .popular-blog-image {
                height: 180px;
            }
        }
        
        @media (max-width: 576px) {
            .blog-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
            
            /* .filter-categories {
                justify-content: flex-start;
                overflow-x: auto;
                padding-bottom: 10px;
            }
            
            .filter-btn {
                white-space: nowrap;
            } */
            
            .blog-stats {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
        }
    </style>

<?php include 'footer.php'; ?>