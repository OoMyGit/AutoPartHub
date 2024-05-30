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
    <title>Autoparthub - About Us - Autoparthub Automotive eCommerce HTML Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- endbuild -->
</head>

<body>

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
                <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="storage/logo.jpg" alt="logo" /></a>
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
                        Surabaya, East Java, Indonesia <br />
                        <a href="tel:+8801682648101">(+62) 123-456-789</a> <br />
                        <a href="mailto:info@example.com">autoparthub@gmail.com</a>
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
                <a href="#" class="d-inline-block mb-5"><img src="assets/img/logo.png" alt="logo" /></a>
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
                                <li><a href="{{ route('shop-grid-2') }}">Shop Grid V2</a></li>
                                <li><a href="{{ route('product-details') }}">Product Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Blog<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="{{ route('blog-grid') }}">Blog Grid</a></li>
                                <li><a href="{{ route('blog-listing') }}">Blog List</a></li>
                                <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('service-details') }}">Service Details</a></li>
                                <li><a href="{{ route('my-account') }}">My Account</a></li>
                                <li><a href="{{ route('cart') }}">Cart</a></li>
                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                <li><a href="{{ route('invoice') }}">Invoice</a></li>
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
                        <a href="tel:+8801682648101">(+62) 123-456-789</a> <br />
                        <a href="mailto:info@example.com">autoparthub@gmail.com</a>
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
            <img src="assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata-xs z--1 vector-shape">
            <img src="assets/img/shapes/onion.png" alt="onion" class="position-absolute z--1 onion start-0 top-0 vector-shape">
            <img src="assets/img/shapes/frame-circle.svg" alt="frame circle" class="position-absolute z--1 frame-circle vector-shape">
            <img src="assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
            <img src="assets/img/shapes/garlic-white.png" alt="garlic" class="position-absolute z--1 garlic vector-shape">
            <img src="assets/img/shapes/roll-1.png" alt="roll" class="position-absolute z--1 roll vector-shape">
            <img src="assets/img/shapes/roll-2.png" alt="roll" class="position-absolute z--1 roll-2 vector-shape">
            <img src="assets/img/shapes/pata-xs.svg" alt="roll" class="position-absolute z--1 pata-xs-2 vector-shape">
            <img src="assets/img/shapes/tomato-half.svg" alt="tomato" class="position-absolute z--1 tomato-half vector-shape">
            <img src="assets/img/shapes/tomato-slice.svg" alt="tomato" class="position-absolute z--1 tomato-slice vector-shape">
            <img src="assets/img/shapes/cauliflower.png" alt="tomato" class="position-absolute z--1 cauliflower vector-shape">
            <img src="assets/img/shapes/leaf-gray.png" alt="tomato" class="position-absolute z--1 leaf-gray vector-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">About Us</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-semibold" aria-current="page"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item fw-semibold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-semibold" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--about section start-->
        <section class="pt-120 ab-about-section position-relative z-1 overflow-hidden">
            <img src="assets/img/shapes/mango.png" alt="mango" class="position-absolute mango z--1">
            <div class="container">
                <div class="row g-5 g-xl-4 align-items-center">
                    <div class="col-xl-6">
                        <div class="ab-left position-relative">
                            <img src="assets/img/about/ab-1.png" alt="image" class="img-fluid">
                            <div class="text-end">
                                <div class="ab-quote p-4 text-start">
                                    <h4 class="mb-0 fw-normal text-white">“Unleash the Full Potential of Your Race Car with Our Premium Spare Parts!” <span class="fs-md fw-medium position-relative"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ab-about-right">
                            <div class="subtitle d-flex align-items-center gap-3 flex-wrap">
                                <span class="gshop-subtitle">100% Original Parts</span>
                                <span>
                                  <svg width="78" height="16" viewBox="0 0 78 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <line x1="0.0138875" y1="7.0001" x2="72.0139" y2="8.0001" stroke="#FF7C08" stroke-width="2"/>
                                      <path d="M78 8L66 14.9282L66 1.0718L78 8Z" fill="#FF7C08"/>
                                  </svg>    
                              </span>
                            </div>
                            <h2 class="mb-4">Make your car better using<br> premium sparepart</h2>
                            <p class="mb-8">Elevate Your Car with Top-Notch Spare Parts</p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="image-box py-6 px-4 image-box-border">
                                        <div class="icon position-relative">
                                            <img src="assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                        </div>
                                        <h4 class="mt-3">Our Mission</h4>
                                        <p class="mb-0">deliver premium racing spare parts that enhance vehicle performance and reliability. We are committed to continuous innovation, exceptional quality, and superior customer service, ensuring that every racer has the tools they need to excel. Through our expertise and passion for racing, we strive to support and inspire the racing community worldwide.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-box py-6 px-4 image-box-border">
                                        <div class="icon position-relative">
                                            <img src="assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                        </div>
                                        <h4 class="mt-3">Our Vision</h4>
                                        <p class="mb-0">To be the leading provider of innovative, high-performance racing spare parts globally, empowering racers to achieve unparalleled success on the track.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--about section end-->

        <!--brands section start-->
        <section class="brands-section ptb-120 position-relative z-1 overflow-hidden service-section">
            <img src="storage/bg-shape-4.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1 bg-shape">
            <div class="container">
                <div class="brand-wrapper px-5 rounded-4">
                    <h4 class="section-title mb-0">The Most Popular Brands</h4>
                    <div class="brands-slider swiper px-2 pt-4 pb-7">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide brand-item rounded">
                                <img src="https://1000logos.net/wp-content/uploads/2020/07/HKS-Logo.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="https://www.cdnlogo.com/logos/a/58/aem2.svg" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="https://excelerateperformance.com/wp-content/uploads/2021/09/injen-logo.png" alt="brand" class="img-fluid">
                            </div>    
                            <div class="swiper-slide brand-item rounded">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/K%26N_Plain_Logo.svg" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="https://cdn.worldvectorlogo.com/logos/ngk-3.svg" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/BBS_logo.svg/1200px-BBS_logo.svg.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--brands section end-->

        <!--feature section start-->
        <section class="about-section bg-shade position-relative z-1">
            <img src="storage/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
            <img src="assets/img/shapes/roll-color.png" alt="roll" class="position-absolute roll-color z--1" data-parallax='{"y": -50}'>
            <img src="assets/img/shapes/roll-color-curve.png" alt="roll" class="position-absolute roll-color-curve z--1" data-parallax='{"y": 50}'>
            <img src="assets/img/shapes/onion-color.png" alt="onion" class="position-absolute onion-color z--1" data-parallax='{"x": -30}'>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2 class="mb-3">Our Working Ability</h2>
                            <p class="mb-0">Assertively target market lorem ipsum is simply free text available dolor incididunt simply free ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center g-4 mt-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="assets/img/icons/icon-1.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">3256</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Products</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="assets/img/icons/icon-2.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">2456</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Orders</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="assets/img/icons/icon-3.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">1250</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Visitors</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="assets/img/icons/icon-4.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">1245</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Delivery</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feature section end-->

        <!--feedback section start-->
        <section class="feedback-section pt-100 pb-120 position-relative z-1 overflow-hidden service-section">
            <img src="storage/bg-shape-4.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1 bg-shape">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-7">
                        <div class="clients_thumb">
                            <img src="assets/img/about/clients.png" alt="clients" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="swiper feedback-slider-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="assets/img/authors/client-1.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with compelling "outside the box" thinking. Interactivel product distinctive paradigms whereas one-to-one intellectual capital. resource sucking services. Objectively customize vertical.”</p>
                                </div>
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="assets/img/authors/client-2.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with compelling "outside the box" thinking. Interactivel product distinctive paradigms whereas one-to-one intellectual capital. resource sucking services. Objectively customize vertical.”</p>
                                </div>
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="assets/img/authors/client-3.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with compelling "outside the box" thinking. Interactivel product distinctive paradigms whereas one-to-one intellectual capital. resource sucking services. Objectively customize vertical.”</p>
                                </div>
                            </div>
                            <div class="slider-arrows text-end mt-5">
                                <button type="button" class="fd2-arrow-left"><i class="fas fa-angle-left"></i></button>
                                <button type="button" class="fd2-arrow-right"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feedback section end-->

        <!--team section start-->
        <section class="grostore-team-section pt-6 bg-shade position-relative z-1 overflow-hidden">
            <img src="storage/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
            <div class="container">
                <div class="row align-items-center g-3">
                    <div class="col-xl-3">
                        <div class="section-title">
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <h6 class="mb-0 gshop-subtitle text-secondary">Team Members</h6>
                                <span>
                                  <svg width="58" height="10" viewBox="0 0 58 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6"/>
                                      <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08"/>
                                  </svg>
                              </span>
                            </div>
                            <h2 class="mb-3">Our Online Customer Help! Member</h2>
                            <p class="mb-7">Rationally encounter extremely painful there anyone.</p>
                            <div class="d-flex align-items-center gap-3">
                                <button type="button" class="team-slider-prev-btn team-slider-btn"><i class="fas fa-angle-left"></i></button>
                                <button type="button" class="team-slider-next-btn team-slider-btn"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="swiper team-slider">
                            <div class="swiper-wrapper">
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="assets/img/authors/team-1.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Kwandy Chandra</h5>
                                    <span>Founder &amp; Programmer</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="assets/img/authors/team-2.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Kent Lee Tjandra</h5>
                                    <span>Founder &amp; Programmer</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="assets/img/authors/team-1.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Juan Sebastian Prasetyo</h5>
                                    <span>Founder &amp; Programmer</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="assets/img/authors/team-2.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Steivan Henry Octavian</h5>
                                    <span>Founder &amp; Programmer</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="assets/img/authors/team-2.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Ricky Jonathan Harianto Tjahjono</h5>
                                    <span>Founder &amp; Programmer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--team section end-->

        <!--call to action start-->
        <section class="cta-section pb-120">
            <div class="container">
                <div class="cta-box rounded text-center" data-background="assets/img/banner/cta-banner.jpg">
                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-2">
                        <h6 class="mb-0 text-secondary gshop-subtitle">Weekend Offer</h6>
                        <span>
                          <svg width="58" height="10" viewBox="0 0 58 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6"/>
                              <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08"/>
                          </svg>   
                      </span>
                    </div>
                    <h3 class="mb-5">Automotive Sparepart Up to 40% off</h3>
                    <a href="{{ route('shop-grid') }}" class="btn btn-secondary">Shop Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
        </section> <!--call to action end-->

        <!--about us section-->
        <section class="about-us-section pb-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-5">
                        <div class="about-us-left position-relative">
                            <img src="assets/img/about/ab-2.png" alt="not found" class="img-fluid">
                            <div class="exp-box p-3 bg-white rounded-circle position-absolute">
                                <div class="bg-secondary w-100 h-100 rounded-circle d-flex align-items-center justify-content-center flex-column">
                                    <h2 class="text-white">14+</h2>
                                    <span class="h6 text-white">Year's Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-us-right">
                            <div class="section-title-mx mb-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                                    <h6 class="mb-0 gshop-subtitle text-secondary">Why Choose Us</h6>
                                    <span>
                                      <svg width="58" height="10" viewBox="0 0 58 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6"/>
                                          <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08"/>
                                      </svg>
                                  </span>
                                </div>
                                <h2 class="mb-3">We do not Buy from the Open Market</h2>
                                <p class="mb-0">Compellingly fashion intermandated opportunities and multimedia based fnsparent e-business.</p>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">Trusted Partner</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">Return Policy</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">100% Premium Sparepart</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">Secured Payment</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--about us section end-->

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
    <!--endbuild-->
</body>

</html>