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
    <title>Autoparthub - Shop Grid - Autoparthub Automotive eCommerce Website</title>

    <!--build:css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- endbuild -->
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
</head>


<body>

@if (session('message'))
        <div class="alert alert-success text-center" id="flash-message">
            {{ session('message') }}
        </div>
    @endif

    <!--preloader start-->
    <div id="preloader">
        <img src="assets/img/preloader2.gif" alt="preloader" width="450" class="img-fluid">
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        @include('footerheader.header')

        <!--offcanvas menu start-->
        <div class="offcanvas_menu position-fixed">
            <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="{{ route('index') }}" class="logo-wrapper d-inline-block mb-5"><img src="storage/logo.jpg" alt="logo" /></a>
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
                    <a href="{{ route('about') }}" class="btn btn-primary mt-4">About Us</a>
                </div>
                <div class="offcanvas-contact mt-5">
                    <h5 class="mb-20">Contact Info</h5>
                    <address>
                        Surabaya, East Java, Indonesia <br />
                        <a href="tel:+8801682648101">+8801682648101</a> <br />
                        <a href="mailto:info@example.com">info@example.com</a>
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
                <a href="{{ route('index') }}" class="d-inline-block mb-5"><img src="assets/img/logo.png" alt="logo" /></a>
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
                                <li><a href="{{ route('shop-grid') }}">Shop Grid</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('my-account') }}">My Account</a></li>
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

        <!--breadcrumb section start-->
        <div class="gstore-breadcrumb position-relative z-1 overflow-hidden mt--50">
            <img src="storage/bg-shape-6.png" alt="bg-shape" class="position-absolute start-0 z--1 w-100 bg-shape">
            <img src="storage/gasoline.svg" alt="gasoline" class="position-absolute pata-xs z--1 vector-shape">
            <img src="storage/spark.svg" alt="spark" class="position-absolute z--1 onion start-0 top-0 vector-shape">
            <img src="storage/wrench.svg" alt="wrench" class="position-absolute z--1 frame-circle vector-shape">
            <img src="storage/suspension2.png" alt="suspension" class="position-absolute z--1 leaf vector-shape">
            <img src="storage/dashboard.svg" alt="dashboard" class="position-absolute z--1 garlic vector-shape">
            <img src="storage/exhaustpipe.png" alt="exhaustpipe" class="position-absolute z--1 roll vector-shape">
            <img src="storage/muffler.svg" alt="muffler" class="position-absolute z--1 roll-2 vector-shape">
            <img src="storage/gasoline.svg" alt="gasoline" class="position-absolute z--1 pata-xs-2 vector-shape">
            <img src="storage/gasoline.svg" alt="gasoline" class="position-absolute z--1 tomato-half vector-shape">
            <img src="storage/tire.png" alt="tire" class="position-absolute z--1 tomato-slice vector-shape">
            <img src="storage/wrench.svg" alt="wrench" class="position-absolute z--1 cauliflower vector-shape">
            <img src="storage/dashboard.svg" alt="dashboard" class="position-absolute z--1 leaf-gray vector-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">Shop Layout</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Shop Grid</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--shop grid section start-->
        <section class="gshop-gshop-grid ptb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="gshop-sidebar bg-white rounded-2 overflow-hidden">
                            <div class="sidebar-widget search-widget bg-white py-5 px-4">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Search Now</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <form class="search-form d-flex align-items-center mt-4">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit" class="submit-icon-btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar-widget category-widget bg-white py-5 px-4 border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Categories</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <ul class="widget-nav mt-4">
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Air Fresheners<span class="fw-bold fs-xs total-count">08</span></a></li>
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Tires<span class="fw-bold fs-xs total-count">09</span></a></li>
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Rims<span class="fw-bold fs-xs total-count">06</span></a></li>
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Phone Holders<span class="fw-bold fs-xs total-count">10</span></a></li>
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Turbo<span class="fw-bold fs-xs total-count">11</span></a></li>
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Mufflers <span class="fw-bold fs-xs total-count">7</span></a></li>
                                    <li><a href="#" class="d-flex justify-content-between align-items-center">Brakes<span class="fw-bold fs-xs total-count">7</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget price-filter-widget bg-white py-5 px-4 border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Filter by Price</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <div class="at-pricing-range mt-4">
                                    <form class="range-slider-form">
                                        <div class="price-filter-range"></div>
                                        <div class="d-flex align-items-center mt-3">
                                            <input type="text" oninput="validity.valid||(value='0');" class="min_price price-range-field price-input">
                                            <span class="d-inline-block ms-2 me-2 fw-bold">-</span>
                                            <input type="text" oninput="validity.valid||(value='10000');" class="max_price price-range-field price-input">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm mt-3">Filter</button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget rating-widget py-5 px-4 border-top bg-white">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Rating</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <ul class="mt-4 sidebar-rating-list">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox d-inline-flex">
                                            <div class="theme-checkbox flex-shrink-0">
                                                <input type="checkbox">
                                                <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="rating-field text-warning fs-xs d-flex align-items-center ms-1">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fw-bold fs-xs total-count">48</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox d-inline-flex">
                                            <div class="theme-checkbox flex-shrink-0">
                                                <input type="checkbox">
                                                <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="rating-field text-warning fs-xs d-flex align-items-center ms-1">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fw-bold fs-xs total-count">14</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox d-inline-flex">
                                            <div class="theme-checkbox flex-shrink-0">
                                                <input type="checkbox">
                                                <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="rating-field text-warning fs-xs d-flex align-items-center ms-1">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fw-bold fs-xs total-count">36</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox d-inline-flex">
                                            <div class="theme-checkbox flex-shrink-0">
                                                <input type="checkbox">
                                                <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="rating-field text-warning fs-xs d-flex align-items-center ms-1">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fw-bold fs-xs total-count">24</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget tags-widget py-5 px-4 bg-white">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0">Tags.</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <div class="mt-4 d-flex gap-2 flex-wrap">
                                    <a href="#" class="btn btn-outline btn-sm">Spark Plugs</a>
                                    <a href="#" class="btn btn-outline btn-sm">Rims</a>
                                    <a href="#" class="btn btn-outline btn-sm">Muffler</a>
                                    <a href="#" class="btn btn-outline btn-sm">Detailing</a>
                                    <a href="#" class="btn btn-outline btn-sm">Oils</a>
                                    <a href="#" class="btn btn-outline btn-sm">Wiper</a>
                                    <a href="#" class="btn btn-outline btn-sm">Turbo</a>
                                    <a href="#" class="btn btn-outline btn-sm">Gauge</a>
                                    <a href="#" class="btn btn-outline btn-sm">Air Intake</a>
                                </div>
                            </div>
                            <div class="sidebar-widget products-widget py-5 px-4 bg-white border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Best Selling</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <div class="sidebar-products-list">
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3 card-md">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="https://cdn.shopify.com/s/files/1/1889/8657/products/770323bf0d9bfb1342ffa7243e31b202_600x.jpg?v=1627479432g" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="{{ route('index') }}" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="{{ route('index') }}" class="d-block fs-sm fw-bold text-heading title d-block">K&N Universal Round Tapered Filter</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp1,030,000</span>
                                            </div>
                                            <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3 card-md">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="https://down-id.img.susercontent.com/file/id-11134207-7qukw-lhonlbgxz7mcdb" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="{{ route('index') }}" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="{{ route('index') }}" class="d-block fs-sm fw-bold text-heading title d-block">Little Trees Vanilla Strawberry XTRA STRENGTH</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp20,000</span>
                                            </div>
                                            <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3 card-md">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="https://throtl.com/cdn/shop/products/9ba84430e8e27b27125aa5a7e5240fac_c9fd7b0b-58eb-4564-b7ac-26ae2061d636_750x.jpg?v=1627135543" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="{{ route('index') }}" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="{{ route('index') }}" class="d-block fs-sm fw-bold text-heading title d-block">Enkei T6S 18x8.5 35mm Offset 5x114.3 Bolt</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp17,000,000</span>
                                            </div>
                                            <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3 card-md">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('index') }}"><img src="https://throtl.com/cdn/shop/products/b04aa74873e3f3b18c6c17f52bab1854_750x.jpg?v=1690378938" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                <a href="{{ route('index') }}" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="{{ route('index') }}" class="d-block fs-sm fw-bold text-heading title d-block">MBRP Universal 30in High Flow Muffler</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp1,905,000</span>
                                            </div>
                                            <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="shop-grid">
                            <div class="listing-top d-flex align-items-center justify-content-between flex-wrap gap-3 bg-white rounded-2 px-4 py-5 mb-6">
                                <p class="mb-0 fw-bold">Showing all results</p>
                                <div class="listing-top-right text-end d-inline-flex align-items-center gap-3 flex-wrap">
                                    <div class="number-count-filter d-flex align-items-center gap-3">
                                        <label class="fw-bold fs-xs text-dark flex-shrink-0">Show:</label>
                                        <input type="number" value="12">
                                    </div>
                                    <div class="select-filter d-inline-flex align-items-center gap-3">
                                        <label class="fw-bold fs-xs text-dark flex-shrink-0">Sort by:</label>
                                        <select class="form-select fs-xxs fw-medium theme-select select-sm">
                                            <option>News First</option>
                                            <!--<option>Best Selling</option>
                                            <option>Best Rated</option>-->
                                        </select>
                                    </div>
                                    <a href="#" class="grid-btn active">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.97196 0H1.37831C0.706579 0 0.160156 0.546422 0.160156 1.21815V5.8118C0.160156 6.48353 0.706579 7.02996 1.37831 7.02996H5.97196C6.64369 7.02996 7.19011 6.48353 7.19011 5.8118V1.21815C7.19 0.546422 6.64369 0 5.97196 0Z" fill="#FF7C08" />
                                            <path d="M14.9407 0H10.3471C9.67533 0 9.12891 0.546422 9.12891 1.21815V5.8118C9.12891 6.48353 9.67533 7.02996 10.3471 7.02996H14.9407C15.6124 7.02996 16.1589 6.48353 16.1589 5.8118V1.21815C16.1589 0.546422 15.6124 0 14.9407 0Z" fill="#FF7C08" />
                                            <path d="M5.97196 8.96973H1.37831C0.706579 8.96973 0.160156 9.51609 0.160156 10.1878V14.7815C0.160156 15.4532 0.706579 15.9996 1.37831 15.9996H5.97196C6.64369 15.9996 7.19011 15.4532 7.19011 14.7815V10.1878C7.19 9.51609 6.64369 8.96973 5.97196 8.96973Z" fill="#FF7C08" />
                                            <path d="M14.9407 8.96973H10.3471C9.67533 8.96973 9.12891 9.51615 9.12891 10.1879V14.7815C9.12891 15.4533 9.67533 15.9997 10.3471 15.9997H14.9407C15.6124 15.9996 16.1589 15.4532 16.1589 14.7815V10.1878C16.1589 9.51609 15.6124 8.96973 14.9407 8.96973Z" fill="#FF7C08" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- product showed start-->
                            <div class="row g-4 justify-content-center">
                                @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-10">
                                    <div class="vertical-product-card rounded-2 position-relative border-0 bg-white bg-white">
                                        <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-12% OFF</span>
                                      <!-- Product Card Blade Template -->
                                        <div class="thumbnail position-relative text-center p-4">
                                            <img src="{{ $product->image }}" alt="{{ $product->nama_product }}" class="img-fluid">
                                            <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                                <form class="wishlist-form" method="POST" action="{{ route('wishlist.add') }}">
                                                    @csrf
                                                    <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                                                    <button type="submit" class="rounded-btn add-to-wishlist" data-product-id="{{ $product->id_product }}">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </button>
                                                </form>
                                                <!-- Existing quick view button and others -->
                                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="mb-2 tt-category tt-line-clamp tt-clamp-1">
                                                <a href="{{ route('shop-grid') }}" class="d-inline-block text-muted fs-xxs">Rims</a>
                                            </div>
                                            <a href="{{ route('product-details', $product->id_product) }}" class="card-title fw-bold d-block mb-2 tt-line-clamp tt-clamp-2">{{ $product->nama_product }}</a>
                                            <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="flex-shrink-0">(8 Reviews)</span>
                                            </div>
                                            <h6 class="price text-danger mb-4">Rp{{ number_format($product->price_unit, 0, ',', '.') }}</h6>
                                            <form method="POST" action="{{ route('cart.store') }}">
                                                @csrf
                                                <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                                                <button type="submit" class="btn btn-outline-secondary d-block btn-md">Add to Cart</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- product showed end-->

                            <!-- Pagination -->
                            <div class="template-pagination d-flex align-items-center mt-6">
                                {{ $products->links() }}
                            </div>

                            <!--
                            <ul class="template-pagination d-flex align-items-center mt-6">
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                            -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop grid section end-->

        @include('footerheader.footer')

        <!--modal box-->

        <div class="modal fade" id="quickview_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                            <div class="row align-items-center g-4">
                                <div class="col-xl-6 align-self-end">
                                    <div class="quickview-double-slider">
                                        <div class="quickview-product-slider swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide text-center">
                                                    <img src="assets/img/products/p-lg-1.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="assets/img/products/p-lg-2.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="assets/img/products/p-lg-3.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="assets/img/products/p-lg-4.png" alt="jam" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumbnail-slider swiper mt-80">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="assets/img/products/thumb-sm-1.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="assets/img/products/thumb-sm-2.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="assets/img/products/thumb-sm-3.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="assets/img/products/thumb-sm-4.png" alt="jam" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="product-info">
                                        <h4 class="mt-1 mb-3">Three Carrot Vegetables <br> Peruvian Cuisine</h4>
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
                                        <div class="pricing mt-2">
                                            <span class="fw-bold fs-xs text-danger">$140.00</span>
                                            <span class="fw-bold fs-xs deleted ms-1">$240.00</span>
                                        </div>
                                        <div class="widget-title d-flex mt-4">
                                            <h6 class="mb-1 flex-shrink-0">Description</h6>
                                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                        </div>
                                        <p class="mb-3">Clicks-and-mortar "outside the bethinking. Interactively disseminate innovative intellectual relationships. </p>
                                        <ul class="d-flex flex-column gap-2">
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Natural ingredients</li>
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Tastes better with milk</li>
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Vitamins B2, B3, B5 and B6</li>
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Refrigerate for freshness</li>
                                        </ul>
                                        <h6 class="fs-md mb-2 mt-3">Weight:</h6>
                                        <ul class="product-radio-btn mb-4 d-flex align-items-center gap-2">
                                            <li>
                                                <input type="radio" name="weight" value="250g" checked>
                                                <label>150g</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="weight" value="250g">
                                                <label>500g</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="weight" value="250g">
                                                <label>1kg</label>
                                            </li>
                                        </ul>
                                        <div class="d-flex align-items-center gap-4 flex-wrap">
                                            <div class="product-qty d-flex align-items-center">
                                                <button class="decrese">-</button>
                                                <input type="text" value="01">
                                                <button class="increase">+</button>
                                            </div>
                                            <a href="#" class="btn btn-secondary btn-md"><span class="me-2"><i class="fa-solid fa-cart-plus"></i></span>Add to Cart</a>
                                        </div>
                                        <div class="categories mt-4">
                                            <a href="#" class="btn btn-outline btn-sm">Vegetable</a>
                                            <a href="#" class="btn btn-outline btn-sm">Healthy</a>
                                            <a href="#" class="btn btn-outline btn-sm">Organic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--modal box end-->

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
    <!--endbuild-->
</body>

</html>