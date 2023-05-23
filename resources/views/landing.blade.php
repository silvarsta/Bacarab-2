<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BACARAB | Landing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon/logo1.ico" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">BACARAB</h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li><a class="nav-link scrollto" href="#content">Content</a></li>
                    <li><a class="nav-link scrollto" href="#games">Games</a></li>
                    <li><a class="nav-link scrollto" href="#started">Video</a></li>
                    <li><a class="nav-link scrollto" href="#faq">Question</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li class="mx-4"><a class="started scrollto" href="{{ route('loginreg') }}">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main id="main">
        {{-- PARALLAX SCROLLING --}}
        <section class="section-parall">
            <img src="assets/img/bg5-parall.png" alt="" id="bgparall">
            <img src="assets/img/awanfiks1.png" alt="" id="awan1">
            <img src="assets/img/awanfiks2.png" alt="" id="awan2">
            <img src="assets/img/awanfiks4.png" alt="" id="awan4">
            <img src="assets/img/awanfiks3.png" alt="" id="awan3">
            <img src="assets/img/astro-parall.png" alt="" id="astro" style="justify-content: flex-end;">
            <h2 id="text-parall"><span class="span-parall">
                    Temukan keseruan dalam belajar bahasa Arab disini
                </span><br>Ready, set, lets head out !</h2>
            <a href="{{ route('loginreg') }}" id="btn-parall" style="padding-left: 27px;">Get Started</a>
            <img src="assets/img/book-parall.png" alt="" id="buku">
            <script>
                let text = document.getElementById('text-parall');
                let button = document.getElementById('btn-parall');
                let awan1 = document.getElementById('awan1');
                let awan2 = document.getElementById('awan2');
                let awan3 = document.getElementById('awan3');
                let awan4 = document.getElementById('awan4');
                let astro = document.getElementById('astro');
                let buku = document.getElementById('buku');
                let bg = document.getElementById('bgparall');

                window.addEventListener('scroll', () => {
                    let value = window.scrollY;

                    astro.style.top = value * -0.8 + 'px';
                    astro.style.left = value * -1.5 + 'px';
                    awan1.style.left = value * 1.5 + 'px';
                    awan1.style.top = value * 0.8 + 'px';

                    awan2.style.left = value * 1.5 + 'px';

                    awan3.style.left = value * -1.5 + 'px';

                    awan4.style.left = value * -1.5 + 'px';
                    awan4.style.top = value * 0.8 + 'px';

                    bg.style.marginTop = value * 1 + 'px';
                });
            </script>
        </section>

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3><strong>Belajar Bahasa Arab untuk Anak</strong></h3>
                            <p>
                                Dengan belajar bahasa Arab mereka akan memiliki kesempatan
                                untuk mempelajari budaya Arab dan memahami keunikan dan keindahan dari bahasa tersebut.
                                <br>Alasan mengapa harus mempelajari bahasa Arab :
                            </p>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed"
                                        data-bs-target="#accordion-list-1"><span>01</span>
                                        Bahasa Arab memiliki karya-karya sastra dan sejarah yang penting <i
                                            class="bx bx-chevron-down icon-close"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Banyak karya-karya sastra, sejarah, dan keilmuan yang berasal dari dunia
                                            Arab yang sangat penting
                                            untuk dipelajari. Dengan mempelajari bahasa Arab, anak-anak dapat memperoleh
                                            pengetahuan tentang
                                            budaya Arab dan sejarah perkembangan Islam.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span>
                                        Pengembangan Kemampuan Berpikir, Kreativitas, dan Daya Ingat <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-down icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Bahasa Arab memiliki sistem tata bahasa yang kompleks dan kaya, sehingga
                                            dapat membantu dalam
                                            pengembangan
                                            keterampilan berpikir logis dan analitis. Anak-anak juga akan dilatih dalam
                                            membaca dan menulis
                                            huruf Arab,
                                            yang dapat meningkatkan kemampuan mereka dalam mengekspresikan diri secara
                                            tertulis.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span>
                                        Kebutuhan Bahasa Arab dalam Era Globalisasi <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Kebutuhan akan orang yang mampu berbahasa Arab semakin meningkat, sehingga
                                            mempelajari bahasa Arab
                                            sejak usia dini dapat memberikan keuntungan besar bagi masa depan anak-anak.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/kids.png");' data-aos="zoom-in"
                        data-aos-delay="150">
                        &nbsp;</div>
                </div>

            </div>
            <!-- ======= Content Section ======= -->
            <section id="content" class="content section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic"><img src="assets/img/apaaja5.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4><a href="#games">Games</a></h4>
                                    <p>Game - game seru untuk belajar Bahasa Arab dengan mudah</p>
                                    <div class="social">
                                        <i></i> <i></i> <i></i> <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                                <div class="pic"><img src="assets/img/apaaja4.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4><a href="">Kosa Kata Arab</a></h4>
                                    <p>Kamus mini berisi kosa kata dalam bahasa Arab yang mudah dipahami</p>
                                    <div class="social">
                                        <i></i> <i></i> <i></i> <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                                <div class="pic"><img src="assets/img/apaaja7.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4><a href="#started">Video Belajar</a></h4>
                                    <p>Disini juga ada video video animasi seru yang menyenangkan</p>
                                    <div class="social">
                                        <i></i> <i></i> <i></i> <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 ">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                                <div class="pic"><img src="assets/img/apaaja8.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4><a href="">Printable</a></h4>
                                    <p>Kumpulan latihan yang dapat dicetak untuk mempermudah latihan</p>
                                    <div class="social">
                                        <i></i> <i></i> <i></i> <i></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Content Section -->

        </section><!-- End Why Us Section -->

        <!-- ======= GAME ======= -->
        <section id="games" class="games section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>GAMES</h2>
                    <p>"Selamat datang di section game, tempat di mana kamu dapat belajar bahasa Arab dengan cara yang
                        menyenangkan dan
                        interaktif. Nikmati berbagai permainan yang telah kami sediakan untuk membantumu menguasai
                        kosakata, tata
                        bahasa,
                        dan konsep bahasa Arab dengan mudah. Selamat belajar dan selamat bermain!"</p>
                </div>

                <div class="row">
                    <div class="isi col-xl-4 col-md-6 d-flex align-items-stretch mx-3" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <div class="portfolio-img"><img src="assets/img/game-1a.png" class="img-fluid"
                                    alt=""></div>
                            <h4 class="mt-5"><a href="#"
                                    onclick="alert('Anda Harus Log In Terlebih Dahulu!')">Game Seru Belajar Mengenal
                                    Huruf Hijaiyah</a>
                            </h4>
                            <p>merupakan game yang membantumu untuk mengenal dan menguasai huruf hijaiyah. yaitu alfabet
                                yang
                                digunakan dalam penulisan bahasa Arab dan juga menjadi dasar dalam membaca Al-Qur'an.
                            </p>
                        </div>
                    </div>

                    <div class="isi col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mx-3   "
                        data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <div class="portfolio-img"><img src="assets/img/game-2.png" class="img-fluid"
                                    alt=""></div>
                            <h4 class="mt-5"><a href="#"
                                    onclick="alert('Anda Harus Log In Terlebih Dahulu!')">Mengenal Angka dalam Bahasa
                                    Arab Lewat Game </a></h4>
                            <p>sebuah game edukatif yang didesain untuk membantu pengguna dalam memahami dan menguasai
                                angka dalam bahasa Arab dengan mudah dan menyenangkan.</p>
                        </div>
                    </div>

                    <div class="isi col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 mx-3" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <div class="portfolio-img"><img src="assets/img/game-3.png" class="img-fluid"
                                    alt=""></div>
                            <h4 class="mt-5"><a href="#"
                                    onclick="alert('Anda Harus Log In Terlebih Dahulu!')">Petualangan Kosakata Bahasa
                                    Arab dalam Game</a></h4>
                            <p>Ini didesain untuk membantu pengguna dalam memperkaya kosakata mereka dalam bahasa Arab
                                dengan cara yang menyenangkan dan interaktif</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End games Section -->

        <!-- Hero section -->
        <section id="started" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate"
                        data-aos="fade-up" data-aos-delay="200">
                        <h1>Yuk, belajar Bahasa Arab!!</h1>
                        <h2>Dengan game yang asik dan materi belajar yang seru, kamu akan mudah menguasai bahasa Arab.
                            Daftar
                            sekarang dan kita bisa belajar sambil bermain bersama!</h2>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="{{ route('loginreg') }}" class="btn-get-started scrollto">Get Started</a>
                            <a href="https://youtu.be/yIz9Xns4Dmo&start=49" target="_blank"
                                class="glightbox btn-watch-video">
                                <i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 started-img aos-init aos-animate" data-aos="zoom-in"
                        data-aos-delay="200">
                        <img src="assets/img/hero-kids.png" class="img-fluid animated mx-5" alt=""
                            >
                    </div>
                </div>
            </div>

        </section>
        <!-- End Hero Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pertanyaan yang sering ditanyakan</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Bagaimana cara memulai belajar bahasa Arab di website
                                ini?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Untuk memulai belajar bahasa Arab di website ini, pengunjung dapat mengakses materi
                                    yang
                                    tersedia langsung dari halaman utama website dengan mendaftar atau membuat akun
                                    terlebih dahulu.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Bagaimana cara menghubungi tim
                                pendukung atau pengelola website ini?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Bagaimana cara menghubungi tim pendukung atau pengelola website ini? Pengguna dapat
                                    menghubungi tim
                                    pendukung atau pengelola website ini melalui formulir kontak yang tersedia di
                                    halaman website atau
                                    melalui email yang tertera di website.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Apa materi yang tersedia di website
                                ini? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>Website ini menyediakan materi belajar bahasa Arab untuk anak-anak, seperti mengenal
                                    huruf
                                    dalam bahasa arab, mengenal angka dalam bahasa arab, kosakata,
                                    dan pengucapan dasar.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section><!-- End Frequently Asked Questions Section -->


        {{-- Know Us --}}
        <div class="about section-bg" id="about">
            <div class="container" data-aos="fade-up">
                <div class="title-about">
                    <h2>About Develop</h2>
                    <p>Website ini dikembangkan oleh sebuah tim yang terdiri dari 4 orang dengan keahlian masing-masing.
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="isi col col-md-6 mb-5 mx-2"style="width:280px;"data-aos="zoom-in" data-aos-delay="100">
                        <div class="img-about mb-5">
                            <img src="assets/img/Ridho.jpg" alt="">
                        </div>
                        <h4>Muhammad Syifa Ridhoni</h4>
                        <p>Game Developer</p>
                    </div>

                    <div class="isi col col-md-6 mb-5 mx-2"style="width:280px;"data-aos="zoom-in" data-aos-delay="100">
                        <div class="img-about mb-5">
                            <img src="assets/img/Silva.jpg" alt="">
                        </div>
                        <h4>Silvana Ovarista</h4>
                        <p>Front-End Developer</p>
                    </div>
                    <div class="isi col col-md-6 mb-5 mx-2"style="width:280px;"data-aos="zoom-in" data-aos-delay="100">
                        <div class="img-about mb-5">
                            <img src="assets/img/Talitha.jpg" alt="">
                        </div>
                        <h4>Talitha Najwa Afifah</h4>
                        <p>Script Writer</p>
                    </div>
                    <div class="isi col col-md-6 mb-5 mx-2"style="width:280px;"data-aos="zoom-in" data-aos-delay="100">
                        <div class="img-about mb-5">
                            <img src="assets/img/Victor.jpg" alt="">
                        </div>
                        <h4>Victory Kuriakos</h4>
                        <p>Back-End Developer</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>BACARAB</h3>
                        <p>
                            University of Malang <br>
                            Jl. Semarang no.9<br>
                            Malang <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4>Back To</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#content">Content</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#games">Games</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#started">Video</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#faq">Question</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>BACARAB</span></strong> | All Rights Reserved
            </div>


        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi fa fa-arrow-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>


<!-- DITAMBAHI PRINTABLES PAGE  -->
<!-- ISINYA GAMBAR2 UNTUK DI PRINT SEBAGAI BAHAN LATIHAN -->
