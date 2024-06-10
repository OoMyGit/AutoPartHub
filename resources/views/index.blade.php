<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="Autoparthub Automotive  eCommerce html template. Multivendor responsive eCommerce template">
    <meta name="author" content="ThemeTags">
    <meta name="keywords" content="Autoparthub Automotive  ecommerce, admin template, online shop, e-commerce, ecommerce template, marketplace, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Autoparthub Automotive eCommerce Website</title>

    <!--build:css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- endbuild -->

</head>
<style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            opacity:1;
            transition: opacity 1s ease-out;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .fade-out{
            opacity:0
        }
    </style>
@if (session('message'))
        <div class="alert alert-success text-center" id="flash-message">
            {{ session('message') }}
        </div>
    @endif
    <div class="main-wrapper">
        @include('footerheader.header')
        
        <!--offcanvas menu start-->
        <div class="offcanvas_menu position-fixed">
            <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="storage/logo.png" alt="logo" /></a>
                <div class="offcanvas-content">
                
                    <h4 class="mb-4">About Us</h4>
                    <p>
                        Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you
                        a complete account of the system, and expound the actual teachings.
                    </p>
                    <p>
                        Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the
                        system expound.
                    </p>
                    <a href="#" class="btn btn-primary mt-4">About Us</a>
                </div>
                <div class="offcanvas-contact mt-5">
                    <h5 class="mb-20">Contact Info</h5>
                    <address>
                        Denver, Surabaya, Indonesia <br />
                        <a href="tel:+6212345678901">+6212345678901</a> <br />
                        <a href="mailto:autoparhub@gmail.com">autoparhub@gmail.com</a>
                    </address>
                </div>
                <div class="social-contact offcanvas_social mt-4">
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="mobile-menu d-md-block d-lg-block d-xl-none">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="d-inline-block mb-5"><img src="storage/logo.png" alt="logo" /></a>
                <nav class="mobile-menu-wrapper mt-4">
                    <ul>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Home<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="{{ route('index') }}">Automotive Store</a></li>

                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Products<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="{{ route('shop-grid') }}">Catalog</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ url('/my-account') }}">My Account</a></li>
                                <li><a href="{{ route('cart') }}">Cart</a></li>
                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('team') }}">Team</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('signup') }}">Sign Up</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="contact-info mt-8">
                    <h5 class="mb-20">Contact Info</h5>
                    <address>
                        Surabaya, East Java, Indonesia <br />
                        <a href="tel:+8801682648101">+8801682648101</a> <br />
                        <a href="mailto:info@example.com">info@example.com</a>
                    </address>
                    <div class="social-contact">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--offcanvas menu end-->

        <!--hero section start-->
        <section class="gshop-hero pt-120 bg-white position-relative z-1 overflow-hidden">
            <img src="storage/wheel.png" alt="leaf" class="position-absolute leaf-shape z--1 rounded-circle">
            <img src="storage/crossbar.png" alt="mango" class="position-absolute mango z--1" data-parallax='{"y": -120}'>
            <img src="storage/hero-circle-sm.png" alt="circle" class="position-absolute hero-circle circle-sm z--1">
            <div class="container">
                <div class="gshop-hero-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide gshop-hero-single">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-5 col-lg-8">
                                    <div class="hero-left-content">
                                        <span class="gshop-subtitle fs-5 text-secondary mb-2 d-block">Genuine 100% Top-Tier Quality</span>
                                        <h1 class="display-4 mb-3">Your Automotive <br>Perfect <mark class="p-0 bg-transparent text-secondary">Solutions</mark></h1>
                                        <p class="mb-7 fs-6">We offer only the best in automotive parts and accessories, designed to exceed industry standards.</p>
                                        <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">
                                            <a href="{{ route('shop-grid') }}" class="btn btn-secondary">Shop Now<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                            <a href="{{ route('about') }}" class="btn btn-primary">About Us<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="hero-right text-center position-relative z-1 mt-8 mt-xl-0">
                                        <img src="storage/sparepart.png" alt="fruits" class="img-fluid position-absolute end-0 top-50 hero-img">
                                        <img src="storage/suspension.png" alt="tree" class="img-fluid position-absolute tree z-1">
                                        <img src="storage/wrench.png" alt="orange" class="position-absolute orange-1 z-1">
                                        <img src="storage/sphere.png" alt="orange" class="position-absolute orange-2 z-1">
                                        <img src="storage/hero-circle-lg.png" alt="circle shape" class="img-fluid hero-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide gshop-hero-single">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-5 col-lg-8">
                                    <div class="hero-left-content">
                                        <span class="gshop-subtitle fs-5 text-secondary mb-2 d-block">Upgrade to 100% Genuine Quality Today</span>
                                        <h1 class="display-4 mb-3">Your Vehicle <br>Deserves <mark class="p-0 bg-transparent text-secondary">the Best</mark></h1>
                                        <p class="mb-7 fs-6">Assertively target market-driven intellectual capital with worldwide human capital holistic.</p>
                                        <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">
                                            <a href="{{ route('shop-grid') }}" class="btn btn-secondary">Shop Now<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                            <a href="{{ route('about') }}" class="btn btn-primary">About Us<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="hero-right text-center position-relative z-1 mt-8 mt-xl-0">
                                        <!-- INI YG BERGERAK DI ATAS KANAN -->
                                        <img src="storage/sparepart.png" alt="velg" class="img-fluid position-absolute end-0 top-50 hero-img">
                                        <img src="storage/suspension.png" alt="tree" class="img-fluid position-absolute tree z-1">
                                        <img src="storage/wrench.png" alt="orange" class="position-absolute orange-1 z-1">
                                        <img src="storage/sphere.png" alt="orange" class="position-absolute orange-2 z-1">
                                        <img src="storage/hero-circle-lg.png" alt="circle shape" class="img-fluid hero-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide gshop-hero-single">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-5 col-lg-8">
                                    <div class="hero-left-content">
                                        <span class="gshop-subtitle fs-5 text-secondary mb-2 d-block">100% Performance Guaranteed Excellence</span>
                                        <h1 class="display-4 mb-3">Your Ultimate <br> Automotive <mark class="p-0 bg-transparent text-secondary">Product Source </mark></h1>
                                        <p class="mb-7 fs-6">Optimize your vehicle's potential with components that enhance efficiency and power.</p>
                                        <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">
                                            <a href="{{ route('shop-grid') }}" class="btn btn-secondary">Shop Now<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                            <a href="{{ route('about') }}" class="btn btn-primary">About Us<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="hero-right text-center position-relative z-1 mt-8 mt-xl-0">
                                        <img src="storage/sparepart.png" alt="fruits" class="img-fluid position-absolute end-0 top-50 hero-img">
                                        <img src="storage/suspension.png" alt="tree" class="img-fluid position-absolute tree z-1">
                                        <img src="storage/wrench.png" alt="orange" class="position-absolute orange-1 z-1">
                                        <img src="storage/sphere.png" alt="orange" class="position-absolute orange-2 z-1">
                                        <img src="storage/hero-circle-lg.png" alt="circle shape" class="img-fluid hero-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="at-header-social d-none d-sm-flex align-items-center position-absolute">
                <span class="title fw-medium">Follow on</span>
                <ul class="social-list ms-3">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="gshop-hero-slider-pagination theme-slider-control position-absolute top-50 translate-middle-y z-5"></div>
        </section> <!--hero section end-->

        <!--category section start-->
        <section class="gshop-category-section bg-white pt-120 position-relative z-1 overflow-hidden">

            <div class="container">
                <div class="gshop-category-box border-secondary rounded-3 bg-white">
                    <div class="text-center section-title">
                        <h4 class="d-inline-block px-2 bg-white mb-4">Our Top Category</h4>
                    </div>
                    <div class="row justify-content-center g-4">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden">
                                <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                    <img src="storage/velg.png" alt="flower" class="img-fluid">
                                </div>
                                <a href="{{ route('shop-grid') }}" class="text-dark fs-sm fw-bold d-block mt-3">Velg</a>
                                <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span>
                                <a href="{{ route('shop-grid') }}" class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-2">
                                <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                    <img src="storage/freshener.png" alt="littletree (1)" class="img-fluid">
                                </div>
                                <a href="{{ route('shop-grid') }}" class="text-dark fs-sm fw-bold d-block mt-3">Car Freshener</a>
                                <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span>
                                <a href="{{ route('shop-grid') }}" class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-3">
                                <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                    <img src="storage/muffler.png" alt="muffler (1)" class="img-fluid">
                                </div>
                                <a href="{{ route('shop-grid') }}" class="text-dark fs-sm fw-bold d-block mt-3">Muffler</a>
                                <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span>
                                <a href="{{ route('shop-grid') }}" class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-4">
                                <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                    <img src="storage/gauge.png" alt="flower" class="img-fluid">
                                </div>
                                <a href="{{ route('shop-grid') }}" class="text-dark fs-sm fw-bold d-block mt-3">Gauge & Pods</a>
                                <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span>
                                <a href="{{ route('shop-grid') }}" class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-5">
                                <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                    <img src="storage/oil.png" alt="flower" class="img-fluid">
                                </div>
                                <a href="{{ route('shop-grid') }}" class="text-dark fs-sm fw-bold d-block mt-3">Oils & Oil Filters</a>
                                <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span>
                                <a href="{{ route('shop-grid') }}" class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-3">
                                <div class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                    <img src="storage/cleaning.png" alt="flower" class="img-fluid">
                                </div>
                                <a href="{{ route('shop-grid') }}" class="text-dark fs-sm fw-bold d-block mt-3">Body Kit Essentials</a>
                                <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span>
                                <a href="{{ route('shop-grid') }}" class="explore-btn position-absolute"><i class="fa-solid fa-arrow-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--category section end-->

        <!--featured products start-->
        <!-- <section class="featured-products pt-120 pb-200 bg-shade position-relative overflow-hidden z-1">
            <img src="storage/owheel.png" alt="roll" class="position-absolute roll-1 z--1" data-parallax='{"y": -120}'>
            <img src="storage/ooils.png" alt="roll" class="position-absolute roll-2 z--1" data-parallax='{"y": 120}'>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-4">
                            <h3 class="mb-2">Featured Brand Products</h3>
                            <p class="mb-0">Platform mindshare through effective infomediaries Dynamically implement.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-xxl-4 col-lg-6">
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/aluminium-fan.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(2.1k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Aluminum Fan Shroud Kit</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 230.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 180.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/alumium-radiator.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(3.7k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Manual Aluminum Radiator</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 120.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 100.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/hose-kit.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(4.5k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Radiator Hose Kit</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 30.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 20.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/electric-fanblack.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(5.1k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Electric Slim Fan - Black</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 550.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 420.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 order-3 order-xxl-2">
                        <div class="product-card-lg bg-white rounded-2 d-flex flex-coloumn h-100">
                            <div>
                                <div class="card-content position-relative z-2">
                                    <span class="fs-xs gshop-subtitle text-secondary">100% High Quality Spareparts</span>
                                    <h4 class="mb-0">Cooling Parts </h4>
                                    <h3 class="mb-3">Air Filter </h3>
                                    <p class="mb-4">Get 20% Off on Selected Items</p>
                                    <a href="{{ route('index') }}" class="btn btn-secondary">Shop Now <span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                </div>

                                <div class="thumbnail position-relative z-1">
                                    <img src="storage/bunchoilfilter.png" alt="oilfilter" class="img-fluid p-4">
                                    <img src="storage/circle-md.png" alt="circle" class="position-absolute end-0 bottom-0 z--1 d-none d-sm-block">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 order-2 order-xxl-3">
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/rearbar.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(1.4k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Rear Sway Bar</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 120.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 100.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/bushingkit.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(2.3k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Bushing Upgrade Kit </a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 750.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 650.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/hatchback.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(5.2k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Coilover Civic Hatchback</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 550.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 420.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                            <div class="thumbnail position-relative rounded-2">
                                <a href="{{ route('index') }}"><img src="storage/nanofiber.png" alt="product" class="img-fluid"></a>
                                <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content mt-4 mt-sm-0">
                                <div class="d-flex align-items-center flex-nowrap star-rating">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(5.2k Reviews)</span>
                                </div>
                                <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Nanofiber Dry Air Filter</a>
                                <div class="pricing mt-2">
                                    <span class="fw-bold h4 deleted me-1 text-muted">Rp. 80.000</span>
                                    <span class="fw-bold h4 text-danger">Rp. 60.000</span>
                                </div>
                                <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="storage/bg-shape-2.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1">
        </section> featured products end -->

        <!--trending products start
        <section class="pt-8 pb-100 bg-white position-relative overflow-hidden z-1 trending-products-area">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="section-title text-center text-xl-start">
                            <h3 class="mb-0">Top Trending Products</h3>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="filter-btns gshop-filter-btn-group text-center text-xl-end mt-4 mt-xl-0">
                            <button class="active" data-filter="*">All Products</button>
                            <button data-filter=".sea_food">Gauge & Pods</button>
                            <button data-filter=".vegetables">Oils & Oil Filters</button>
                            <button data-filter=".beans_peas">Car Freshener</button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center g-4 mt-5 filter_group">
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-10 filter_item">
                        <div class="vertical-product-card rounded-2 position-relative">
                            <div class="thumbnail position-relative text-center p-4">
                                <a href="{{ route('index') }}"><img src="storage/electricfan.png" alt="electricfan" class="img-fluid"></a>
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9" />
                                        </svg>
                                    </a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="{{ route('shop-grid') }}" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Cooling</a>
                                <a href="{{ route('index') }}" class="card-title fw-bold d-block mb-2">Electric Slim Fan.</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(2.9k Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp. 140.000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="60%"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                            </div>
                            <div class="card-btn bg-white">
                                <a href="#" class="btn btn-secondary d-block btn-md rounded-1">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-10 filter_item sea_food">
                        <div class="vertical-product-card rounded-2 position-relative">
                            <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-5% OFF</span>
                            <div class="thumbnail position-relative text-center p-4">
                                <a href="{{ route('index') }}"><img src="storage/aemk.png" alt="aemk" class="img-fluid"></a>
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9" />
                                        </svg>
                                    </a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="{{ route('shop-grid') }}" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Gauge & Pods</a>
                                <a href="{{ route('index') }}" class="card-title fw-bold d-block mb-2">AEM K-Type Thermocouple Kit</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(1.7k Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp. 140.000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="60%"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                            </div>
                            <div class="card-btn bg-white">
                                <a href="#" class="btn btn-secondary d-block btn-md rounded-1">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-10 filter_item vegetables">
                        <div class="vertical-product-card rounded-2 position-relative">
                            <div class="thumbnail position-relative text-center p-4">
                                <a href="{{ route('index') }}"><img src="storage/oil-filter.png" alt="oilfilter" class="img-fluid"></a>
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9" />
                                        </svg>
                                    </a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="{{ route('shop-grid') }}" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Oils & Oil Filters</a>
                                <a href="{{ route('index') }}" class="card-title fw-bold d-block mb-2">Universal Performance Gold Oil Filter</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(5.2k Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp. 140.000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="60%"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                            </div>
                            <div class="card-btn bg-white">
                                <a href="#" class="btn btn-secondary d-block btn-md rounded-1">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-10 filter_item beans_peas">
                        <div class="vertical-product-card rounded-2 position-relative">
                            <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-7% OFF</span>
                            <div class="thumbnail position-relative text-center p-4">
                                <a href="{{ route('index') }}"><img src="storage/glade.png" alt="glade" class="img-fluid"></a>
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9" />
                                        </svg>
                                    </a>
                                    <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="{{ route('shop-grid') }}" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Car Freshener</a>
                                <a href="{{ route('index') }}" class="card-title fw-bold d-block mb-2">Glade Diamond Aqua 80ml</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(5.2k Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp. 140.000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="60%"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                            </div>
                            <div class="card-btn bg-white">
                                <a href="#" class="btn btn-secondary d-block btn-md rounded-1">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> trending products end-->

        <!--banner section start-->
        <section class="banner-section position-relative z-1 mt-5 pt-5 overflow-hidden bg-white pt-2">
            <img src="storage/bg-shape-3.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
            <img src="storage/ogauge.png" alt="gauge" class="position-absolute garlic z--1" data-parallax='{"y": 150}'>
            <img src="storage/omuffler.png" alt="muffler" class="position-absolute carrot z--1" data-parallax='{"y": -100}'>
            <img src="storage/ooil-filters.png" alt="filters" class="position-absolute mashrom z--1" data-parallax='{"x": 2000}'>
            <div class="container">
                <div class="row align-items-center g-4 justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="banner-box background-banner rounded-2 overflow-hidden" data-background="storage/banner-1.png">
                            <span class="gshop-subtitle fs-xxs mb-1 text-dark d-inline-block">Hot Items</span>
                            <h6 class="mb-0">Suspension</h6>
                            <h4 class="mb-6">Car Suspension</h4>
                            <a href="{{ route('index') }}" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="banner-box rounded-2 overflow-hidden position-relative banner-color-green z-1">
                            <img src="storage/rim.png" alt="velg" class="banner-img">
                            <span class="gshop-subtitle fs-xxs mb-1 text-dark d-inline-block">Weekly Best Seller</span>
                            <h6 class="mb-0">Velg</h6>
                            <h4 class="mb-6">Wheel Rim</h4>
                            <a href="{{ route('index') }}" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="banner-box rounded-2 overflow-hidden position-relative z-1 banner-color-secondary">
                            <img src="storage/nrg.png" alt="interior" class="banner-img">
                            <span class="badge bg-danger gshop-subtitle mb-1">Top Offer</span>
                            <h6 class="mb-0">Interior Accessories</h6>
                            <h4 class="mb-6">Steering Wheel</h4>
                            <a href="{{ route('index') }}" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- banner section end -->

        <!--best deals start-->
        <!-- <section class="pb-120 position-relative z-1 pt-120">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-xxl-4 col-xl-5 order-2 order-xxl-1">
                        <div class="banner-box banner-color-green position-relative overflow-hidden z-1 rounded-2 pe-0 pb-0">
                            <span class="gshop-subtitle text-secondary mb-1">100% High Quality Products</span>
                            <h6 class="mb-0">Body Kit Essentials</h6>
                            <h4 class="mb-2">Spotless & Immaculate</h4>
                            <p class="fw-medium mb-5">Get 50% Off on Selected Items</p>
                            <a href="{{ route('index') }}" class="btn btn-primary btn-md">Show Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                            <div class="banner-img-wrapper text-end mt--40">
                                <img src="storage/spareparts.png" alt="spareparts" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 order-1 order-xxl-2">
                        <div class="timing-box d-flex align-items-center justify-content-center justify-content-sm-between rounded-3 flex-wrap gap-3">
                            <h4 class="mb-0">Weekly Best Deals</h4>
                            <ul class="timing-countdown countdown-timer d-flex align-items-center gap-2" data-date="06/10/2024 13:00:00">
                                <li class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                                    <h5 class="mb-0 days">24</h5>
                                    <span class="gshop-subtitle fs-xxs d-block">Days</span>
                                </li>
                                <li class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                                    <h5 class="mb-0 hours">17</h5>
                                    <span class="gshop-subtitle fs-xxs d-block">Hours</span>
                                </li>
                                <li class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                                    <h5 class="mb-0 minutes">12</h5>
                                    <span class="gshop-subtitle fs-xxs d-block">Minutes</span>
                                </li>
                                <li class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                                    <h5 class="mb-0 seconds">10</h5>
                                    <span class="gshop-subtitle fs-xxs d-block">Seconds</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="storage/wiper.png" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="rounded-btn">
                                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 mt-sm-0">
                                            <div class="d-flex align-items-center flex-nowrap star-rating">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="flex-shrink-0">(5.2k Reviews)</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Wiper Mobil HELLA Premium</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold h4 deleted me-1">Rp. 240.000</span>
                                                <span class="fw-bold h4 text-danger">Rp. 140.000</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="storage/idetailer.png" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="rounded-btn">
                                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 mt-sm-0">
                                            <div class="d-flex align-items-center flex-nowrap star-rating">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="flex-shrink-0">(1.7k Reviews)</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Interior Detailer</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold h4 deleted me-1">Rp. 240.000</span>
                                                <span class="fw-bold h4 text-danger">Rp. 140.000</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="storage/dream.png" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="rounded-btn">
                                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 mt-sm-0">
                                            <div class="d-flex align-items-center flex-nowrap star-rating">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="flex-shrink-0">(3.1k Reviews)</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">Dream Maker Gloss Amplifier</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold h4 deleted me-1">Rp. 240.000</span>
                                                <span class="fw-bold h4 text-danger">Rp. 140.000</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="storage/downpipe.png" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="rounded-btn">
                                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 mt-sm-0">
                                            <div class="d-flex align-items-center flex-nowrap star-rating">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="flex-shrink-0">(2.3k Reviews)</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fw-bold text-heading title d-block">High Flow Downpipe</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold h4 deleted me-1">Rp. 240.000</span>
                                                <span class="fw-bold h4 text-danger">Rp. 140.000</span>
                                            </div>
                                            <a href="{{ route('index') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> best deals end -->

        <!--banner section start-->
        <section class="banner-section position-relative mt-5 pt-5 z-1 overflow-hidden">
            <img src="storage/bg-shape-4.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-12">
                        <div class="banner-box background-banner rounded-2 banner-lg" data-background="storage/banner.png">
                            <span class="badge bg-danger mb-2">Top Offer</span>
                            <h3 class="mb-6 text-white gshop-title">High Quality & Affordable<br class="d-none d-sm-block"> Items <mark class="position-relative text-secondary position-relative bg-transparent">Special Offer<img src="storage/border-line.png" class="position-absolute start-0 border-line w-100" alt="border line"></mark></h3>
                            <a href="{{ route('shop-grid') }}" class="btn btn-secondary btn-md">Shop Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--banner section end-->

        <!--feedback section start-->
        <section class="ptb-120 bg-shade position-relative overflow-hidden z-1 feedback-section">
            <img src="storage/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
            <img src="storage/map-bg.png" alt="map" class="position-absolute start-50 top-50 translate-middle z--1">
            <img src="storage/fd-2.png" alt="shape" class="position-absolute z--1 fd-1">
            <img src="storage/fd-1.png" alt="shape" class="position-absolute z--1 fd-2">
            <img src="storage/fd-3.png" alt="shape" class="position-absolute z--1 fd-3">
            <img src="storage/fd-4.png" alt="shape" class="position-absolute z--1 fd-4">
            <img src="storage/fd-5.png" alt="shape" class="position-absolute z--1 fd-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2 class="mb-6">What Our Clients Say</h2>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="gshop-feedback-slider-wrapper">
                            <div class="swiper gshop-feedback-thumb-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide control-thumb">
                                        <img src="storage/client-1.png" alt="clients" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="swiper-slide control-thumb">
                                        <img src="storage/client-2.png" alt="clients" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="swiper-slide control-thumb">
                                        <img src="storage/client-3.png" alt="clients" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="swiper-slide control-thumb">
                                        <img src="storage/client-4.png" alt="clients" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="swiper-slide control-thumb">
                                        <img src="storage/client-5.png" alt="clients" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper gshop-feedback-slider mt-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide feedback-single text-center">
                                        <p class="mb-5">“Distinctively unleash business technologies without backend metrics. Conveniently network distributed core competencies. Continually integrate backward-compatible information and backward-compatible” </p>
                                        <span class="clients_name text-dark fw-bold d-block mb-1">Rasmus Geisler</span>
                                        <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide feedback-single text-center">
                                        <p class="mb-5">“Distinctively unleash business technologies without backend metrics. Conveniently network distributed core competencies. Continually integrate backward-compatible information and backward-compatible” </p>
                                        <span class="clients_name text-dark fw-bold d-block mb-1">Rasmus Geisler</span>
                                        <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide feedback-single text-center">
                                        <p class="mb-5">“Distinctively unleash business technologies without backend metrics. Conveniently network distributed core competencies. Continually integrate backward-compatible information and backward-compatible” </p>
                                        <span class="clients_name text-dark fw-bold d-block mb-1">Rasmus Geisler</span>
                                        <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide feedback-single text-center">
                                        <p class="mb-5">“Distinctively unleash business technologies without backend metrics. Conveniently network distributed core competencies. Continually integrate backward-compatible information and backward-compatible” </p>
                                        <span class="clients_name text-dark fw-bold d-block mb-1">Rasmus Geisler</span>
                                        <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide feedback-single text-center">
                                        <p class="mb-5">“Distinctively unleash business technologies without backend metrics. Conveniently network distributed core competencies. Continually integrate backward-compatible information and backward-compatible” </p>
                                        <span class="clients_name text-dark fw-bold d-block mb-1">Rasmus Geisler</span>
                                        <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feedback section end-->


        @include('footerheader.footer')
    </div>



    <!--scroll bottom to top button start-->
    <button class="scroll-top-btn">
        <i class="fa-regular fa-hand-pointer"></i>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-ui.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/simplebar.min.js"></script>
    <script src="assets/js/vendors/parallax-scroll.js"></script>
    <script src="assets/js/vendors/isotop.pkgd.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/vendors/range-slider.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/counterup.min.js"></script>
    <script src="assets/js/vendors/typer.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
       
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.classList.add('fade-out');
               
                setTimeout(function() {
                    flashMessage.remove();
                }, 1000); 
            }
        }, 2000);
    </script>
    <script>
    $(document).ready(function() {
        function updateCountdown() {
            // Set the date we're counting down to
            var countDownDate = new Date("June 30, 2023 23:59:59").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {
                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the corresponding elements
                $(".countdown-timer .days").text(days);
                $(".countdown-timer .hours").text(hours);
                $(".countdown-timer .minutes").text(minutes);
                $(".countdown-timer .seconds").text(seconds);

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    $(".countdown-timer").html("<h5 class='mb-0'>EXPIRED</h5>");
                }
            }, 1000);
        }

        updateCountdown();
    });
</script>

    <!--endbuild-->
</body>

</html>