<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Perpustakaan SMK N 2 Pengasih</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('img/stewa.png')}}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="landing-page/css/animate.css ">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="landing-page/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="landing-page/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="landing-page/css/LineIcons.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="landing-page/css/font-awesome.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="landing-page/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="landing-page/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="landing-page/css/style.css">
    <link href="search/css/main.css" rel="stylesheet" />

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/"><img class="logo-icon mr-2"
                                    src="{{asset('img/stewa.png')}}" alt="logo" style="width:100px;"><span
                                    class="logo-text">SMK N 2 Pengasih</span></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#jumlah">Jumlah Buku</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="page-scroll" href="#kategori">Kategori</a>
                                        <!-- <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item text-dark text-center" href="/fiksi">Fiksi</a>
                                            <a class="dropdown-item text-dark text-center" href="/non-fiksi">Non
                                                Fiksi</a>
                                            <a class="dropdown-item text-dark text-center" href="/komik">Komik</a>
                                        </div> -->
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#berita">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Follow Us</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(landing-page/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Ayo Membaca !</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Segera Kunjungi ke Perpustakaan SMK N 2 Pengasih</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s"
                                style="font-size:25px">Pencarian Buku Baru Perpustakaan SMK N 2 Pengasih</p>
                            <div class="s003">
                                <form id="formSearch" method="get" action="/cari" enctype="multipart/form-data">
                                    <div class="inner-form">
                                        <div class="input-field first-wrap">
                                            <div class="input-select">
                                                <select data-trigger="" id="chKategori" name="chKategori">
                                                    <option placeholder="">Kategori</option>
                                                    <option value=2>Non Fiksi</option>
                                                    <option value=3>Fiksi</option>
                                                    <option value=1>Komik</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field second-wrap">
                                            <input id="search" type="text" name="title"
                                                style="font-family:Poppins, sans serif"
                                                placeholder="Judul Buku/Penulis" />
                                        </div>
                                        <div class="input-field third-wrap">
                                            <button class="btn-search" type="submit">
                                                <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true"
                                                    data-prefix="fas" data-icon="search" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a> -->
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1.4s">
                            <img src="landing-page/images/read-book2.svg" alt="hero" style="width:500px">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--Coba 1-->
    <section id="jumlah" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content text-center">
                            <div class="section-title">
                                <div class="line m-auto"></div>
                                <h3 class="title">Jumlah Buku Baru yang Tersedia</span></h3>
                            </div> <!-- section title -->
                            <p class="text">Berikut data jumlah buku yang tersedia di Perpustakaan SMK N 2 Pengasih</p>
                        </div> <!-- counter content -->
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <div
                                        class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                        <div class="counter-items text-center">
                                            <span class="count"><span class="counter">{{$nonFiksi->count()}}</span>
                                                <p class="text">Non Fiksi</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-4">
                                    <div
                                        class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                        <div class="counter-items text-center">
                                            <span class="count"><span class="counter">{{$fiksi->count()}}</span>
                                                <p class="text">Fiksi</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-4">
                                    <div
                                        class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                        <div class="counter-items text-center">
                                            <span class="count"><span class="counter">{{$komik->count()}}</span>
                                                <p class="text">Komik</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- counter wrapper -->
            </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--End Coba 1-->
    <!--====== KATEGORI PART START ======-->
    <section id="kategori" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Buku adalah Jendela Dunia, <span>Ayo temukan buku-buku terbaru</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="landing-page/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="landing-page/images/services-shape-1.svg" alt="shape">
                            <i class="lni-graduation"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Non Fiksi</a></h4>
                            <p class="text">Buku berkaitan dengan pembelajaran dan ilmu pengetahuan</p>
                            <a class="more" href="/non-fiksi">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="landing-page/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="landing-page/images/services-shape-2.svg" alt="shape">
                            <i class="lni-thought"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Fiksi</a></h4>
                            <p class="text">Buku mengenai cerita atau karangan seperti novel atau buku cerita </p>
                            <a class="more" href="/fiksi">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="landing-page/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="landing-page/images/services-shape-3.svg" alt="shape">
                            <i class="lni-gallery"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Komik</a></h4>
                            <p class="text">Buku komik bergambar</p><br>
                            <a class="more" href="/komik">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== KATEGORI PART ENDS ======-->

    <!--============ BERITA =============-->
    <section id="berita" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Berita Perpustakaan</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                @foreach($berita as $b)
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="blog-image">
                                @if($b->file)
                                <img src="{{url('data_file/'. $b->file)}}" alt="image" style="height:150px"/>
                                @else
                                <img src="{{url('images/buku/default.png')}}" alt="image"/>
                                @endif
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text ellipsis">{{$b->keterangan}}</p>
                        </div>
                        <div class="services-content mt-4 mb-4 text-center">
                            <a class="more" href="/detail-berita/{{$b->id}}">Learn More  <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                @endforeach
            </div>
        </div> <!-- container -->
    </section>
    <!--========== END BERITA ===========-->

    <!--====== FOOTER PART START ======-->

    <footer id="contact" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Ikuti terus info dari perpustakaan<span>dengan mengikuti channel
                                    telegram berikut</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="subscribe-form mt-50">
                            <a href="https://t.me/perpustewa"><img src="/landing-page/images/telegram.svg" alt="telegram" style="width:100px"></a>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="/img/stewa.png" alt="logo">
                            </a>
                            <p class="text">Perpustakaan SMK Negeri 2 Pengasih</p>

                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Contact Us</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="https://t.me/perpustewa"><img
                                                src="/landing-page/images/telegram-filled.svg" alt="telegram"
                                                style="width:20px"><span></span> <span>t.me/perpustewa</span></a></li>
                                    <li><a href="/"><img src="/landing-page/images/global.svg" alt="perpus-stewa"
                                                style="width:20px"><span></span> <span>www.perpus-stewa.com</span></a>
                                    </li>
                                    <li class=""><span class="text-white">Jl. KRT Kertodiningrat, Gn. Gondang,
                                            Margosari, Kec. Pengasih, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta
                                            55652</span></li>
                                </ul>
                            </div> <!-- footer wrapper -->

                        </div> <!-- footer link -->
                    </div>

                </div> <!-- row -->
            </div> <!-- footer widget -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="landing-page/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="landing-page/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="landing-page/js/popper.min.js"></script>
    <script src="landing-page/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="landing-page/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="landing-page/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="landing-page/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="landing-page/js/waypoints.min.js"></script>
    <script src="landing-page/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="landing-page/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="landing-page/js/jquery.easing.min.js"></script>
    <script src="landing-page/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="landing-page/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="landing-page/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="landing-page/js/main.js"></script>
    <script src="search/js/extention/choices.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
    const choices = new Choices('[data-trigger]', {
        searchEnabled: false,
        itemSelectText: '',
    });

    function updatemethod() {
        let chooseKategori = document.getElementById("chKategori");

        if (chooseKategori.value === "komik") {
            document.getElementById("formSearch").setAttribute("action", "/komik");
        } else if (chooseKategori.value == "fiksi") {
            document.getElementById("formSearch").setAttribute("action", "/fiksi");
        } else if (chooseKategori.value == "non-fiksi") {
            document.getElementById("formSearch").setAttribute("action", "/non-fiksi");
        }
    }
    </script>

</body>

</html>