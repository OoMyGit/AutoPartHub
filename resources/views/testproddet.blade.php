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
    <title>Autoparthub - Product Details - Autoparthub Automotive eCommerce Website</title>

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
                <h5 class="mb-20" style="color:#191d28; font-size: 18px; font-weight: 600;">Contact Intod</h5>
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
                <h5 class="mb-20" style="color:#191d28; font-size: 18px; font-weight: 600;">Contact Intod</h5>
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
                            <h2 class="mb-2 text-center">Product Details</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Product Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--product details start-->
        <section class="product-details-area ptb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-9">
                        <div class="product-details">
                            <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                                <div class="row align-items-center g-4">
                                    <div class="col-xl-6 align-self-end">
                                        <div class="quickview-double-slider">
                                            <div class="quickview-product-slider swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide text-center">
                                                        <img src="https://throtl.com/cdn/shop/products/5de77a34970880e41756d573a933543c_cb17ff86-a504-4419-93b4-3590c542d489_750x.png?v=1628679649" alt="jam" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-thumbnail-slider swiper mt-80">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                        <img src="https://throtl.com/cdn/shop/products/5de77a34970880e41756d573a933543c_cb17ff86-a504-4419-93b4-3590c542d489_750x.png?v=1628679649" alt="jam" class="img-fluid">
                                                    </div>
                                                    <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                        <img src="https://throtl.com/cdn/shop/products/5de77a34970880e41756d573a933543c_cb17ff86-a504-4419-93b4-3590c542d489_750x.png?v=1628679649" alt="jam" class="img-fluid">
                                                    </div>
                                                    <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                        <img src="https://throtl.com/cdn/shop/products/5de77a34970880e41756d573a933543c_cb17ff86-a504-4419-93b4-3590c542d489_750x.png?v=1628679649" alt="jam" class="img-fluid">
                                                    </div>
                                                    <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                        <img src="https://throtl.com/cdn/shop/products/5de77a34970880e41756d573a933543c_cb17ff86-a504-4419-93b4-3590c542d489_750x.png?v=1628679649" alt="jam" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="product-info">
                                            <h4 class="mt-1 mb-3">BBS LM-R 19x10 5x120 ET20 <br>Diamond Black Center Diamond Cut</h4>
                                            <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                                <ul class="d-flex align-items-center me-2">
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <span class="flex-shrink-0">(10 Reviews)</span>
                                            </div>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold fs-xs text-danger">Rp111,740,000</span>
                                            </div>
                                            <div class="widget-title d-flex mt-4">
                                                <h6 class="mb-1 flex-shrink-0">Description</h6>
                                                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                            </div>
                                            <h6 class="fs-md mb-2 mt-3">Weight:</h6>
                                            <ul class="product-radio-btn mb-4 d-flex align-items-center gap-2">
                                                <li>
                                                    <input type="radio" name="weight" value="250g" checked>
                                                    <label>14986g</label>
                                                </li>
                                            </ul>
                                            <div class="d-flex align-items-center gap-4 flex-wrap">
                                                <div class="product-qty d-flex align-items-center">
                                                    <button class="decrese">-</button>
                                                    <input type="text" value="01">
                                                    <button class="increase">+</button>
                                                </div>
                                                <a href="#" class="btn btn-secondary btn-md"><span class="me-2"><i
                                                class="fa-solid fa-bag-shopping"></i></span>Add to Cart</a>
                                            </div>
                                            <div class="tt-category-tag mt-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info-tab bg-white rounded-2 overflow-hidden pt-6 mt-4">
                                <ul class="nav nav-tabs border-bottom justify-content-center gap-5 pt-info-tab-nav">
                                    <li><a href="#description" class="active" data-bs-toggle="tab">Description</a></li>
                                    <li><a href="#info" data-bs-toggle="tab">Additional Information</a></li>
                                    <li><a href="#review" data-bs-toggle="tab">Reviews(02)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active px-4 py-5" id="description">
                                        <h6 class="mb-2">Details:</h6>
                                        <p class="mb-4">BBS LM-R 19x10 5x120 ET20 Diamond Black Center Diamond Cut</p>
                                        <ul class="list-style-type-disc mb-4">
                                    </div>
                                    <div class="tab-pane fade px-4 py-5" id="info">
                                        <h6 class="mb-2">Additional Information:</h6>
                                        <table class="w-100 product-info-table">
                                            <tr>
                                                <td class="text-dark fw-semibold">Colors</td>
                                                <td> DiamondBlack</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark fw-semibold">Weight</td>
                                                <td>14,9Kg</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade px-4 py-5" id="review">
                                        <div class="review-tab-box bg-white rounded pt-30 pb-40 px-4">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="top-left">
                                                    <h5 class="mb-2">Reviews (1)</h5>
                                                    <p class="mb-0">Get specific details about this product from customers who own it.</p>
                                                    <ul class="fs-xs text-warning d-flex mt-1">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li class="ms-2 text-dark">(4 out of 5)</li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-outline-secondary border-secondary btn-md mt-3 mt-lg-0">Write a Review</a>
                                            </div>
                                            <hr class="mt-4 mb-4">
                                            <div class="users_review">
                                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                                    <div class="top-left d-flex align-items-center">
                                                        <img src="assets/img/authors/user-1.jpg" alt="user" class="flex-shrink-0 rounded">
                                                        <div class="ms-3">
                                                            <h6 class="mb-1">Helena Garcia</h6>
                                                            <span>2 January, 2018</span>
                                                        </div>
                                                    </div>
                                                    <ul class="fs-xs text-warning d-flex">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="mt-3 mb-0">Information on technical characteristics, the delivery set, the country of manufacture and the appearance of the goods is for reference only and is based on the latest information of publication.</p>
                                            </div>
                                            <div class="users_review mt-4">
                                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                                    <div class="top-left d-flex align-items-center">
                                                        <img src="assets/img/authors/user-2.jpg" alt="user" class="flex-shrink-0 rounded">
                                                        <div class="ms-3">
                                                            <h6 class="mb-1">Helena Garcia</h6>
                                                            <span>2 January, 2018</span>
                                                        </div>
                                                    </div>
                                                    <ul class="fs-xs text-warning d-flex">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="mt-3 mb-0">Information on technical characteristics, the delivery set, the country of manufacture and the appearance of the goods is for reference only and is based on the latest information of publication.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-8">
                        <div class="gshop-sidebar">
                            <div class="sidebar-widget info-sidebar bg-white rounded-3 py-3">
                                <div class="sidebar-info-list d-flex align-items-center gap-3 p-4">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary">
                                    <i class="fa-solid fa-truck-fast"></i>
                                </span>
                                    <div class="info-right">
                                        <h6 class="mb-1 fs-md">Free Shipping</h6>
                                        <span class="fw-medium fs-xs">For orders from $50</span>
                                    </div>
                                </div>
                                <div class="sidebar-info-list d-flex align-items-center gap-3 p-4 border-top">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary">
                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                </span>
                                    <div class="info-right">
                                        <h6 class="mb-1 fs-md">100% Money Back</h6>
                                        <span class="fw-medium fs-xs">Guaranteed Product Warranty</span>
                                    </div>
                                </div>
                                <div class="sidebar-info-list d-flex align-items-center gap-3 p-4 border-top">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                    <div class="info-right">
                                        <h6 class="mb-1 fs-md">Safety & Secure</h6>
                                        <span class="fw-medium fs-xs">Call us Anytime & Anywhere</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget banner-widget mt-4 p-0 border-0">
                                <div class="vertical-banner text-center bg-white rounded-2" data-background="https://down-id.img.susercontent.com/file/0be4737f680d23db90223e49a4f178fb" style="background-image: url(&quot;https://down-id.img.susercontent.com/file/0be4737f680d23db90223e49a4f178fb&quot;);">
                                    <h5 class="mb-1">Fresh &amp; Car Fragrances</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2">
                                        <span class="hot-badge bg-danger fw-bold fs-xs position-relative text-white">HOT</span>
                                        
                                    </div>
                                    <a href="#" class="explore-btn text-primary fw-bold">Shop Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                            <div class="sidebar-widget products-widget py-5 px-4 bg-white mt-4">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Featured Products</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <div class="sidebar-products-list">
                                    <div class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="#"><img src="https://down-id.img.susercontent.com/file/2c63f5b0f7f552a725e87a68434bb757" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">Little Trees Green Apple</a>
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
                                    <div class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="#"><img src="https://throtl.com/cdn/shop/products/317b101225c2a2d30a15b30e561aec89_750x.jpg?v=1627458389" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">NRG Classic Wood Grain Steering Wheel (330mm) Wood Grain w/Chrome</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp2,560,000</span>
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
                                    <div class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="#"><img src="https://throtl.com/cdn/shop/products/a88f4b554aee1d2afc32343e02ab6b90_750x.jpg?v=1691838012" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                        <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">HKS GT5565-BB V band A/R 0.61 Turbo Kit - 14001</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp52,800,000</span>
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
                                    <div class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="#"><img src="https://throtl.com/cdn/shop/products/05b2bc69ad57c42257cac4a54df2b65c_750x.jpg?v=1627476549" alt="product" class="img-fluid"></a>
                                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                                
                                            </div>
                                        </div>
                                        <div class="card-content mt-3 mt-sm-0">
                                            <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">WeatherTech TechCare Interior Detailer 18oz Bottle</a>
                                            <div class="pricing mt-0">
                                                <span class="fw-bold fs-xxs text-danger">Rp272,000</span>
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
                            <div class="vertical-product-card rounded-bottom-2 position-relative border-0 border-top bg-white shadow-none">
                                <div class="thumbnail position-relative text-center p-4">
                                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul0-lgyitb4gbv4v70" alt="apple" class="img-fluid">
                                    <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                        <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                        <a href="#" class="rounded-btn">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Phone Holder</a>
                                    <a href="#" class="card-title fw-bold d-block mb-2">ROBOT Car Holder RT-CH18 Black</a>
                                    <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                        <ul class="d-flex align-items-center me-2">
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <span class="flex-shrink-0">(3 Reviews)</span>
                                    </div>
                                    <h6 class="price text-danger mb-4">Rp110,000</h6>
                                    <a href="#" class="btn btn-outline-secondary d-block btn-md border-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--product details end-->

        <!--related product slider start -->
        <section class="related-product-slider pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-8">
                        <div class="section-title text-center text-sm-start">
                            <h2 class="mb-0">You may be interested</h2>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="rl-slider-btns text-center text-sm-end mt-3 mt-sm-0">
                            <button class="rl-slider-btn slider-btn-prev"><i class="fas fa-arrow-left"></i></button>
                            <button class="rl-slider-btn slider-btn-next ms-3"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="rl-products-slider swiper mt-8">
                    <div class="swiper-wrapper">
                        <div class="vertical-product-card rounded-2 position-relative swiper-slide">
                            <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-12% OFF</span>
                            <div class="thumbnail position-relative text-center p-4">
                                <img src="https://throtl.com/cdn/shop/products/40468956a5d322840572c4ba59dad96e_750x.jpg?v=1655219144" alt="apple" class="img-fluid">
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Detailing</a>
                                <a href="#" class="card-title fw-bold d-block mb-2">Chemical Guys Leather Quick Detailer Care Spray - Matte Finish</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(6 Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp1,193,000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="30%" style="width: 30%;"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">6/20</span></p>
                                <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to Cart</a>
                            </div>
                        </div>
                        <div class="vertical-product-card rounded-2 position-relative swiper-slide">
                            <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-12% OFF</span>
                            <div class="thumbnail position-relative text-center p-4">
                                <img src="https://throtl.com/cdn/shop/products/53ba7a96-ce28-4165-985b-fcea0a7f8567-800_550x.jpg?v=1627445269" alt="apple" class="img-fluid">
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Interior Accessories</a>
                                <a href="#" class="card-title fw-bold d-block mb-2">BLOX Racing Limited Series 6-Speed Billet Shift Knob - Platinum</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(10 Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp816,000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="50%" style="width: 50%;"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">10/20</span></p>
                                <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to Cart</a>
                            </div>
                        </div>
                        <div class="vertical-product-card rounded-2 position-relative swiper-slide">
                            <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-12% OFF</span>
                            <div class="thumbnail position-relative text-center p-4">
                                <img src="https://throtl.com/cdn/shop/products/82410139069795c2c09eae01b4ba9049_84778efe-2280-4bdd-aa36-29b14a667f41_750x.jpg?v=1683563094" alt="apple" class="img-fluid">
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Rims</a>
                                <a href="#" class="card-title fw-bold d-block mb-2">Enkei RPF1 17x8.5 5x114.3 40mm Offset 73mm Bore Silver Wheel</a>
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
                                <h6 class="price text-danger mb-3">Rp22,400,000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="40%" style="width: 40%;"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">8/20</span></p>
                                <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to Cart</a>
                            </div>
                        </div>
                        <div class="vertical-product-card rounded-2 position-relative swiper-slide">
                            <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-2% OFF</span>
                            <div class="thumbnail position-relative text-center p-4">
                                <img src="https://throtl.com/cdn/shop/products/2fb3d664137b4e9e6e655baaa648be95_750x.jpg?v=1695035082" alt="apple" class="img-fluid">
                                <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#" class="rounded-btn">
                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z" fill="#AEB1B9"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Gauge</a>
                                <a href="#" class="card-title fw-bold d-block mb-2">Autometer Ultra-Lite 52mm Digital Wideband Air/Fuel Ratio Street Gauge</a>
                                <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                    <ul class="d-flex align-items-center me-2">
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <span class="flex-shrink-0">(5 Reviews)</span>
                                </div>
                                <h6 class="price text-danger mb-3">Rp3,250,000</h6>
                                <div class="card-progressbar mb-2 rounded-pill">
                                    <span class="card-progress bg-primary" data-progress="45%" style="width: 45%;"></span>
                                </div>
                                <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">9/20</span></p>
                                <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--related products slider end-->

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