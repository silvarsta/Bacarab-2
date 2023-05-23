@extends('layout.maingame')
@section('title', 'BACARAB | GameHuruf')

@section('content')
    <!-- ======= GAME ======= -->
    <section id="games" class="games section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>GAMES HURUF</h2>
                <p>"Selamat datang di section game, tempat di mana kamu dapat belajar bahasa Arab dengan cara yang
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
                            <div class="portfolio-img"><img src="assets/img/game-1a.png" class="img-fluid" alt="">
                            </div>
                            <h4 class="mt-5">Game Seru Belajar Mengenal Huruf Hijaiyah</h4>
                            <p class="mb-4">merupakan game yang membantumu untuk mengenal dan menguasai huruf hijaiyah. yaitu alfabet
                                yang digunakan dalam penulisan bahasa Arab dan juga menjadi dasar dalam membaca Al-Qur'an.
                            </p>
                            <a class="whiteAnchor" href="/bermainGameHuruf"><button class="tombol tombol-primer">
                                    <h5 class="mt-2">Klik Untuk Bermain</h5>
                                </button></a>
                        </div>
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
            background-color: #2BA4D3;
            color: #fff;
        }

        .tombol-primer:hover {
            background-color: #207394;
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
                            <a class="popup-youtube" href="https://youtu.be/4X6RN-PYq2w" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-huruf.png"
                                        alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of video -->

    <!-- ======= Printable Section ======= -->
    <section id="printable" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Printable</h2>
                <p>Gambar yang bisa kamu print untuk mempermudahmu dalam belajar ataupun latihan Bahasa Arab</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($printableHuruf as $printableHuruf)
                <div class="col-lg-4 col-md-12  portfolio-item filter-app">
                    <div class="portfolio-img">
                        <a href="{{ asset('assets/img/printable/' . $printableHuruf->gambar) }}" download onclick="return confirm('Apakah Anda yakin ingin mendoenload paper ini?')">
                        <img src="{{ asset('assets/img/printable/' . $printableHuruf->gambar) }}"
                            class="img-fluid" height="500" width="300" alt="{{ $printableHuruf->src_gambar }}"></a>
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
                @forelse ($kamusHuruf as $kamusHuruf)
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets/img/kamus/' . $kamusHuruf->gambar) }}"
                                    alt="" class="img-fluiid"><br>
                                    <h5 style="margin-left: 15px; margin-top:14px;"><b>{{ $kamusHuruf->indonesia }}</b></h5>

                            </div>
                            <div class="kata">
                                <h3 class="mt-4">'{{ $kamusHuruf->pelafalan }}'</h3>
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
