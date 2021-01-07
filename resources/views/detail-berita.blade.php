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
    <link rel="stylesheet" href="{{asset('landing-page/css/animate.css')}}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/magnific-popup.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/LineIcons.css')}}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/font-awesome.min.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('landing-page/css/style.css')}}">
    <link href="{{asset('search/css/main.css')}}" rel="stylesheet" />

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

    <header class="header-area" >
        <div class="navbar-area" style="background-color:#007bff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg" >
                            <a class="navbar-brand" href="/"><img class="logo-icon mr-2"
                                    src="{{asset('/img/stewa.png')}}" alt="logo" style="width:100px;"><span
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
                                        <a class="page-scroll" href="/#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/#jumlah">Jumlah Buku</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="page-scroll" href="/#kategori">Kategori</a>
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
                                        <a class="page-scroll" href="/#berita">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/#contact">Follow Us</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
    </header>
    
    <section id="detailBerita" class="detailBerita-area pt-120 mt-5">
        <div class="container">
            @foreach($detail as $d)
            <div>
               
            </div>
            <div class="team-image">
                <img class="mx-auto d-block" src="{{ asset('data_file/'.$d->file) }}" style ="width:500px" alt="Berita">
            </div>
            <br><br>
            <div class="container">
                <p>{{$d->keterangan}}</p> <!-- row -->
            </div>
            @endforeach
            <!-- container -->
    </section>
    <br><br>
    
    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Ikuti terus info dari perpustakaan<span>dengan mengikuti channel telegram berikut</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="subscribe-form mt-50">
                            <a href="https://t.me/perpustewa"><img src="{{asset('/landing-page/images/telegram.svg')}}" alt="telegram" style="width:100px"></a>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="{{asset('img/stewa.png')}}" alt="logo">
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
                                    <li><a href="https://t.me/perpustewa"><img src="{{asset('/landing-page/images/telegram-filled.svg')}}" alt="telegram" style="width:20px"><span></span>  <span>t.me/perpustewa</span></a></li>
                                    <li><a href="/"><img src="{{asset('/landing-page/images/global.svg')}}" alt="perpus-stewa" style="width:20px"><span></span>  <span>www.perpus-stewa.com</span></a></li>
                                    <li class=""><span class="text-white">Jl. KRT Kertodiningrat, Gn. Gondang, Margosari, Kec. Pengasih, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55652</span></li>
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
    <script src="{{asset('landing-page/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('landing-page/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('landing-page/js/popper.min.js')}}"></script>
    <script src="{{asset('landing-page/js/bootstrap.min.js')}}"></script>

    <!--====== Plugins js ======-->
    <script src="{{asset('landing-page/js/plugins.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('landing-page/js/slick.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{asset('landing-page/js/ajax-contact.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{asset('landing-page/js/waypoints.min.js')}}"></script>
    <script src="{{asset('landing-page/js/jquery.counterup.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('landing-page/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('landing-page/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('landing-page/js/scrolling-nav.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{asset('landing-page/js/wow.min.js')}}"></script>

    <!--====== Particles js ======-->
    <script src="{{asset('landing-page/js/particles.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('landing-page/js/main.js')}}"></script>
    <script src="{{asset('search/js/extention/choices.js"')}}></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>

</body>

</html>