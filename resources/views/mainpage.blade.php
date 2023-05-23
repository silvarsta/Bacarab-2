@extends('layout.mainmaster')
@section('title', 'BACARAB | MAINPAGE')

@section('content')
    <!-- ======= Content Section ======= -->
    <section id="content" class="content section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="assets/img/apaaja5.jpg" class="img-fluid" alt=""></div>
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
                        <div class="pic"><img src="assets/img/apaaja4.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4><a href="#content">Kosa Kata Arab</a></h4>
                            <p>Kamus mini berisi kosa kata dalam bahasa Arab yang mudah dipahami</p>
                            <div class="social">
                                <i></i> <i></i> <i></i> <i></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/apaaja7.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4><a href="#video">Video Belajar</a></h4>
                            <p>Disini juga ada video video animasi seru yang menyenangkan</p>
                            <div class="social">
                                <i></i> <i></i> <i></i> <i></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 ">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/apaaja8.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4><a href="#content">Printable</a></h4>
                            <p>Kumpulan latihan yang dapat dicetak untuk mempermudah latihan</p>
                            <div class="social">
                                <i></i> <i></i> <i></i> <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= GAME ======= -->
    <section id="games" class="games section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>GAMES</h2>
                <p>"Selamat datang di section game, tempat di mana kamu dapat belajar bahasa Arab dengan cara yang
                    menyenangkan dan
                    interaktif. Nikmati berbagai permainan yang telah kami sediakan untuk membantumu menguasai kosakata,
                    tata
                    bahasa,
                    dan konsep bahasa Arab dengan mudah. Selamat belajar dan selamat bermain!"</p>
            </div>

            <div class="row">
                <div class="isi col-xl-4 col-md-6 d-flex align-items-stretch mx-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <div class="portfolio-img"><img src="assets/img/game-1a.png" class="img-fluid" alt=""></div>
                        <h4 class="mt-2"><a href="/gameHuruf">Game Seru Belajar Mengenal Huruf Hijaiyah</a></h4>
                        <p>merupakan game yang membantumu untuk mengenal dan menguasai huruf hijaiyah. yaitu alfabet yang
                            digunakan
                            dalam penulisan bahasa Arab dan juga menjadi dasar dalam membaca Al-Qur'an. </p>
                        <div class="buttongame mt-4">
                            <center><a href="/gameHuruf" id="btn-parall">Lets Goww</a></center>
                        </div>
                    </div>
                </div>

                <div class="isi col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mx-3   " data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <div class="portfolio-img"><img src="assets/img/game-2.png" class="img-fluid" alt="">
                        </div>
                        <h4 class="mt-5"><a href="/gameAngka">Mengenal Angka dalam Bahasa Arab Lewat Game </a></h4>
                        <p>sebuah game edukatif yang didesain untuk membantu pengguna dalam memahami dan menguasai angka
                            dalam bahasa
                            Arab dengan mudah dan menyenangkan.</p>
                        <div class="buttongame mt-4">
                            <center><a href="/gameAngka" id="btn-parall">Lets Goww</a></center>
                        </div>
                    </div>
                </div>

                <div class="isi col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 mx-3" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <div class="portfolio-img"><img src="assets/img/game-3.png" class="img-fluid" alt="">
                        </div>
                        <h4 class="mt-5"><a href="/gameKata">Petualangan Kosakata Bahasa Arab dalam Game</a></h4>
                        <p>Ini didesain untuk membantu pengguna dalam memperkaya kosakata mereka dalam bahasa Arab dengan
                            cara yang menyenangkan dan interaktif</p>
                        <div class="buttongame mt-4">
                            <center><a href="/gameKata" id="btn-parall">Lets Goww</a></center>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End games Section -->

    <!-- Video -->
    <div class="video basic-4" id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video</h2>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://youtu.be/-HOwmJLa5BI" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-index.png"
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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>If you have any problems with this website. Please, let us to know.</p>
            </div>

            <div class="row">
                <center>
                    <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('main.store') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" id="subject" required>
                                @error('subject')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="5" required> </textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection
