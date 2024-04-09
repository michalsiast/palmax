<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>

<div class="main-wrapper">


    <!-- Preloader start -->
{{--    <div id="preloader">--}}
{{--        <div class="preloader">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Preloader End -->

    <!-- Header Start  -->
    <div id="header" class="section header-section header-section-05">

        <div class="container">

            <!-- Header Wrap Start  -->
            <div class="header-wrap">

                <div class="header-logo">
                    <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>

                <div class="header-menu d-none d-lg-block">
                    @include('default.nav_item.main', ['name' => 'main'])
                </div>

                <!-- Header Meta Start -->
                <div class="header-meta">
                    <!-- Header Social Start -->
                    <div class="header-social">
                        <ul>
                            <li><a href="{{getConstField('facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Social End -->
                    <!-- Header Toggle Start -->
                    <div class="header-toggle d-lg-none">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->
                </div>
                <!-- Header Meta End  -->

            </div>
            <!-- Header Wrap End  -->

        </div>
    </div>
    <!-- Header End -->

    <!-- Offcanvas Start-->
    <div class="offcanvas offcanvas-start" id="offcanvasExample">
        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i
                    class="flaticon-close"></i></button>
        </div>

        <!-- Offcanvas Body Start -->
        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                @include('default.nav_item.main', ['name' => 'main'])
            </div>
        </div>
        <!-- Offcanvas Body End -->
    </div>
    {{--@include('default._helpers.lang_nav')--}}



    @yield('content')

    <div class="section footer-section footer-section-03"
         style="background-image: url({{asset('images/bg/footer-bg.jpg')}});">

        <div class="container">
            <!-- Footer Widget Wrap Start -->
            <div class="footer-widget-wrap">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget-about">
                            <a class="footer-logo" href="/"><img src="{{asset('images/logo.png')}}"
                                                                 alt="Logo"></a>
                            <p>{!! getConstField('company_description') !!}</p>
                            <div class="footer-social">
                                <ul class="social">
                                    <li><a href="{{getConstField('facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Dane firmy</h4>

                            <div class="widget-link">
                                <ul class="link">
                                    <li><a href="{{getConstField('google_map')}}">{{getConstField('company_address')}}  </a></li>
                                    <li><a href="{{getConstField('google_map')}}">{{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></li>
                                    <li><p>{{getConstField('bank_account_number')}}</p></li>
                                    <li><p>NIP: {{getConstField('company_nip')}}</p></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Osoba kontaktowa</h4>

                            <div class="widget-link">
                                <ul class="link">
                                    <li>
                                        <p>{{getConstField('company_name')}}</p>
                                    </li>
                                    <li>
                                        <p>Wszystkie usterki techniczne stron prosimy zgłaszać na maila: <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Dane kontaktowe</h4>

                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <div class="info-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                </div>
            </div>
            <!-- Footer Widget Wrap End -->
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright-area">
            <div class="container">
                <div class="footer-copyright-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <!-- Copyright Text Start -->
                            <div class="copyright-text text-center">
                                <p><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl">Palmax</a></p>
                            </div>
                            <!-- Copyright Text End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </div>
    <!-- Footer Section End -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

</div>

<!-- JS
============================================ -->
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/back-to-top.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/appear.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/jquery-3.6.1.min.js')}}" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/slick/slick.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/simple-lightbox.jquery.min.js')}}" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
