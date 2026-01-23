
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="fas fa-building me-3"></i>Japanect Consulting</h5>
                    <p>Perusahaan properti terpercaya dengan pengalaman lebih dari 10 tahun dalam membantu klien menemukan properti impian mereka.</p>
                    <div class="social-icons mt-2">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Menu</h5>
                    <div class="footer-links">
                        <a href="index.php">Home</a>
                        <a href="about.php">About</a>
                        <a href="services.php">Layanan</a>
                        <a href="listings.php">Listing</a>
                        <a href="blogs.php">Blog</a>
                        <a href="index.php#contact">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kategori Properti</h5>
                    <div class="footer-links">
                        <a href="#">Apartemen</a>
                        <a href="#">Rumah</a>
                        <a href="#">Villa</a>
                        <a href="#">Gedung Komersial</a>
                        <a href="#">Tanah</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kantor Kami</h5>
                    <p>Jl. Sudirman No. 123<br>Jakarta Pusat, 10220<br>Indonesia</p>
                    <p>Telp: (021) 1234-5678<br>Email: info@japanect.com</p>
                </div>
            </div>
            <hr>
            <div class="text-center py-3">
                <p class="mb-0">&copy; 2026 Japanect Consulting. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS dengan konfigurasi
        AOS.init({
            
            offset: 100,    // offset (dalam px) dari trigger point
            once: false,     // apakah animasi hanya sekali
            mirror: true   // apakah animasi diulang saat scroll kebalikan
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const listingContainer = document.getElementById('listingContainer');
            const loadingIndicator = document.getElementById('loadingIndicator');
            
            // Data dummy untuk properti
            const propertyData = [
                {
                    id: 1,
                    link: "detail-product-mna.php",
                    title: "Apartemen Green Valley",
                    location: "Jakarta Selatan",
                    price: "Rp 1,2 Miliar",
                    image: "https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                    type: "property",
                    features: [
                        { icon: "fas fa-bed", text: "3 Kamar" },
                        { icon: "fas fa-bath", text: "2 Kamar Mandi" },
                        { icon: "fas fa-ruler-combined", text: "120 m²" }
                    ],
                    animation: "fade-up" // Tambahkan animasi spesifik untuk setiap produk
                },
                {
                    id: 2,
                    link: "detail-product-mna.php",
                    title: "Rumah Mewah Taman Palem",
                    location: "Tangerang",
                    price: "Rp 3,5 Miliar",
                    image: "https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                    type: "property",
                    features: [
                        { icon: "fas fa-bed", text: "4 Kamar" },
                        { icon: "fas fa-bath", text: "3 Kamar Mandi" },
                        { icon: "fas fa-ruler-combined", text: "250 m²" }
                    ],
                    animation: "fade-up"
                },
                {
                    id: 3,
                    link: "detail-product-mna.php",
                    title: "Gedung Perkantoran Central Park",
                    location: "Jakarta Barat",
                    price: "Rp 25 Miliar",
                    image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                    type: "property",
                    features: [
                        { icon: "fas fa-building", text: "12 Lantai" },
                        { icon: "fas fa-car", text: "100 Parkir" },
                        { icon: "fas fa-ruler-combined", text: "5000 m²" }
                    ],
                    animation: "fade-up"
                }
            ];
            
            // Data dummy untuk Deal M&A
            const mnaData = [
                {
                    id: 4,
                    link: "detail-product-mna.php",
                    title: "Restoran Jepang di Shinjuku",
                    location: "Tokyo, Jepang",
                    price: "¥ 150 Juta",
                    image: "https://images.unsplash.com/photo-1559329007-40df8a9345d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                    type: "mna",
                    features: [
                        { icon: "fas fa-utensils", text: "Restoran" },
                        { icon: "fas fa-yen-sign", text: "Omzet ¥50jt/bulan" },
                        { icon: "fas fa-users", text: "10 Karyawan" }
                    ],
                    animation: "fade-left"
                },
                {
                    id: 5,
                    link: "detail-product-mna.php",
                    title: "Startup E-commerce Fashion",
                    location: "Osaka, Jepang",
                    price: "¥ 500 Juta",
                    image: "https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                    type: "mna",
                    features: [
                        { icon: "fas fa-store", text: "E-commerce" },
                        { icon: "fas fa-chart-line", text: "Growth 20%/tahun" },
                        { icon: "fas fa-calendar-alt", text: "Berdiri 2018" }
                    ],
                    animation: "fade-left"
                },
            ];
            
            // Fungsi untuk merender produk
            function renderProducts(products) {
                listingContainer.innerHTML = '';
                
                if (products.length === 0) {
                    listingContainer.innerHTML = `
                        <div class="col-12 text-center" data-aos="fade-up">
                            <p class="text-muted">Tidak ada produk yang ditemukan.</p>
                        </div>
                    `;
                    return;
                }
                
                products.forEach((product, index) => {
                    const featuresHtml = product.features.map(feature => 
                        `<span><i class="${feature.icon}"></i> ${feature.text}</span>`
                    ).join('');
                    
                    const animationDelay = index * 100; 
                    
                    const productHtml = `
                        <div class="col-md-6 col-lg-4" 
                             data-aos="${product.animation || 'fade-up'}"
                             data-aos-delay="${animationDelay}"
                             data-aos-duration="800">
                            <div class="property-card">
                                <div class="property-img">
                                    <img src="${product.image}" alt="${product.title}">
                                </div>
                                <div class="property-info">
                                    <h5>${product.title}</h5>
                                    <p class="text-muted">${product.location}</p>
                                    <p class="property-price">${product.price}</p>
                                    <div class="property-features">
                                        ${featuresHtml}
                                    </div>
                                    <a href="${product.link}" class="btn btn-primary mt-3" data-aos="zoom-in" data-aos-delay="${animationDelay + 200}">
                                        Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    listingContainer.innerHTML += productHtml;
                });
                
                // Refresh AOS setelah menambahkan elemen baru
                setTimeout(() => {
                    AOS.refresh();
                }, 100);
            }
            
            // Fungsi untuk filter produk
            function filterProducts(type) {
                // Tampilkan loading indicator
                loadingIndicator.style.display = 'block';
                listingContainer.style.opacity = '0.5';
                
                // Simulasi delay AJAX
                setTimeout(() => {
                    let filteredProducts = [];
                    
                    if (type === 'property') {
                        filteredProducts = propertyData;
                    } else if (type === 'mna') {
                        filteredProducts = mnaData;
                    }
                    
                    // Render produk yang difilter
                    renderProducts(filteredProducts);
                    
                    // Sembunyikan loading indicator
                    loadingIndicator.style.display = 'none';
                    listingContainer.style.opacity = '1';
                    
                    // Update tombol aktif
                    filterButtons.forEach(btn => {
                        if (btn.dataset.type === type) {
                            btn.classList.add('active');
                        } else {
                            btn.classList.remove('active');
                        }
                    });
                }, 500); // Simulasi delay jaringan
            }
            
            // Event listener untuk tombol filter
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.dataset.type;
                    filterProducts(type);
                });
            });
            
            // Load data properti secara default saat halaman pertama kali diakses
            filterProducts('property');
        });

        // Highlight active nav link
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === 'about.html') {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
            
            // Smooth scrolling for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    
</body>
</html>