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
    <title>Autoparthub - Contact Us - Autoparthub Automotive eCommerce Website</title>

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
                <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="assets/img/logo.png" alt="logo" /></a>
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
                        Chicago 12, Melborne City, Indonesia <br />
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
                        Chicago 12, Melborne City, Indonesia <br />
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

        <!--contact us section start-->
        <section class="contact-us-section position-relative overflow-hidden z-1 pt-80 pb-120">
            <img src="assets/img/shapes/frame-circle.svg" alt="frame circle" class="position-absolute frame z--1 d-none d-sm-block">
            <img src="assets/img/shapes/roll-2.png" alt="roll" class="position-absolute roll-2 z--1">
            <img src="assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata z--1">
            <img src="assets/img/shapes/garlic-white.png" alt="garlic" class="position-absolute garlic z--1">
            <img src="assets/img/shapes/roll-1.png" alt="roll" class="position-absolute roll-1 z--1">
            <img src="assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute leaf z--1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">Get In Touch</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Contact Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="contact-box rounded-2 bg-white overflow-hidden mt-8">
                    <div class="row g-4">
                        <div class="col-xl-5">
                            <div class="contact-left-box position-relative overflow-hidden z-1 bg-primary p-6 d-flex flex-column h-100" data-background="assets/img/shapes/circle-half-fill.png">
                                <img src="assets/img/shapes/texture-overlay.png" alt="texture" class="position-absolute w-100 h-100 start-0 top-0 z--1">
                                <h3 class="text-white mb-3">Contact Details</h3>
                                <p class="fs-sm text-white"><strong>Office Address-1:</strong> G-shop Automotive shop (United Estate<br> Of America) Co., Ltd. Bridge 8, Room 9201.</p>
                                <p class="fs-sm text-white mb-0"><strong>Office Address-2:</strong> #25 Jocker Goru Zhong Road<br> NYPD 200025 Indonesia.</p>
                                <span class="spacer my-5"></span>
                                <ul class="contact-list">
                                    <li class="d-flex align-items-center gap-3 flex-wrap">
                                        <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </span>
                                        <div class="info">
                                            <span class="fw-medium text-white fs-xs">Emergency Call</span>
                                            <h5 class="mb-0 mt-1 text-white">+90 54 3147 87 98</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3 flex-wrap mt-3">
                                        <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                        <div class="info">
                                            <span class="fw-medium text-white fs-xs">General Communication</span>
                                            <p class="mb-0 mt-1 text-white fw-medium">gshop2022@gmail.com</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-5">
                                    <span class="fw-bold text-white mb-3 d-block">Social Share:</span>
                                    <div class="social-links d-flex align-items-center gap-2">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-discord"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <form class="contact-form ps-5 ps-xl-4 py-6 pe-6" action="#">
                                <h3 class="mb-6">Need Help? Send Message</h3>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>First Name</label>
                                            <input type="text" placeholder="Saiful">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Talukdar">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Email</label>
                                            <input type="email" placeholder="You email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Phone</label>
                                            <input type="tel" placeholder="Your phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="checkbox-fields d-flex align-items-center gap-3 flex-wrap my-2">
                                            <div class="single-field d-inline-flex align-items-center gap-2">
                                                <div class="theme-checkbox">
                                                    <input type="checkbox" id="delivery">
                                                    <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                                </div>
                                                <label for="delivery" class="text-dark fw-semibold">Delivery Problem</label>
                                            </div>
                                            <div class="single-field d-inline-flex align-items-center gap-2">
                                                <div class="theme-checkbox">
                                                    <input type="checkbox" id="service">
                                                    <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                                </div>
                                                <label for="service" class="text-dark fw-semibold">Customer Service</label>
                                            </div>
                                            <div class="single-field d-inline-flex align-items-center gap-2">
                                                <div class="theme-checkbox">
                                                    <input type="checkbox" id="others">
                                                    <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                                </div>
                                                <label for="others" class="text-dark fw-semibold">Others Service</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="label-input-field">
                                            <label>Messages</label>
                                            <textarea placeholder="Write your message" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-md rounded-1 mt-6">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->


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