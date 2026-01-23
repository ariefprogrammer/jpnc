<?php include 'header.php'; ?>

<?php
// Simulasikan data detail blog (dalam implementasi nyata akan diambil dari database)
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

$blog_detail = [
    1 => [
        "id" => 1,
        "title" => "Strategi Investasi Properti di Tokyo untuk Pemula",
        "slug" => "strategi-investasi-properti-tokyo-pemula",
        "excerpt" => "Panduan lengkap untuk investor pemula yang ingin memulai investasi properti di Tokyo.",
        "content" => '<h2>Memulai Investasi Properti di Tokyo</h2>
                     <p>Tokyo sebagai ibu kota Jepang menawarkan peluang investasi properti yang menarik bagi investor asing. Dengan populasi yang padat dan pertumbuhan ekonomi yang stabil, properti di Tokyo memiliki potensi <strong>capital gain</strong> dan <strong>rental yield</strong> yang menjanjikan.</p>
                     
                     <h3>Lokasi Strategis di Tokyo</h3>
                     <p>Berikut adalah beberapa area yang direkomendasikan untuk investasi properti di Tokyo:</p>
                     <ul>
                         <li><strong>Minato Ward</strong>: Area premium dengan apartemen kelas atas</li>
                         <li><strong>Shibuya</strong>: Pusat bisnis dan hiburan</li>
                         <li><strong>Shinjuku</strong>: Area komersial dengan permintaan tinggi</li>
                         <li><strong>Chuo Ward</strong> - Investasi jangka panjang yang stabil</li>
                     </ul>
                     
                     <h3>Analisis Return on Investment (ROI)</h3>
                     <p>Berdasarkan data terbaru, properti di Tokyo menawarkan:</p>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th>Lokasi</th>
                                 <th>Rental Yield</th>
                                 <th>Capital Appreciation</th>
                                 <th>Rekomendasi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>Minato</td>
                                 <td>3.2% - 4.5%</td>
                                 <td>5% - 8% per tahun</td>
                                 <td>★★★★★</td>
                             </tr>
                             <tr>
                                 <td>Shibuya</td>
                                 <td>4.0% - 5.2%</td>
                                 <td>6% - 10% per tahun</td>
                                 <td>★★★★☆</td>
                             </tr>
                             <tr>
                                 <td>Shinjuku</td>
                                 <td>3.8% - 4.8%</td>
                                 <td>4% - 7% per tahun</td>
                                 <td>★★★★☆</td>
                             </tr>
                         </tbody>
                     </table>
                     
                     <h3>Tips untuk Investor Pemula</h3>
                     <ol>
                         <li>Mulai dengan budget yang terjangkau</li>
                         <li>Fokus pada properti dengan kondisi baik</li>
                         <li>Gunakan jasa agen properti berlisensi</li>
                         <li>Pahami regulasi properti Jepang</li>
                         <li>Perhitungkan biaya maintenance</li>
                     </ol>
                     
                     <div class="alert alert-info">
                         <h4><i class="fas fa-lightbulb me-2"></i>Tips Penting</h4>
                         <p>Investasi properti di Tokyo membutuhkan pemahaman mendalam tentang pasar lokal. Disarankan untuk berkonsultasi dengan ahli sebelum memutuskan investasi.</p>
                     </div>',
        "featured_image" => "https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80",
        "category" => "Investasi",
        "author" => "Admin",
        "author_image" => "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80",
        "author_bio" => "Ahli investasi properti, pengalaman 10 tahun di pasar Jepang.",
        "publish_date" => "2024-03-20",
        "read_time" => "5",
        "tags" => ["investasi", "properti", "tokyo", "pemula"],
        "views" => 1245,
        "shares" => 234
    ],
    2 => [
        "id" => 2,
        "title" => "Update Regulasi M&A UKM di Jepang 2024",
        "slug" => "update-regulasi-mna-ukm-jepang-2024",
        "excerpt" => "Perubahan regulasi terbaru yang berdampak pada proses M&A untuk UKM di Jepang.",
        "content" => '<h2>Regulasi M&A UKM Jepang Terbaru</h2>
                     <p>Pemerintah Jepang telah memperbarui regulasi M&A untuk UKM dengan tujuan meningkatkan transparansi dan efisiensi proses akuisisi.</p>
                     
                     <h3>Perubahan Penting Tahun 2024</h3>
                     <p>Beberapa perubahan regulasi yang perlu diperhatikan:</p>
                     
                     <h4>1. Persyaratan Dokumen</h4>
                     <p>Dokumen yang diperlukan sekarang lebih terstandarisasi dengan format baru yang harus diikuti.</p>
                     
                     <h4>2. Timeline Proses</h4>
                     <p>Proses approval dipercepat dari rata-rata 90 hari menjadi 60 hari kerja.</p>
                     
                     <h4>3. Due Diligence</h4>
                     <p>Persyaratan due diligence lebih ketat dengan fokus pada sustainability report.</p>',
        "featured_image" => "https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80",
        "category" => "Regulasi",
        "author" => "Legal Team",
        "author_image" => "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80",
        "author_bio" => "Tim hukum spesialis regulasi bisnis Jepang.",
        "publish_date" => "2024-03-18",
        "read_time" => "7",
        "tags" => ["regulasi", "mna", "ukm"],
        "views" => 892,
        "shares" => 156
    ],
    3 => [
        "id" => 3,
        "title" => "Panduan Lengkap Pendirian Perusahaan Asing di Jepang",
        "slug" => "panduan-pendirian-perusahaan-asing-jepang",
        "excerpt" => "Langkah demi langkah mendirikan perusahaan asing di Jepang.",
        "content" => '<h2>Pendirian Perusahaan di Jepang</h2>
                     <p>Mendirikan perusahaan di Jepang membutuhkan pemahaman yang baik tentang proses dan regulasi yang berlaku.</p>',
        "featured_image" => "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80",
        "category" => "Bisnis",
        "author" => "Business Consultant",
        "author_image" => "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80",
        "author_bio" => "Konsultan bisnis dengan spesialisasi pendirian perusahaan di Jepang.",
        "publish_date" => "2024-03-15",
        "read_time" => "6",
        "tags" => ["bisnis", "perusahaan", "jepang"],
        "views" => 1567,
        "shares" => 289
    ]
];

// Ambil data blog berdasarkan ID
$blog = isset($blog_detail[$blog_id]) ? $blog_detail[$blog_id] : $blog_detail[1];

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
?>

    <!-- Blog Detail Hero Section -->
    <section class="blog-detail-hero py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Breadcrumb -->
                            <nav aria-label="breadcrumb" data-aos="fade-down">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="blogs.php">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($blog['title']); ?></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-4 text-md-end text-start">
                            <!-- Category -->
                            <div class="blog-category-tag mb-3" data-aos="fade-up">
                                <span class="badge bg-secondary p-2"><i class="fas fa-tag me-1"></i> <?php echo htmlspecialchars($blog['category']); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Title -->
                    <h1 class="blog-detail-title" data-aos="fade-up" data-aos-delay="100">
                        <?php echo htmlspecialchars($blog['title']); ?>
                    </h1>
        
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <section class="blog-featured-image mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="featured-image-wrapper" data-aos="zoom-in">
                        <img src="<?php echo htmlspecialchars($blog['featured_image']); ?>" 
                             alt="<?php echo htmlspecialchars($blog['title']); ?>" 
                             class="img-fluid rounded-3 shadow">
                        <div class="image-caption text-center mt-3 text-muted small">
                            Investasi properti di Tokyo
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog-content-section py-4">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <article class="blog-article" data-aos="fade-up">
                        <div class="article-content">
                            <?php echo $blog['content']; ?>
                        </div>
                        
                        <!-- Tags -->
                        <div class="article-tags mt-5 pt-4 border-top">
                            <h6 class="mb-3">
                                <i class="fas fa-tags me-2"></i>Tags
                            </h6>
                            <div class="tags-container">
                                <?php foreach ($blog['tags'] as $tag): ?>
                                    <a href="blogs.php?search=<?php echo urlencode($tag); ?>" class="tag-pill">
                                        #<?php echo htmlspecialchars($tag); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Share Buttons -->
                        <div class="article-share mt-5 pt-4 border-top">
                            <h6 class="mb-3">
                                <i class="fas fa-share-alt me-2"></i>Bagikan Artikel
                            </h6>
                            <div class="share-buttons d-flex gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fab fa-facebook-f me-1"></i> Facebook
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-info">
                                    <i class="fab fa-twitter me-1"></i> Twitter
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                    <i class="fab fa-linkedin-in me-1"></i> LinkedIn
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                    <i class="fas fa-link me-1"></i> Copy Link
                                </a>
                            </div>
                            <div class="share-count mt-2 small text-muted">
                                <i class="fas fa-share me-1"></i> <?php echo number_format($blog['shares']); ?> shares
                            </div>
                        </div>
                    </article>
                    
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar sticky-top" style="z-index:-999!important; top: 100px;">
                        
                        
                        <!-- Related Articles -->
                        <div class="sidebar-widget mb-4" data-aos="fade-left">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="widget-title">
                                        <i class="fas fa-newspaper me-2"></i>Artikel Terkait
                                    </h6>
                                    <div class="related-articles">
                                        <?php
                                        // Simulasi artikel terkait
                                        $related_articles = [
                                            [
                                                'title' => 'Analisis Pasar Properti di Osaka',
                                                'category' => 'Properti',
                                                'read_time' => '8 min',
                                                'url' => 'blog-detail.php?id=4'
                                            ],
                                            [
                                                'title' => 'Tips Due Diligence untuk M&A',
                                                'category' => 'M&A',
                                                'read_time' => '9 min',
                                                'url' => 'blog-detail.php?id=5'
                                            ],
                                            [
                                                'title' => 'Mengapa Fukuoka Menjadi Destinasi Terbaik',
                                                'category' => 'Investasi',
                                                'read_time' => '5 min',
                                                'url' => 'blog-detail.php?id=6'
                                            ]
                                        ];
                                        
                                        foreach ($related_articles as $article):
                                        ?>
                                        <a href="<?php echo $article['url']; ?>" class="related-article-item">
                                            <div class="related-title"><?php echo htmlspecialchars($article['title']); ?></div>
                                            <div class="related-meta">
                                                <span class="badge bg-light text-dark"><?php echo htmlspecialchars($article['category']); ?></span>
                                                <span class="text-muted"><?php echo htmlspecialchars($article['read_time']); ?></span>
                                            </div>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Newsletter -->
                        <div class="sidebar-widget" data-aos="fade-left" data-aos-delay="200">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="widget-title">
                                        <i class="fas fa-envelope me-2"></i>Newsletter
                                    </h6>
                                    <p class="small text-muted mb-3">Dapatkan update artikel terbaru langsung ke email Anda.</p>
                                    <form class="newsletter-form">
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control" placeholder="Email Anda" required>
                                        </div>
                                        <button type="submit" class="btn btn-warning p-2 btn-sm w-100">
                                            <i class="fas fa-paper-plane me-1"></i> Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles Section -->
    <section class="related-blogs-section py-5 bg-light">
        <div class="container">
            <h3 class="section-title-about text-center mb-5" data-aos="fade-up">Artikel Lainnya</h3>
            <div class="row g-4">
                <?php
                // Simulasi artikel lainnya
                $other_articles = [
                    [
                        'id' => 4,
                        'title' => 'Analisis Pasar Properti di Osaka: Peluang & Tantangan',
                        'category' => 'Properti',
                        'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-03-12',
                        'read_time' => '8 min',
                        'views' => 1245
                    ],
                    [
                        'id' => 5,
                        'title' => 'Tips Due Diligence yang Efektif untuk M&A di Jepang',
                        'category' => 'M&A',
                        'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-03-10',
                        'read_time' => '9 min',
                        'views' => 177
                    ],
                    [
                        'id' => 6,
                        'title' => 'Mengapa Fukuoka Menjadi Destinasi Investasi Properti Terbaik',
                        'category' => 'Investasi',
                        'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                        'date' => '2024-03-08',
                        'read_time' => '5 min',
                        'views' => 1244
                    ]
                ];
                
                foreach ($other_articles as $index => $article):
                ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="<?php echo htmlspecialchars($article['image']); ?>" 
                                alt="<?php echo htmlspecialchars($article['title']); ?>" class="img-fluid">
                                <div class="popular-badge">
                                    <i class="fas fa-fire me-1"></i> Populer
                                </div>
                            <div class="blog-category"><?php echo htmlspecialchars($article['category']); ?></div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="blog-date"><i class="far fa-calendar me-1"></i> <?php echo formatDateIndonesian($article['date']); ?></span>
                                <span class="blog-read-time"><i class="far fa-eye me-1"></i> <?php echo number_format($article['views']); ?> views</span>
                            </div>
                            <h3 class="blog-title"><?php echo htmlspecialchars($article['title']); ?></h3>
                            <p class="blog-excerpt">
                                <?php echo htmlspecialchars($article['excerpt']); ?>
                            </p>
                            <div class="blog-footer">
                                <a href="detail-blog.php" class="btn btn-link">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="related-blog-card">
                        <div class="related-blog-image">
                            <img src="<?php echo htmlspecialchars($article['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($article['title']); ?>" 
                                 class="img-fluid">
                            <span class="related-blog-category"><?php echo htmlspecialchars($article['category']); ?></span>
                        </div>
                        <div class="related-blog-content">
                            <h5 class="related-blog-title"><?php echo htmlspecialchars($article['title']); ?></h5>
                            <div class="related-blog-meta">
                                <span class="related-blog-date">
                                    <i class="far fa-calendar me-1"></i> 
                                    <?php echo formatDateIndonesian($article['date']); ?>
                                </span>
                                <span class="related-blog-read-time">
                                    <i class="far fa-clock me-1"></i> 
                                    <?php echo htmlspecialchars($article['read_time']); ?>
                                </span>
                            </div>
                            <a href="detail-blog.php?id=<?php echo $article['id']; ?>" 
                               class="btn btn-link related-read-more">
                                Baca Artikel <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact-section" style="background-color: var(--primary-color); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Ingin Konsultasi Investasi Properti di Jepang?</h2>
                    <p>Tim ahli kami siap membantu Anda dalam investasi dan bisnis di Jepang.</p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <a href="inquiry.php" class="btn btn-primary2" style="background-color: var(--secondary-color); border-color: var(--secondary-color);">
                        <i class="fas fa-calendar-check me-2"></i> Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Blog Detail Hero */
        .blog-detail-hero {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .blog-detail-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1.3;
            margin-bottom: -20px;
        }
        
        /* Featured Image */
        .featured-image-wrapper {
            position: relative;
        }
        
        .featured-image-wrapper img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            object-position: center;
        }
        
        /* Article Content */
        .blog-article {
            line-height: 1.8;
            color: #333;
        }
        
        .blog-article h2 {
            color: var(--primary-color);
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary-color);
        }
        
        .blog-article h3 {
            color: var(--primary-color);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .blog-article h4 {
            color: #555;
            margin-top: 1.2rem;
            margin-bottom: 0.8rem;
        }
        
        .blog-article p {
            margin-bottom: 1.5rem;
            text-align: justify;
        }
        
        .blog-article ul, 
        .blog-article ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        
        .blog-article li {
            margin-bottom: 0.5rem;
        }
        
        .blog-article table {
            margin-bottom: 1.5rem;
        }
        
        .blog-article .table th {
            background-color: var(--primary-color);
            color: white;
        }
        
        .blog-article .alert {
            border-left: 4px solid var(--primary-color);
            background-color: #f8f9fa;
        }
        
        /* Tags */
        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .tag-pill {
            display: inline-block;
            padding: 5px 15px;
            background-color: #e9ecef;
            color: var(--primary-color);
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .tag-pill:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Share Buttons */
        .share-buttons .btn {
            font-size: 0.85rem;
        }
        
        /* Author Box */
        .author-box {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        /* Sidebar */
        .sidebar-widget .card {
            border-radius: 10px;
        }
        
        .widget-title {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        
        .toc-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .toc-item {
            padding: 8px 12px;
            background-color: #f8f9fa;
            border-radius: 5px;
            color: #333;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border-left: 3px solid var(--primary-color);
        }
        
        .toc-item:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateX(5px);
        }
        
        .related-articles {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .related-article-item {
            padding: 12px;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            transition: all 0.3s ease;
        }
        
        .related-article-item:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
            border-color: var(--primary-color);
        }
        
        .related-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .related-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
        }
        
        /* Related Blogs */
        .related-blog-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .related-blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .related-blog-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .related-blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .related-blog-card:hover .related-blog-image img {
            transform: scale(1.05);
        }
        
        .related-blog-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary-color);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .related-blog-content {
            padding: 20px;
        }
        
        .related-blog-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
            line-height: 1.4;
        }
        
        .related-blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 15px;
        }
        
        .related-read-more {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .blog-detail-title {
                font-size: 2rem;
            }
            
            .featured-image-wrapper img {
                height: 300px;
            }
            
            .blog-sidebar {
                margin-top: 3rem;
            }
        }
        
        @media (max-width: 768px) {
            .blog-detail-title {
                font-size: 1.8rem;
            }
            
            .blog-detail-meta .d-flex {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .featured-image-wrapper img {
                height: 250px;
            }
            
            .article-navigation {
                flex-direction: column;
                gap: 10px;
            }
            
            .article-navigation .btn {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .blog-detail-title {
                font-size: 1.5rem;
            }
            
            .share-buttons {
                flex-wrap: wrap;
            }
            
            .share-buttons .btn {
                flex: 1;
                min-width: 120px;
            }
        }
    </style>

<?php include 'footer.php'; ?>