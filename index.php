<?php
session_start();
require 'koneksi.php';

// Ambil semua reviews
$reviews = [];
$result = $conn->query("SELECT nama, kesan FROM reviews ORDER BY created_at DESC");
while ($row = $result->fetch_assoc()) {
    $reviews[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <title>Wisata Tebing Lonceng</title>

    <!-- Vue: hide template sebelum mount -->
    <style>[v-cloak] { display: none !important; }</style>
</head>
<body>
    <header>
        <nav>
            <button class="nav-hamburger" id="hamburgerBtn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul id="navMenu">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- ===== BERANDA ===== -->
        <section id="beranda">
            <video autoplay muted loop playsinline class="beranda-video">
                <source src="assets/vd/tebing-lonceng-vd.webm" type="video/webm">
            </video>
            <div class="beranda-overlay"></div>
            <div class="beranda-content">
                <img src="assets/svg/logo-white.svg" alt="Tebing Lonceng" class="tebing-lonceng">
                <div class="headline">
                    <h1 class="headline-up">Melihat Samarinda</h1>
                    <h1 class="headline-down">Dengan Tebing Lonceng</h1>
                </div>
                <p class="sub-headline">
                    Tebing Lonceng menghadirkan suasana alam yang tenang dan pemandangan Samarinda yang menakjubkan.
                </p>
                <a href="https://maps.app.goo.gl/eKEawSRrjP1um7N37" class="btn-beranda">
                    Jelajah Sekarang
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg>
                </a>
            </div>
        </section>

        <!-- ===== ABOUT ===== -->
        <section id="about">
            <div class="about-content">
                <div class="about-content-box1">
                    <div class="desc">
                        <p class="desc-eyebrow reveal" style="transition-delay: 0.3s;">Tentang</p>
                        <h2 class="reveal">
                            <span>Lebih Dari Sekedar </span><br>
                            <span style="font-size: 52px; font-family: instrument-serif, serif; letter-spacing: -1px; font-style: italic;">Titik Pandang Biasa</span>
                        </h2>
                        <div class="accordion reveal" style="transition-delay: 0.6s;" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Sejarah
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <p>
                                            Gunung Lonceng adalah saksi bisu <span style="font-weight: 700;">perjuangan di tepian Sungai Mahakam</span>.
                                            Dahulu, puncak ini merupakan titik intai strategis para pejuang untuk memantau pergerakan kapal yang masuk ke Samarinda.
                                            Sebuah lonceng raksasa pernah berdiri teguh di sini sebagai isyarat penjagaan, yang kini abadi menjadi nama bukit ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Pemberdayaan
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>
                                            Tempat ini lahir dari semangat <span style="font-weight: 700;">gotong royong warga Mangkupalas</span>.
                                            Kami merangkul pemuda lokal untuk bersama-sama menjaga keamanan dan kenyamanan setiap tamu. Bagi kami,
                                            Tebing Lonceng bukan sekadar objek wisata, melainkan rumah bersama untuk tumbuh dan berdaya bagi masyarakat sekitar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Pesona
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>
                                            Nikmati cara terbaik melihat Samarinda dari ketinggian. Dengan <span style="font-weight: 700;">panorama megah dan berbagai spot foto ikonik</span>,
                                            kami menawarkan ruang untuk merawat kenangan. Lengkapi petualangan Anda dengan menginap di homestay kami untuk merasakan sensasi terbangun di atas awan yang menenangkan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="picture-frame reveal" style="transition-delay: 0.3s;">
                        <img src="assets/img/3.webp" alt="1" class="gambar-pemandangan-1">
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FASILITAS ===== -->
        <section id="fasilitas">
            <!-- ══ 1. SPOT FOTO ══ -->
            <div class="fas-spotfoto">
                <div class="fas-spotfoto-header">
                    <p class="fas-spotfoto-desc reveal" style="transition-delay: 0.3s;">
                        Setiap sudut Tebing Lonceng dirancang untuk menjadi latar sempurna.
                        Dari tebing berbatu yang dramatis hingga gazebo dengan panorama kota,
                        temukan spot yang paling cocok untuk mengabadikan kenangan perjalananmu.
                    </p>
                    <div class="fas-spotfoto-label">
                        <p class="desc-eyebrow fas-eyebrow reveal" style="transition-delay: 0.6s;">Fasilitas</p>
                        <h2 class="fas-title reveal" style="transition-delay: 0.3s;">
                            <span>Abadikan Momen di</span><br>
                            <span style="font-size: 52px; font-family: instrument-serif, serif; font-style: italic; letter-spacing: -1px; font-weight: 300;">Spot Foto Terbaik</span>
                        </h2>
                    </div>
                </div>

                <div class="fas-cards-track-wrap reveal" style="transition-delay: 0.3s;">
                    <div class="fas-cards-track">
                        <!-- Set 1 -->
                        <div class="card fas-card">
                            <img src="assets/img/2.webp" class="card-img-top fas-card-img" alt="Spot Tebing">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Tebing Utama — titik pandang paling ikonik dengan pemandangan langsung ke Sungai Mahakam.</p>
                            </div>
                        </div>
                        <div class="card fas-card">
                            <img src="assets/img/5.webp" class="card-img-top fas-card-img" alt="Spot Panorama">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Panorama 180° — spot terbuka dengan latar langit dan hamparan kota Samarinda.</p>
                            </div>
                        </div>
                        <div class="card fas-card">
                            <img src="assets/img/9.webp" class="card-img-top fas-card-img" alt="Spot Hijau">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Koridor Hijau — jalur yang rindang dengan estetika alami yang sempurna untuk foto.</p>
                            </div>
                        </div>
                        <div class="card fas-card">
                            <img src="assets/img/11.webp" class="card-img-top fas-card-img" alt="Spot Senja">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Spot Senja — lokasi terbaik untuk menikmati dan mengabadikan golden hour Samarinda.</p>
                            </div>
                        </div>
                        <!-- Set 2 (duplikat untuk seamless loop) -->
                        <div class="card fas-card">
                            <img src="assets/img/2.webp" class="card-img-top fas-card-img" alt="Spot Tebing">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Tebing Utama — titik pandang paling ikonik dengan pemandangan langsung ke Sungai Mahakam.</p>
                            </div>
                        </div>
                        <div class="card fas-card">
                            <img src="assets/img/5.webp" class="card-img-top fas-card-img" alt="Spot Panorama">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Panorama 180° — spot terbuka dengan latar langit dan hamparan kota Samarinda.</p>
                            </div>
                        </div>
                        <div class="card fas-card">
                            <img src="assets/img/9.webp" class="card-img-top fas-card-img" alt="Spot Hijau">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Koridor Hijau — jalur yang rindang dengan estetika alami yang sempurna untuk foto.</p>
                            </div>
                        </div>
                        <div class="card fas-card">
                            <img src="assets/img/11.webp" class="card-img-top fas-card-img" alt="Spot Senja">
                            <div class="card-body fas-card-body">
                                <p class="card-text fas-card-text">Spot Senja — lokasi terbaik untuk menikmati dan mengabadikan golden hour Samarinda.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- ══ 2. HOMESTAY ══ -->
            <div class="fas-homestay">
                <div class="fas-homestay-inner reveal" style="transition-delay: 0.3s;">
                    <div class="fas-homestay-left">
                        <p class="desc-eyebrow fas-eyebrow fas-eyebrow--dark reveal" style="transition-delay: 0.6s;">Homestay</p>
                        <h2 class="fas-homestay-title reveal" style="transition-delay: 0.3s;">
                            <span>Menginap di Atas</span><br>
                            <span style="font-family: instrument-serif, serif; font-style: italic; letter-spacing: -1px; font-weight: 300; font-size: clamp(32px, 4vw, 52px);">Ketinggian</span>
                        </h2>
                        <p class="fas-homestay-desc reveal" style="transition-delay: 0.3s;">
                            Rasakan pengalaman menginap yang tak biasa — terbangun dengan pemandangan kota Samarinda
                            yang membentang dari balik jendela. Homestay kami hadir dengan kenyamanan sederhana
                            namun penuh kehangatan.
                        </p>
                        <div class="fas-btn-group">
                            <a href="https://maps.app.goo.gl/eKEawSRrjP1um7N37" class="btn-beranda btn-beranda--dark" target="_blank">
                                Lihat Lokasi
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg>
                            </a>
                            <a href="https://maps.app.goo.gl/eKEawSRrjP1um7N37" class="btn-beranda btn-beranda--dark" target="_blank">
                                Booking Sekarang
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="fas-homestay-right">
                        <div id="carouselHomestay" class="carousel slide fas-homestay-carousel" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselHomestay" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselHomestay" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselHomestay" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselHomestay" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/16.webp" class="d-block w-100" alt="Homestay 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/10.webp" class="d-block w-100" alt="Homestay 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/8.webp" class="d-block w-100" alt="Homestay 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/18.webp" class="d-block w-100" alt="Homestay 4">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomestay" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselHomestay" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ══ 3. SOCIAL MEDIA ══ -->
            <div class="fas-sosmed">
                <div class="fas-sosmed-inner">
                    <div class="fas-sosmed-left">
                        <p class="desc-eyebrow fas-eyebrow reveal" style="transition-delay: 0.6s;">Ikuti Kami</p>
                        <h2 class="fas-title reveal" style="transition-delay: 0.3s;">
                            <span>Ingin lihat Keseruan</span><br>
                            <span style="font-size: 52px;font-family: instrument-serif, serif; font-style: italic; letter-spacing: -1px; font-weight: 300;">Apa Saja di Sini?</span>
                        </h2>
                        <p class="fas-sosmed-desc reveal" style="transition-delay: 0.3s;">
                            Ikuti perjalanan seru pengunjung lainnya, pantau info terbaru,
                            dan dapatkan inspirasi sebelum kamu datang langsung ke Tebing Lonceng.
                        </p>
                        <a href="https://www.instagram.com/" class="btn-beranda" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm.003 1.44c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.919c-.109-.282-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.275.843-.039 1.097-.047 3.233-.047"/>
                                <path d="M8 10.93a2.929 2.929 0 1 1 0-5.858 2.929 2.929 0 0 1 0 5.858m0-7.44a4.51 4.51 0 1 0 0 9.02 4.51 4.51 0 0 0 0-9.02m5.785-.05a1.055 1.055 0 1 1-2.11 0 1.055 1.055 0 0 1 2.11 0"/>
                            </svg>
                            Kunjungi Instagram Kami
                        </a>
                    </div>

                    <div class="fas-sosmed-right">
                        <div class="fas-video-trio reveal" style="transition-delay: 0.3s;">
                            <div class="fas-video-wrap fas-video-wrap--side fas-video-wrap--left">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DJ2iikeBbWE/" data-instgrm-version="14"></blockquote>
                            </div>
                            <div class="fas-video-wrap fas-video-wrap--center">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DScOo1GEb23/?utm_source=ig_embed&utm_campaign=loading" data-instgrm-version="14"></blockquote>
                            </div>
                            <div class="fas-video-wrap fas-video-wrap--side fas-video-wrap--right">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DRf6_FYk0CM/?utm_source=ig_embed&utm_campaign=loading" data-instgrm-version="14"></blockquote>
                            </div>
                        </div>
                    </div>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>

        </section>

        <!-- ===== CONTACT ===== -->
        <section id="contact">
            <div class="contact-content reveal" style="transition-delay: 0.6s;">
                <!-- Foto kiri -->
                <div class="contact-photos contact-photos-left">
                    <div class="contact-photo cp-1">
                        <img src="assets/img/1.webp" alt="Tebing Lonceng">
                    </div>
                    <div class="contact-photo cp-2">
                        <img src="assets/img/3.webp" alt="Tebing Lonceng">
                    </div>
                    <div class="contact-photo cp-3">
                        <img src="assets/img/11.webp" alt="Tebing Lonceng">
                    </div>
                </div>

                <div class="contact-center">
                    <p class="desc-eyebrow contact-eyebrow reveal" style="transition-delay: 0.6s;">Kontak</p>
                    <h2 class="contact-headline reveal" style="transition-delay: 0.3s;">
                        <span>Langkah Awal</span><br>
                        <span style="font-size: 52px;font-family: instrument-serif, serif; font-style: italic; letter-spacing: -1px; font-weight: 300;">
                            Menuju Puncak Kedamaian
                        </span>
                    </h2>
                    <p class="contact-sub">
                        Temukan kami di Mangkupalas, Samarinda — dan rasakan sendiri keajaiban yang hanya bisa dimengerti saat kamu berdiri di atas sana.
                    </p>
                    <a href="https://maps.app.goo.gl/eKEawSRrjP1um7N37" class="btn-beranda" target="_blank">
                        Jelajah Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                        </svg>
                    </a>

                    <div class="maps-container reveal" style="transition-delay: 0.6s;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.644671127694!2d117.14851110000001!3d-0.5345632000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f903394186d%3A0xc52a1a192e9072d!2sWisata%20tebing%20lonceng!5e0!3m2!1sid!2sid!4v1775287288258!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Foto kanan -->
                <div class="contact-photos contact-photos-right reveal" style="transition-delay: 0.6s;">
                    <div class="contact-photo cp-4">
                        <img src="assets/img/12.webp" alt="Tebing Lonceng">
                    </div>
                    <div class="contact-photo cp-5">
                        <img src="assets/img/14.webp" alt="Tebing Lonceng">
                    </div>
                    <div class="contact-photo cp-6">
                        <img src="assets/img/18.webp" alt="Tebing Lonceng">
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== REVIEWS — dikendalikan Vue.js ===== -->
        <section id="reviews">

            <!--
            ┌────────────────────────────────────────────┐
            │  BAGIAN FORM ULASAN (PHP mengatur state)   │
            └────────────────────────────────────────────┘
            -->
            <div class="reviews-form-area">
                <div class="reviews-form-inner">
                    <div class="reviews-form-desc">
                        <p class="desc-eyebrow reviews-eyebrow reveal" style="transition-delay: 0.6s;">Ulasan</p>
                        <h2 class="reviews-form-title reveal" style="transition-delay: 0.3s;">
                            Ingin membagikan<br>
                            <span style="font-size: 72px;font-family: instrument-serif, serif; font-style: italic; letter-spacing: -1px; font-weight: 300;">cerita Anda?</span>
                        </h2>
                        <p class="reviews-form-sub">Karena setiap sudut di sini punya cerita, dan kami ingin mendengar ceritamu.</p>
                    </div>

                    <div class="reviews-form-panel reveal" style="transition-delay: 0.6s;">

                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- ── STATE: SUDAH LOGIN — form dikelola Vue ── -->
                        <div id="app-review" class="reviews-panel reviews-panel--review">
                            <div class="reviews-user-bar">
                                <?php
                                    $avatar_char = strtoupper(mb_substr($_SESSION['user_nama'], 0, 1));
                                    $picture     = $_SESSION['user_picture'] ?? null;
                                ?>
                                <?php if ($picture): ?>
                                    <img src="<?= htmlspecialchars($picture) ?>" class="reviews-avatar-img" alt="foto profil">
                                <?php else: ?>
                                    <div class="reviews-avatar"><?= $avatar_char ?></div>
                                <?php endif; ?>
                                <span class="reviews-user-name"><?= htmlspecialchars($_SESSION['user_nama']) ?></span>
                                <!-- Logout: tetap form POST biasa, tidak perlu Vue -->
                                <form action="aksi_logout.php" method="POST" style="display:inline;">
                                    <button type="submit" class="btn-logout">Keluar</button>
                                </form>
                            </div>

                            <!--
                                Vue app di-mount pada #app-review.
                                @submit.prevent → AJAX ke aksi_tambah_review.php
                            -->
                            <form @submit.prevent="submitReview" novalidate>
                                <div class="reviews-field-group">
                                    <label class="reviews-label">Kesanmu di Tebing Lonceng</label>
                                    <textarea
                                        v-model="kesan"
                                        class="reviews-textarea"
                                        :class="{ 'is-invalid': showError }"
                                        placeholder="Tuliskan pengalamanmu di sini..."
                                        rows="4"
                                        @input="showError = false">
                                    </textarea>
                                    <p class="reviews-field-error" v-show="showError">Ulasan tidak boleh kosong.</p>
                                </div>
                                <button type="submit" class="btn-beranda" :disabled="loading">
                                    <span v-if="!loading">
                                        Kirim Cerita
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                        </svg>
                                    </span>
                                    <span v-else>Mengirim...</span>
                                </button>
                                <p class="reviews-feedback"
                                    v-show="feedback.show"
                                    :class="feedback.success ? 'reviews-feedback--success' : 'reviews-feedback--error'">
                                    {{ feedback.message }}
                                </p>
                            </form>
                        </div><!-- /#app-review -->

                        <?php else: ?>
                        <!-- ── STATE: BELUM LOGIN ── -->
                        <div id="panel-auth" class="reviews-panel reviews-panel--auth">

                            <?php if (isset($_SESSION['auth_error'])): ?>
                                <div class="reviews-alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                                    </svg>
                                    <?= htmlspecialchars($_SESSION['auth_error']) ?>
                                </div>
                                <?php unset($_SESSION['auth_error']); ?>
                            <?php endif; ?>

                            <p class="reviews-auth-hint">Silakan login terlebih dahulu untuk mulai berbagi cerita.</p>

                            <!-- Google Login Button -->
                            <div id="g_id_onload"
                                data-client_id="YOUR_GOOGLE_CLIENT_ID"
                                data-context="signin"
                                data-ux_mode="popup"
                                data-callback="handleGoogleLogin"
                                data-auto_prompt="false">
                            </div>
                            <div class="reviews-google-btn-wrap">
                                <div class="g_id_signin"
                                    data-type="standard"
                                    data-shape="pill"
                                    data-theme="filled_black"
                                    data-text="signin_with"
                                    data-size="large"
                                    data-logo_alignment="left">
                                </div>
                            </div>

                            <div class="reviews-divider"><span>atau masuk dengan email</span></div>

                            <!-- Form login → dikirim ke login.php -->
                            <form action="login.php" method="POST" class="reviews-email-form needs-validation" novalidate>
                                <div class="reviews-field-group">
                                    <label class="reviews-label">Email</label>
                                    <input type="email" name="email" class="reviews-input" placeholder="email@kamu.com" required>
                                </div>
                                <div class="reviews-field-group">
                                    <label class="reviews-label">Password</label>
                                    <input type="password" name="password" class="reviews-input" placeholder="Minimal 6 karakter" required minlength="6">
                                </div>
                                <p class="reviews-auth-hint" style="font-size:12px; margin-top:-4px;">Belum punya akun? Daftar otomatis saat kamu login pertama kali.</p>
                                <button class="btn-beranda" type="submit">
                                    Lanjutkan
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </button>
                            </form>

                        </div><!-- /#panel-auth -->
                        <?php endif; ?>

                    </div><!-- /reviews-form-panel -->
                </div><!-- /reviews-form-inner -->
            </div><!-- /reviews-form-area -->

            <!--
            ┌──────────────────────────────────────────────────────┐
            │  CAROUSEL ULASAN — dikendalikan sepenuhnya Vue.js    │
            └──────────────────────────────────────────────────────┘
            -->
            <div id="app-slider" class="review-carousel-wrapper" v-cloak>
                <h2 class="review-carousel-title">
                    Cerita dari <span style="font-size: 34px;font-family: instrument-serif, serif; font-style: italic;">Penjelajah Lainnya</span>
                </h2>
                <p class="review-carousel-sub">Apa kata mereka yang sudah merasakan Tebing Lonceng</p>

                <!-- Ada ulasan -->
                <template v-if="reviews.length > 0">
                    <div class="review-slider-area">
                        <button class="slider-arrow" @click="prev" aria-label="Sebelumnya">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>

                        <div class="review-slider">
                            <div
                                v-for="(review, index) in reviews"
                                :key="index"
                                class="review-card"
                                :class="{ active: index === currentIndex }">
                                <div class="review-head">
                                    <div class="review-avatar">{{ review.nama.charAt(0).toUpperCase() }}</div>
                                    <p class="review-name">{{ review.nama }}</p>
                                </div>
                                <p class="review">{{ review.kesan }}</p>
                            </div>
                        </div>

                        <button class="slider-arrow" @click="next" aria-label="Selanjutnya">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Dots indicator -->
                    <div class="review-dots">
                        <button
                            v-for="(review, index) in reviews"
                            :key="index"
                            class="review-dot"
                            :class="{ active: index === currentIndex }"
                            @click="goTo(index)">
                        </button>
                    </div>
                </template>

                <!-- Belum ada ulasan -->
                <div class="review-empty" v-else>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16" style="opacity:0.4; margin-bottom:12px;">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894"/>
                    </svg>
                    <p>Belum ada ulasan. Jadilah yang pertama berbagi!</p>
                </div>
            </div><!-- /#app-slider -->

        </section>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer>
        <div class="footer-main">
            <div class="footer-brand">
                <p class="footer-brand-name">Tebing Lonceng</p>
                <p class="footer-brand-tagline">
                    Melihat Samarinda dari perspektif yang tak terlupakan, di atas tebing dengan panorama Sungai Mahakam.
                </p>
                <span class="footer-brand-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>
                    Mangkupalas, Samarinda
                </span>
            </div>

            <div class="footer-links">
                <div class="footer-col">
                    <h4>Jelajahi</h4>
                    <ul>
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#fasilitas">Fasilitas</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Fasilitas</h4>
                    <ul>
                        <li><a href="#fasilitas">Spot Foto</a></li>
                        <li><a href="#fasilitas">Homestay</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Informasi</h4>
                    <ul>
                        <li><a href="https://maps.app.goo.gl/eKEawSRrjP1um7N37" target="_blank">Peta Lokasi</a></li>
                        <li><a href="#reviews">Ulasan Tamu</a></li>
                        <li><a href="#">Jam Operasional</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-cta">
                <p class="footer-cta-label">Ikuti Kami</p>
                <div class="footer-social">
                    <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm.003 1.44c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.919c-.109-.282-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.275.843-.039 1.097-.047 3.233-.047"/>
                            <path d="M8 10.93a2.929 2.929 0 1 1 0-5.858 2.929 2.929 0 0 1 0 5.858m0-7.44a4.51 4.51 0 1 0 0 9.02 4.51 4.51 0 0 0 0-9.02m5.785-.05a1.055 1.055 0 1 1-2.11 0 1.055 1.055 0 0 1 2.11 0"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/628xxxxxxxx" target="_blank" aria-label="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a>
                    <a href="https://maps.app.goo.gl/eKEawSRrjP1um7N37" target="_blank" aria-label="Google Maps">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copyright">© 2026 Wisata Tebing Lonceng. Hak cipta dilindungi.</p>
            <p class="footer-credit">Mangkupalas, Samarinda, Kalimantan Timur</p>
        </div>
    </footer>

    <!-- ===== SCRIPTS ===== -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vue.js 3 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>

    <!-- ── Vue App: Slider Ulasan ── -->
    <script>
    const { createApp } = Vue;

    // ── App 1: Review Carousel ──
    createApp({
        data() {
            return {
                reviews: <?= json_encode(array_values($reviews), JSON_UNESCAPED_UNICODE) ?>,
                currentIndex: 0
            }
        },
        methods: {
            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.reviews.length) % this.reviews.length;
            },
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.reviews.length;
            },
            goTo(i) {
                this.currentIndex = i;
            },
            // Dipanggil dari app-review setelah ulasan berhasil dikirim
            addReview(review) {
                this.reviews.unshift(review);
                this.currentIndex = 0;
            }
        }
    }).mount('#app-slider');

    <?php if (isset($_SESSION['user_id'])): ?>
    // ── App 2: Form Kirim Ulasan (hanya mount saat login) ──
    createApp({
        data() {
            return {
                kesan: '',
                loading: false,
                showError: false,
                feedback: { show: false, success: false, message: '' }
            }
        },
        methods: {
            async submitReview() {
                if (!this.kesan.trim()) {
                    this.showError = true;
                    return;
                }
                this.loading = true;
                this.feedback.show = false;

                try {
                    const res = await fetch('aksi_tambah_review.php', {
                        method: 'POST',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        body: new URLSearchParams({ kesan: this.kesan })
                    });

                    const data = await res.json();

                    if (data.success) {
                        // Tambahkan ke slider secara reaktif
                        const sliderApp = document.getElementById('app-slider').__vue_app__;
                        if (sliderApp) {
                            sliderApp._context.app.config.globalProperties.$addReview?.(data.review);
                        }

                        // Update slider lewat custom event
                        document.dispatchEvent(new CustomEvent('review-added', { detail: data.review }));

                        this.kesan = '';
                        this.feedback = { show: true, success: true, message: 'Ulasan berhasil dikirim! Terima kasih 🎉' };
                    } else {
                        this.feedback = { show: true, success: false, message: data.message };
                    }
                } catch (err) {
                    this.feedback = { show: true, success: false, message: 'Terjadi kesalahan. Silakan coba lagi.' };
                }

                this.loading = false;
            }
        }
    }).mount('#app-review');
    <?php endif; ?>
    </script>

    <!-- ── Script: Hamburger Menu ── -->
    <script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const navMenu = document.getElementById('navMenu');
    hamburgerBtn.addEventListener('click', () => navMenu.classList.toggle('open'));
    navMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => navMenu.classList.remove('open'));
    });
    </script>

    <!-- ── Script: Active Nav saat Scroll ── -->
    <script>
    const sections  = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('nav ul li a');

    function setActiveNav() {
        let current = '';
        sections.forEach(section => {
            if (window.scrollY >= section.offsetTop - 100) current = section.getAttribute('id');
        });
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
        });
    }

    navLinks.forEach(link => {
        link.addEventListener('click', e => {
            if (link.getAttribute('href') === '#beranda') {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    });

    window.addEventListener('scroll', setActiveNav);
    setActiveNav();
    </script>

    <!-- ── Script: Scroll Reveal ── -->
    <script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

    <!-- ── Script: Accordion + Reveal ── -->
    <script>
    document.querySelectorAll('.accordion-collapse').forEach(collapse => {
        collapse.addEventListener('shown.bs.collapse', () => {
            const el = collapse.querySelector('.reveal');
            if (el) { el.classList.remove('visible'); setTimeout(() => el.classList.add('visible'), 10); }
        });
        collapse.addEventListener('hide.bs.collapse', () => {
            const el = collapse.querySelector('.reveal');
            if (el) el.classList.remove('visible');
        });
    });
    </script>

    <!-- ── Script: Bootstrap Form Validation ── -->
    <script>
    document.querySelectorAll('.needs-validation').forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                form.querySelectorAll('input, textarea').forEach(field => {
                    field.classList.toggle('is-invalid', field.value.trim() === '');
                    field.classList.toggle('is-valid', field.value.trim() !== '');
                });
            }
        });
    });

    document.querySelectorAll('.needs-validation input, .needs-validation textarea').forEach(field => {
        field.addEventListener('input', () => {
            field.classList.toggle('is-valid', field.value.trim() !== '');
            field.classList.toggle('is-invalid', field.value.trim() === '');
        });
    });
    </script>

</body>
</html>