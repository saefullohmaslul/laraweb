<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luarsekolah - Platform Pembelajaran Online</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>Luarsekolah</h2>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#products" class="nav-link">Kursus</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials" class="nav-link">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Kontak</a>
                </li>
            </ul>
            <div class="nav-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Belajar Tanpa Batas dengan Luarsekolah</h1>
                <p>Platform pembelajaran online terbaik untuk mengembangkan skill dan karir Anda. Akses ribuan kursus berkualitas dari instruktur berpengalaman.</p>
                <div class="hero-buttons">
                    <a href="#products" class="btn btn-primary">Mulai Belajar</a>
                    <a href="#testimonials" class="btn btn-secondary">Lihat Testimoni</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-placeholder">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-header">
                <h2>Kursus Populer</h2>
                <p>Pilih kursus yang sesuai dengan minat dan kebutuhan Anda</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <div class="product-content">
                        <h3>JavaScript Fundamentals</h3>
                        <p>Pelajari dasar-dasar JavaScript dari nol hingga mahir. Cocok untuk pemula yang ingin memulai karir sebagai web developer.</p>
                        <div class="product-price">
                            <span class="price">Rp 299.000</span>
                            <span class="original-price">Rp 499.000</span>
                        </div>
                        <a href="#" class="btn btn-outline">Lihat Detail</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <i class="fab fa-react"></i>
                    </div>
                    <div class="product-content">
                        <h3>React.js Mastery</h3>
                        <p>Kuasai React.js dan bangun aplikasi web modern yang interaktif. Termasuk hooks, context, dan best practices.</p>
                        <div class="product-price">
                            <span class="price">Rp 399.000</span>
                            <span class="original-price">Rp 599.000</span>
                        </div>
                        <a href="#" class="btn btn-outline">Lihat Detail</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <i class="fab fa-python"></i>
                    </div>
                    <div class="product-content">
                        <h3>Python for Data Science</h3>
                        <p>Pelajari Python untuk analisis data dan machine learning. Mulai dari pandas hingga scikit-learn.</p>
                        <div class="product-price">
                            <span class="price">Rp 449.000</span>
                            <span class="original-price">Rp 699.000</span>
                        </div>
                        <a href="#" class="btn btn-outline">Lihat Detail</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="product-content">
                        <h3>Mobile App Development</h3>
                        <p>Buat aplikasi mobile dengan React Native. Satu kode untuk iOS dan Android.</p>
                        <div class="product-price">
                            <span class="price">Rp 549.000</span>
                            <span class="original-price">Rp 799.000</span>
                        </div>
                        <a href="#" class="btn btn-outline">Lihat Detail</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="product-content">
                        <h3>UI/UX Design</h3>
                        <p>Pelajari prinsip desain yang baik dan tools seperti Figma untuk membuat interface yang menarik.</p>
                        <div class="product-price">
                            <span class="price">Rp 349.000</span>
                            <span class="original-price">Rp 549.000</span>
                        </div>
                        <a href="#" class="btn btn-outline">Lihat Detail</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="product-content">
                        <h3>AI Mastery</h3>
                        <p>Pelajari teknologi Artificial Intelligence dari dasar hingga advanced. Termasuk Machine Learning, Deep Learning, dan implementasi AI.</p>
                        <div class="product-price">
                            <span class="price">Rp 649.000</span>
                            <span class="original-price">Rp 899.000</span>
                        </div>
                        <a href="#" class="btn btn-outline">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Apa Kata Mereka?</h2>
                <p>Testimoni dari ribuan siswa yang telah bergabung dengan Luarsekolah</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Kursus JavaScript di Luarsekolah sangat membantu saya memahami konsep programming. Sekarang saya sudah bekerja sebagai frontend developer!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Andi Pratama</h4>
                            <span>Frontend Developer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Materi yang diajarkan sangat up-to-date dan praktis. Instrukturnya juga sangat responsif dalam menjawab pertanyaan."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Sari Dewi</h4>
                            <span>UI/UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Platform yang sangat user-friendly dan konten berkualitas tinggi. Recommended banget untuk yang mau upgrade skill!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Budi Santoso</h4>
                            <span>Data Analyst</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Luarsekolah</h3>
                    <p>Platform pembelajaran online terbaik untuk mengembangkan skill dan karir Anda.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Kursus</h4>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile Development</a></li>
                        <li><a href="#">Data Science</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Dukungan</h4>
                    <ul>
                        <li><a href="#">Pusat Bantuan</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Luarsekolah. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="/js/script.js"></script>
</body>
</html>