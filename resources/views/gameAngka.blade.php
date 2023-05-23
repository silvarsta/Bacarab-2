@extends('layout.maingame')
@section('title', 'BACARAB | GameAngka')

@section('content')

    <!-- ======= GAME ======= -->
    <section id="games" class="games section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>GAMES ANGKA</h2>
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
                            <div class="portfolio-img"><img src="assets/img/game-2.png" class="img-fluid" alt="">
                            </div>
                            <h4 class="mt-5">Mengenal Angka dalam Bahasa Arab Lewat Game</h4>
                            <p class="mb-4">sebuah game edukatif yang didesain untuk membantu pengguna dalam memahami dan
                                menguasai angka dalam
                                bahasa
                                Arab dengan mudah dan menyenangkan.</p>
                            <a class="whiteAnchor" href="/bermainGameAngka"><button class="tombol tombol-primer">
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
                            <a class="popup-youtube" href="https://youtu.be/v79WOD7ITNo" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-angka.png"
                                        alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div>
            </div>
        </div>
    </div>
    <!-- end of video -->

    <!-- ======= Printable Section ======= -->
    <section id="printable" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Printable</h2>
                <p>Gambar yang bisa kamu print untuk mempermudahmu dalam belajar ataupun latihan Bahasa Arab</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($printableAngka as $printableAngka)
                    <div class="col-lg-4 col-md-12  portfolio-item filter-app">
                        <div class="portfolio-img">
                            <a href="{{ asset('assets/img/printable/' . $printableAngka->gambar) }}" download onclick="return confirm('Apakah Anda yakin ingin mendoenload paper ini?')">
                            <img src="{{ asset('assets/img/printable/' . $printableAngka->gambar) }}"
                                class="img-fluid" height="500" width="300" alt="{{ $printableAngka->src_gambar }}"></a>
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
                @forelse ($kamusAngka as $kamusAngka)
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets/img/kamus/' . $kamusAngka->gambar) }}"
                                    alt="" class="img-fluiid"><br>
                                    <h5 style="margin-left: 15px; margin-top:10px;"><b>{{ $kamusAngka->indonesia }}</b></h5>
                            </div>
                            <div class="kata">
                                <h1 style="margin-top:10px;">{{ $kamusAngka->arab }}<br></h1>
                                <p>"{{ $kamusAngka->pelafalan }}"</p>
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
