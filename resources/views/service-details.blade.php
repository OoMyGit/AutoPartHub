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
    <title>Autoparthub - Service Details - Autoparthub Automotive eCommerce Website</title>

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

        <!--service details-->
        <section class="service-details ptb-120">
            <div class="container">
                <div class="row g-5 g-xl-4">
                    <div class="col-xl-3">
                        <ul class="service-nav">
                            <li><a href="{{ route('service-details') }}" class="active">Our Service</a></li>
                            <li><a href="{{ route('service-details') }}">Organic Store Services</a></li>
                            <li><a href="{{ route('service-details') }}">Agriculture Products</a></li>
                            <li><a href="{{ route('service-details') }}">Milk Sweet Products</a></li>
                            <li><a href="{{ route('service-details') }}">Planting Services</a></li>
                            <li><a href="{{ route('service-details') }}">Delivery Service</a></li>
                            <li><a href="{{ route('service-details') }}">Fishers Service</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-9">
                        <div class="details-content">
                            <img src="assets/img/banner/banner-7.jpg" alt="banner" class="img-fluid rounded-3">
                            <h2 class="mt-7 mb-4">Organic Store Services</h2>
                            <p>Organic means growing our food, which is to nourish us, without chemical aids during the growing process such as fertilisers, pesticides, fungcides, herbacides, larbicides etcLorem Ipsum is simply the dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard to on dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                            <div class="row g-4 mt-4">
                                <div class="col-lg-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4">
                                        <span class="box-icon d-inline-flex align-items-center justify-content-center rounded flex-shrink-0 bg-white">
                                        <img src="assets/img/icons/truck.svg" alt="truck" class="img-fluid">
                                    </span>
                                        <div class="content-right">
                                            <h5 class="mb-2">Fast Delivery</h5>
                                            <p class="mb-0">magnam aliquam quaerat voluptatem. Ut enim ad minima veniam nostrum exercitationem.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4">
                                        <span class="box-icon d-inline-flex align-items-center justify-content-center rounded flex-shrink-0 bg-white">
                                        <img src="assets/img/icons/price.svg" alt="truck" class="img-fluid">
                                    </span>
                                        <div class="content-right">
                                            <h5 class="mb-2">Reasonable Price</h5>
                                            <p class="mb-0">magnam aliquam quaerat voluptatem. Ut enim ad minima veniam nostrum exercitationem.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4">
                                        <span class="box-icon d-inline-flex align-items-center justify-content-center rounded flex-shrink-0 bg-white">
                                        <img src="assets/img/icons/location-tracking.svg" alt="truck" class="img-fluid">
                                    </span>
                                        <div class="content-right">
                                            <h5 class="mb-2">Location Tracking</h5>
                                            <p class="mb-0">magnam aliquam quaerat voluptatem. Ut enim ad minima veniam nostrum exercitationem.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4">
                                        <span class="box-icon d-inline-flex align-items-center justify-content-center rounded flex-shrink-0 bg-white">
                                        <img src="assets/img/icons/money-back.svg" alt="truck" class="img-fluid">
                                    </span>
                                        <div class="content-right">
                                            <h5 class="mb-2">Money back guarantee</h5>
                                            <p class="mb-0">magnam aliquam quaerat voluptatem. Ut enim ad minima veniam nostrum exercitationem.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 align-items-center mt-4">
                                <div class="col-xl-6">
                                    <div class="left-desc">
                                        <h3 class="mb-3">How to Benefited G-Shop</h3>
                                        <p class="mb-0">Organic means growing our food, which is to nourish without chemical aids during the growing process such as fertilisers, pesticides, fungcides, herbacides, larbicides etcLorem Ipsum is-simply the dummy text of the printing type setting-industry. Lorem Ipsum has been the industry’s standard to ondummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="video-content position-relative">
                                        <img src="assets/img/gallery/girl.jpg" alt="not found" class="img-fluid rounded">
                                        <a href="https://www.youtube.com/watch?v=6WZOxnYi4Cs" class="video-popup-btn bg-secondary text-white rounded-circle position-absolute"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="download-box d-flex flex-wrap gap-4 align-items-center justify-content-between position-relative rounded-3 p-5 overflow-hidden z-1 mt-8 mb-7">
                                <div class="d-inline-flex align-items-center gap-4">
                                    <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white text-secondary">
                                    <svg width="23" height="30" viewBox="0 0 23 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.3169 6.43312L16.0669 0.183105C15.9497 0.065918 15.791 0 15.625 0H2.49996C1.12119 0 0 1.12119 0 2.50002V27.5C0 28.8788 1.12119 30 2.50002 30H20C21.3788 30 22.5 28.8788 22.5 27.5V6.87498C22.5 6.70898 22.4341 6.55031 22.3169 6.43312ZM16.25 2.13381L20.3662 6.25002H17.5C16.8109 6.25002 16.25 5.6891 16.25 5.00004V2.13381V2.13381ZM21.25 27.5C21.25 28.189 20.6891 28.75 20 28.75H2.50002C1.81096 28.75 1.25004 28.189 1.25004 27.5V2.50002C1.25004 1.81096 1.81096 1.25004 2.50002 1.25004H15V5.00004C15 6.37881 16.1212 7.5 17.5 7.5H21.25V27.5Z" fill="#FF7C08"/>
                                        <path d="M14.4366 18.3478C13.858 17.8925 13.3081 17.4244 12.9419 17.0581C12.4658 16.5821 12.0416 16.1206 11.673 15.6812C12.248 13.9045 12.5 12.9883 12.5 12.5C12.5 10.4254 11.7505 10 10.625 10C9.76992 10 8.75004 10.4443 8.75004 12.5598C8.75004 13.4925 9.26092 14.6247 10.2735 15.9406C10.0257 16.6968 9.73453 17.569 9.4074 18.5523C9.2499 19.0241 9.07904 19.4611 8.89834 19.8651C8.75127 19.9305 8.60842 19.997 8.47049 20.0659C7.97367 20.3144 7.50188 20.5377 7.06424 20.7453C5.06836 21.6901 3.75 22.3151 3.75 23.5492C3.75 24.4452 4.72354 25 5.625 25C6.78709 25 8.54186 23.4479 9.82359 20.8331C11.1541 20.3082 12.8082 19.9194 14.1138 19.6759C15.1599 20.4803 16.3153 21.25 16.875 21.25C18.4247 21.25 18.75 20.354 18.75 19.6026C18.75 18.125 17.0617 18.125 16.25 18.125C15.9979 18.125 15.3217 18.1995 14.4366 18.3478ZM5.625 23.75C5.26793 23.75 5.02623 23.5816 4.99998 23.5492C4.99998 23.1061 6.32139 22.4799 7.59949 21.8744C7.68064 21.836 7.76309 21.7975 7.8467 21.7578C6.90797 23.119 5.97961 23.75 5.625 23.75ZM10 12.5598C10 11.25 10.4065 11.25 10.625 11.25C11.067 11.25 11.2501 11.25 11.2501 12.5C11.2501 12.7637 11.0743 13.4229 10.7526 14.452C10.2618 13.6963 10 13.0488 10 12.5598ZM10.4791 19.2774C10.5182 19.1687 10.5561 19.0589 10.5927 18.9478C10.8246 18.252 11.0334 17.627 11.2195 17.0642C11.4789 17.3499 11.7585 17.6423 12.0582 17.9419C12.1754 18.0591 12.4659 18.3228 12.8529 18.6529C12.0825 18.8208 11.2628 19.0289 10.4791 19.2774ZM17.5 19.6027C17.5 19.8835 17.5 20 16.9202 20.0037C16.7499 19.9671 16.3562 19.7352 15.8704 19.4044C16.0467 19.3848 16.1767 19.3751 16.25 19.3751C17.1735 19.3751 17.4353 19.4654 17.5 19.6027Z" fill="#FF7C08"/>
                                    </svg>
                                </span>
                                    <div>
                                        <h4 class="mb-2">Download G-Shop Flyer</h4>
                                        <h6 class="mb-0 fw-semibold text-gray">[form 4] pdf.4mb</h6>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-secondary rounded-1">Download Now</a>
                            </div>
                            <h3 class="mb-3">Other Service</h3>
                            <p class="mb-5">Organic means growing our food, which is to nourish us, without chemical aids during the growing process such as fertilisers, pesticides, fungcides, herbacides, larbicides etcLorem Ipsum is simply the dummy text of the printing and typesetting industry. Lorem Ipsum has make a type specimen book. It has survived not only five centuries.</p>
                            <div class="row g-4 justify-content-center mt-5">
                                <div class="col-lg-6 col-xl-4">
                                    <div class="icon-box rounded-3 py-7 px-4">
                                        <div class="icon-wrapper mb-4 position-relative">
                                            <img src="assets/img/icons/cart-color.svg" alt="icon" class="img-fluid icon-color">
                                            <img src="assets/img/icons/cart-white.svg" alt="icon" class="img-fluid icon-white">
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-3">Agriculture Products</h5>
                                        </a>
                                        <p class="mb-5">Based applications flexible supply chains. evolve principle-centered whiteboard stand-alone.</p>
                                        <a href="#" class="explore-btn fw-bold">Explore More<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="icon-box rounded-3 py-7 px-4">
                                        <div class="icon-wrapper mb-4 position-relative">
                                            <img src="assets/img/icons/milk-color.svg" alt="icon" class="img-fluid icon-color">
                                            <img src="assets/img/icons/milk-white.svg" alt="icon" class="img-fluid icon-white">
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-3">Milk Sweet Products</h5>
                                        </a>
                                        <p class="mb-5">Based applications flexible supply chains. evolve principle-centered whiteboard stand-alone.</p>
                                        <a href="#" class="explore-btn fw-bold">Explore More<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="icon-box rounded-3 py-7 px-4">
                                        <div class="icon-wrapper mb-4 position-relative">
                                            <img src="assets/img/icons/delivery-color.svg" alt="icon" class="img-fluid icon-color">
                                            <img src="assets/img/icons/delivery-white.svg" alt="icon" class="img-fluid icon-white">
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-3">Delivery Service</h5>
                                        </a>
                                        <p class="mb-5">Based applications flexible supply chains. evolve principle-centered whiteboard stand-alone.</p>
                                        <a href="#" class="explore-btn fw-bold">Explore More<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--service details end-->

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