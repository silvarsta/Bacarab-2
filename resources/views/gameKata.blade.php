@extends('layout.maingame')
@section('title', 'BACARAB | GameKata')

@section('content')


    <!-- ======= GAME ======= -->
    <section id="games" class="games section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title ,t-4">
                <h2>GAMES KATA</h2>
                Syubbaakun <p>"Selamat datang di section game, tempat di mana kamu dapat belajar bahasa Arab dengan cara
                    yang
                    menyenangkan dan
                    interaktif. Nikmati berbagai permainan yang telah kami sediakan untuk membantumu menguasai
                    kosakata, tata
                    bahasa,
                    dan konsep bahasa Arab dengan mudah. Selamat belajar dan selamat bermain!" <br><br><br></p>
            </div>
            <center>
                <div class="isi col-xl-7 col-md-12 d-flex align-items-stretch mt-4 mt-xl-0 mx-3" data-aos="zoom-in"
                    data-aos-delay="300">
                    <center>
                        <div class="icon-box">
                            <div class="portfolio-img"><img src="assets/img/game-3.png" class="img-fluid" alt="">
                            </div>
                            <h4 class="mt-5">Petualangan Kosakata Bahasa Arab dalam Game</h4>
                            <p class="mb-4">Ini didesain untuk membantu pengguna dalam memperkaya kosakata mereka dalam
                                bahasa
                                Arab dengan cara yang menyenangkan dan interaktif</p>
                            <button class="tombol tombol-primer mt-4">
                                <h5 class="mt-2"><a class="whiteAnchor" href="/bermainGameKata">Klik Untuk Bermain</a>
                                </h5>
                            </button>
                        </div>
                </div>
        </div>
    </section>
    <!-- End Game Section -->

    <style>
        .whiteAnchor {
            color: #fff
        }

        .tombol {
            display: inline-block;
            padding: 5px 10px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .tombol-primer {
            background-color: #55f4ff;
            color: #fff;
        }

        .tombol-primer:hover {
            background-color: #4bc8f9;
            color: #fff
        }
    </style>

    <!-- Video -->
    <div class="basic-4" id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video</h2>
                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://youtu.be/c-4l5mUovgU" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-kata1.png"
                                        alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <!-- Video Preview -->
                    <div class="image-container mt-5">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://youtu.be/XVwrVHruHyE" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-kata2.png"
                                        alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end of video -->

    <!-- ======= Portfolio Section ======= -->
    <section id="printable" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Printable</h2>
                <p>Gambar yang bisa kamu print untuk mempermudahmu dalam belajar ataupun latihan Bahasa Arab</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($printableKata as $printableKata)
                    <div class="col-lg-4 col-md-12  portfolio-item filter-app">
                        <div class="portfolio-img">
                            <a href="{{ asset('assets/img/printable/' . $printableKata->gambar) }}" download
                                onclick="return confirm('Apakah Anda yakin ingin mendoenload paper ini?')">
                                <img src="{{ asset('assets/img/printable/' . $printableKata->gambar) }}" class="img-fluid"
                                    height="500" width="300" alt="{{ $printableKata->src_gambar }}"></a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

        </div>
    </section>
    <!-- End Printable Section -->

    <!-- Bagian Kamus -->
    <section id="kamus" class="kamus section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kamus</h2>
                <p>---</p>
            </div>
            <div class="row">
                @forelse ($kamusKata as $kamusKata)
                    <div class="col-lg-3 col-md-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets/img/kamus/' . $kamusKata->gambar) }}"
                                    alt="" class="img-fluiid"><br>{{ $kamusKata->indonesia }}
                            </div>
                            <div class="kata">
                                <h1>{{ $kamusKata->arab }}<br></h1>
                                <p>"{{ $kamusKata->pelafalan }}"</p>
                            </div>

                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Bagian Kamus -->

@endsection
