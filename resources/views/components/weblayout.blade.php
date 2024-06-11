<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nicsons</title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="Nicsons">
    <meta name="keywords" content="Nicsons">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href=" {{asset('assets/img/favicons/apple-icon-57x57.png')}} ">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicons/apple-icon-60x60.png')}} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicons/apple-icon-72x72.png')}} ">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicons/apple-icon-76x76.png')}} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicons/apple-icon-114x114.png')}} ">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicons/apple-icon-120x120.png')}} ">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-icon-180x180.png')}} ">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/android-icon-192x192.png')}} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}} ">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicons/favicon-96x96.png')}} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}} ">
    <link rel="manifest" href=" asset('assets/img/favicons/manifest.json') ">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=" asset('assets/img/favicons/ms-icon-144x144.png') ">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{asset('assets/css/fontawesome.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/magnific-popup.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/slick.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/style.css')}} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="preloader"><button class="themeholy-btn style4 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader">
                <div class="loader-ring"></div>
                <div class="rocket-wrapper">
                    <div class="trail-wrapper">
                        <img class="trail" src="{{ asset('assets/img/icon/trail.svg')}}" alt="">
                    </div>
                    <img class="rocket" src="{{ asset('assets/img/icon/small-rocket.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="themeholy-widget-about">
                    <div class="about-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/nicsons_logo3.png')}}" alt="Nicsons">
                        </a>
                    </div>
                    <p class="">{{$company[0]->motivation}}</p>
                    <div class="themeholy-social">
                        @foreach ($company[0]->socialMedia as $socialMedia)
                            <a href="{{$socialMedia->link}}">
                                <i class="fab fa-{{$socialMedia->name}}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Recent Posts<span class="shape"></span></h3>
                <div class="recent-post-wrap">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($events as $event)
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="{{ route('new_details', $event->id)}}">
                                    <img src="{{ asset('assets/img/'.$event->photo[$i]->img_path)}}" alt="Blog Image">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="recent-post-meta">
                                    <a href="{{ route('new_details', $event->id)}}">
                                        <i class="fal fa-calendar-days"></i>{{Setting::getDate($event->created_at)}}
                                    </a>
                                </div>
                                <h4 class="post-title">
                                    <a class="text-inherit title_text" href="{{ route('new_details', $event->id)}}">{{$event->text}}</a>
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="themeholy-menu-wrapper">
        <div class="themeholy-menu-area text-center"><button class="themeholy-menu-toggle"><i
                    class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ route('home')}}"><img src="{{ asset('assets/img/nicsons_logo3W.png')}}" alt="Nicsons"></a></div>
            <div class="themeholy-mobile-menu">
                <ul>
                    <li class="menu-item-has"><a href="{{ route('home')}}">Home</a>
                    </li>
                    <li><a href="{{ route('about')}}">About</a></li>
                    <li class="menu-item"><a href="{{ route('services')}}">Services</a>
                    </li>
                    <li class="menu-item"><a href="{{ route('news')}}">News</a>
                    </li>
                    <li><a href="{{ route('contact_us')}}">Contact Us</a></li>
                    <li><a href="{{ route('gallery')}}">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="themeholy-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fa-regular fa-phone"></i><span class="link-title">Phone : </span><a
                                        href="tel:{{$company[0]->phone_no}}">{{$company[0]->phone_no}}</a></li>
                                <li><i class="fa-regular fa-envelope"></i><span class="link-title">Email : </span><a
                                        href="mailto:{{$company[0]->email}}">{{$company[0]->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <!--<div class="langauge"><img src="{{ asset('assets/img/icon/fag.sv')}}g" alt=""> 
                                <select
                                    class="form-select nice-select">
                                    <option selected="">English</option>
                                    <option>Hindi</option>
                                </select>-->
                            </div>
                            <div class="header-social">
                                @foreach ($company[0]->socialMedia as $socialMedia)
                                    <a href="{{$socialMedia->link}}">
                                        <i class="fab fa-{{$socialMedia->name}}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="{{ route('home')}}"><img src="{{ asset('assets/img/logo.png')}}"
                                        alt="Nicsons"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('home')}}">Home</a>
                                    </li>
                                    <li><a href="{{ route('about')}}">About</a></li>
                                    <li class="menu-item"><a href="{{ route('services')}}">Services</a>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('news')}}">News</a>
                                    </li>
                                    <li><a href="{{ route('contact_us')}}">Contact Us</a></li>
                                    <li><a href="{{ route('gallery')}}">Gallery</a></li>
                                </ul>
                            </nav><button type="button" class="themeholy-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="{{ route('login')}}"><button type="button" class="icon-btn "><i
                                        class="fal fa-user"></i></button></a> <button type="button"
                                    class="icon-btn fs-6 sideMenuToggler"><img src="{{ asset('assets/img/icon/grid.svg')}}"
                                        alt=""></button> <a href="{{ route('contact_us')}}" class="themeholy-btn blue-btn">Tracking
                                    Order<span class="icon"><i
                                            class="fa-sharp fa-regular fa-paper-plane"></i></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
            <div class="logo-shape"><img src="{{ asset('assets/img/logo-shape.svg')}}" alt=""></div>
        </div>
        <div class="menu-shape">
            <div class="top-shape" data-bg-src="{{ asset('assets/img/bg/header_bg_1.png')}}"></div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer_bg_1.jpg')}}">
        <div class="container">
            <div class="footer-top">
                <div class="row gx-0 align-items-center">
                    <div class="col-xl">
                        <div class="footer-newsletter">
                            <h3 class="h4 newsletter-title text-white">Subscribe Our Newsletter Get update</h3>
                            <div class="newletter-wrapper">
                                <form class="newsletter-form"><input class="form-control" type="email"
                                        placeholder="Email Address" required=""> <button type="submit"
                                        class="themeholy-btn white-btn">Subscribe<span class="icon"><i
                                                class="fa-sharp fa-regular fa-paper-plane"></i></span></button></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="themeholy-widget-about">
                                <div class="about-logo"><a href="index.html"><img src="{{ asset('assets/img/logo-white1.png')}}"
                                            alt="Nicsons"></a></div>
                                <p class="about-text">{{$company[0]->motivation}}</p>
                                <div class="themeholy-social">
                                    @foreach ($company[0]->socialMedia as $socialMedia)
                                        <a href="{{$socialMedia->link}}">
                                            <i class="fab fa-{{$socialMedia->name}}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Office Address</h3>
                            <div class="themeholy-widget-contact">
                                <div class="info-box">
                                    <p class="info-box_text">{{$company[0]->physical_address}}</p>
                                </div>
                                <div class="info-box">
                                    <p class="info-box_text">{{$company[0]->working_hours}}</p>
                                </div>
                                <div class="info-box">
                                    <p class="info-box_text"><a href="tel:{{$company[0]->phone_no}}" class="info-box_link">{{$company[0]->phone_no}}</a></p>
                                </div>
                                <div class="info-box">
                                    <p class="info-box_text"><a href="mailto:{{$company[0]->email}}"
                                            class="info-box_link">{{$company[0]->email}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Explore</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('about')}}">About Us</a></li>
                                    <li><a href="{{ route('services')}}">Our Services</a></li>
                                    <li><a href="{{ route('news')}}">Latest Blog</a></li>
                                    <li><a href="{{ route('gallery')}}">Photo gallery</a></li>
                                    <li><a href="{{ route('contact_us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Photos Gallery</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_1.jpg')}}"
                                        alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_1.jpg')}}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_2.jpg')}}"
                                        alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_2.jpg')}}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_3.jpg')}}"
                                        alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_3.jpg')}}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_4.jpg')}}"
                                        alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_4.jpg')}}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_5.jpg')}}"
                                        alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_5.jpg')}}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_6.jpg')}}"
                                        alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_6.jpg')}}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text"><i class="fal fa-copyright"></i> 2023 All Rights Reserved By <a
                                href="#">Nicsons.</a></p>
                        <p class="copyright-text"><i class="fal fa-copyright"></i> Powered by <a
                                href="https://abletech.co.tz/">ABLE TECH LIMITED</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-links">
                            <ul>
                                <li><a href="{{ route('contact_us')}}">Privacy</a></li>
                                <li><a href="{{ route('contact_us')}}">Terms &amp; Condition</a></li>
                                <li><a href="{{ route('about')}}">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src=" {{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src=" {{asset('assets/js/slick.min.js')}}"></script>
    <script src=" {{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src=" {{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>
<!-- Mirrored from themeholy.com/html/Nicsons/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 21:41:28 GMT -->

</html>