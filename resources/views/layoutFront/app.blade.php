<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cafe Information</title>
    <meta name="description" content="CafeInformationWebBalikpapan" />
    <meta name="author" content="AmandaZanetaHakim" />

    <!-- Favicons -->
    <link href="{{ asset('assetsFront/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assetsFront/img/log2.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsFront/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFront/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFront/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFront/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFront/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFront/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFront/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsFront/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">

        <div class="container d-flex align-items-center justify-content-lg-between">

            {{-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ url('') }}" class="logo me-auto me-lg-0"><img
                    src="{{ asset('assetsFront/img/logo.png') }}" alt="CafeCityGuide" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#cafes">Cafes</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#about" class="get-started-btn scrollto">Get Started</a>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
                    <h2>We are team of talented digital marketers</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="">Lorem Ipsum</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3><a href="">Dolor Sitema</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Sedare Perspiciatis</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line"></i>
                        <h3><a href="">Magni Dolores</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-database-2-line"></i>
                        <h3><a href="">Nemos Enimade</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('assetsFront/img/about.png') }}" class="img-fluid" alt=""
                            style="width: 80%">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>CafeCityGuide.</h3>
                        <p class="fst-italic">
                            Balikpapan.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i><strong>Pengantar Bisnis</strong>: Cafe City Guide
                                berasal dari ide untuk menjadi panduan bagi pengguna yang mencari informasi seputar kafe
                                di Balikpapan.</li>
                            <li><i class="ri-check-double-line"></i><strong>Misi dan Visi</strong>: Cafe City Guide
                                memiliki misi utama untuk mendukung para pelaku UMKM dalam menjalankan bisnis kafe
                                mereka.</li>
                            <li><i class="ri-check-double-line"></i><strong>Strategi dan Kolaborasi</strong>: Cafe City
                                Guide berencana untuk menjalankan program kemitraan dengan para pelaku lokal yang dapat
                                mendukung operasional bagi para mitra Cafe City Guide.</li>
                        </ul>
                        <p>
                            Cafe City Guide bertujuan menjadi panduan komprehensif bagi pencari informasi seputar kafe
                            di Balikpapan, dengan misi utama mendukung pertumbuhan bisnis kopi sebagai UMKM melalui
                            program kemitraan yang menyediakan pembinaan dan dukungan operasional.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <!-- ======= Cafes Section ======= -->
        <section id="cafes" class="cafes">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Cafes Section -->

        <!-- ======= Cta Section ======= -->
        <!-- ======= Ajakan Pendaftaran Cafe ke Web Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">
                    @foreach ($Team as $x)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    @php
                                        $userImage = $x->image; // Get user image or set to null if not available
                                        $imagePath = asset('storage/uploads/' . $userImage);
                                        $defaultImagePath = asset('assetsFront/img/team/team-5.png');

                                        // Check if the image path is valid
                                        $imageExists = $userImage !== null && file_exists(public_path('storage/uploads/' . $userImage));
                                    @endphp
                                    <img src="{{ $imageExists ? $imagePath : $defaultImagePath }}" class="img-fluid"
                                        alt="{{ $x->username }}">
                                    @if ($x->ig !== null || $x->ln !== null)
                                        <div class="social">
                                            @if ($x->ig !== null)
                                                <a href="{{ $x->ig }}" target="_blank"><i
                                                        class="bi bi-instagram"></i></a>
                                            @endif
                                            @if ($x->ln !== null)
                                                <a href="{{ $x->ln }}" target="_blank"><i
                                                        class="bi bi-linkedin"></i></a>
                                            @endif
                                        </div>
                                    @endif

                                </div>
                                <div class="member-info">
                                    <h4>{{ $x->name }}</h4>
                                    <span>{{ $x->nim }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>CafeCityGuide<span>.</span></h3>
                            <p>
                                Jalan Soekarno-Hatta km. 15 <br>
                                Karang Joang, Balikpapan<br><br>
                                <strong>Email:</strong> 00000001@student.itk.ac.id<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#cafes">Cafes</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Maps</h4>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0143481354835!2d116.86018617408378!3d-1.1502410988387417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14961e12f5cb5%3A0xec00689092466879!2sInstitut%20Teknologi%20Kalimanatan%2C%20Karang%20Joang%2C%20Kec.%20Balikpapan%20Utara%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1701069629857!5m2!1sid!2sid"
                                style="border:0; width: 100%; height: 270px;" allowfullscreen loading="lazy"
                                frameborder="0" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright"><strong><span>CafeCityGuide</span></strong>. All Rights Reserved 2023
            </div>
        </div>
    </footer><!-- End Footer -->

    {{-- <div id="preloader"></div> --}}
    <a href="{{ url('#') }}" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsFront/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetsFront/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assetsFront/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetsFront/js/main.js') }}"></script>

</body>

</html>
