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
    <title>Autoparthub - Blog Details - Autoparthub Automotive eCommerce Website</title>

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
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">Holiday Home Delivery We have Recently Fresh Meat & Seafood</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--blog details start-->
        <section class="blog-details pb-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-8">
                        <div class="blog-details-content bg-white rounded-2 py-6 px-5">
                            <div class="thumbnail rounded-2 overflow-hidden">
                                <img src="assets/img/blog/blog-thumb-lg-1.jpg" alt="blog thumb" class="img-fluid">
                            </div>
                            <div class="blog-meta d-flex align-items-center gap-3 flex-wrap mt-5">
                                <span class="fs-xs fw-medium"><i class="fa-solid fa-tags me-2"></i>Premium Spareparts</span>
                                <span class="fs-xs fw-medium"><i class="fa-regular fa-clock me-2"></i>Premium Spareparts</span>
                                <span class="fs-xs fw-medium"><i class="fa-regular fa-comments me-2"></i>Premium Spareparts</span>
                            </div>
                            <span class="hr-line w-100 position-relative d-block my-4"></span>
                            <p>These are the people who make your life easier. Large tiles were arranged on the counter top plate near the window of the living room, they were connected to the kitchen. The perfect way to enjoy brewing tea on low hanging fruit to identify. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Large tiles were arranged on the counter top plate near the window of the living room, they were connected to the kitchen counter through the opening in the existing building wall. For me, the most important part of improving at photography has been sharing it. Sign up for an Exposure account, or post regularly to Tumblr, or both. Tell people you're trying to get better at photography.</p>
                            <p>While reading a client's brief, we often find that the business goals and the requirements are not clearly formulated. Either we get Clients from Hell, suffer a lack of communication, or are faced with unrealistic and unclear expectations. We hear vague requests, like, “We want a new website to attract more visitors,” or, “We need a very catchy app.” As a result, we have a hard time identifying the primary design objectives. It is a professional designer’s duty to assess and plan for all project needs as well as the expected results.</p>
                            <div class="row g-4 mt-3 mb-5">
                                <div class="col-6">
                                    <div class="thumbnail">
                                        <img src="assets/img/blog/blog-thumb-3.jpg" alt="blog thumb" class="img-fluid rounded-2">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="thumbnail">
                                        <img src="assets/img/blog/blog-thumb-2.jpg" alt="blog thumb" class="img-fluid rounded-2">
                                    </div>
                                </div>
                            </div>
                            <h4>Experience is over the world visit</h4>
                            <p>These are the people who make your life easier. Large tiles were arranged on the counter top plate near the window of the living room, they were connected to the kitchen. The perfect way to enjoy brewing tea on low hanging fruit to identify. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            <blockquote class="my-6 py-6 px-5 position-relative rounded">
                                <h5 class="fw-semibold text-gray mb-0">“The perfect way to enjoy brewing tea on low hanging fruit to identify. Ut enim ad minim veniam, quis nostrud exercitation of the living room, they were connected to the kitchen” <span class="title text-dark d-inline-block">Mark Jackson</span></h5>
                                <span class="quote-icon">
                                <svg width="49" height="39" viewBox="0 0 49 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M32.5 20.5263L44.28 20.5263C43.9083 23.0668 43.0244 25.4997 41.6848 27.6698C40.3452 29.8399 38.5793 31.6994 36.5 33.1295L32.92 35.5926L35.12 39L38.7 36.5368C41.7134 34.4758 44.1846 31.6833 45.8941 28.4069C47.6037 25.1306 48.4988 21.4718 48.5 17.7553L48.5 4.10527C48.5 3.01648 48.0786 1.97229 47.3284 1.20241C46.5783 0.432522 45.5609 3.55775e-06 44.5 3.46501e-06L32.5 2.41593e-06C31.4391 2.32319e-06 30.4217 0.43252 29.6716 1.20241C28.9214 1.97229 28.5 3.01648 28.5 4.10526L28.5 16.4211C28.5 17.5098 28.9214 18.554 29.6716 19.3239C30.4217 20.0938 31.4391 20.5263 32.5 20.5263ZM4.5 20.5263L16.28 20.5263C15.9083 23.0668 15.0244 25.4997 13.6848 27.6698C12.3452 29.8399 10.5793 31.6994 8.5 33.1295L4.91999 35.5926L7.09999 39L10.7 36.5368C13.7134 34.4758 16.1846 31.6833 17.8941 28.4069C19.6037 25.1306 20.4988 21.4718 20.5 17.7553L20.5 4.10526C20.5 3.01648 20.0786 1.97229 19.3284 1.20241C18.5783 0.432519 17.5609 1.10991e-06 16.5 1.01717e-06L4.5 -3.19052e-08C3.43913 -1.24649e-07 2.42172 0.432518 1.67157 1.2024C0.921424 1.97229 0.499996 3.01648 0.499995 4.10526L0.499994 16.4211C0.499994 17.5098 0.921423 18.554 1.67157 19.3239C2.42172 20.0938 3.43913 20.5263 4.5 20.5263Z" fill="#FFE5CE"/>
                                </svg>
                            </span>
                            </blockquote>
                            <div class="row align-items-center g-4">
                                <div class="col-md-6">
                                    <div class="thumbnail">
                                        <img src="assets/img/blog/blog-thumb-4.jpg" alt="blog thumb" class="img-fluid rounded-2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-content">
                                        <h4>Our Personal Approach</h4>
                                        <p class="mb-0">These are the people who make your life easier. Large tiles were arranged on the counter top plate near the window of the living room, they were to the kitchen. The perfect way to enjoy brewing tea on low hanging fruit to identify. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-5 mb-3">You Might Be Interested In</h4>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <ul class="list-style-type-disc ps-4">
                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                        <li>If you are going to use a passage.</li>
                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                        <li>If you are going to use a passage.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-style-type-disc ps-4">
                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                        <li>If you are going to use a passage.</li>
                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                        <li>If you are going to use a passage.</li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-4">Why Investors are Looking towards Vegetable?</h4>
                            <p>Energistically conceptualize 24/7 paradigms without fully tested processes. Seamlessly create mission-critical catalysts for change with intermandated supply chains.</p>
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6">
                                    <div class="thumbnail">
                                        <img src="assets/img/blog/blog-thumb-2.jpg" alt="blog thumb" class="img-fluid rounded-2">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="thumbnail">
                                        <img src="assets/img/blog/blog-thumb-3.jpg" alt="blog thumb" class="img-fluid rounded-2">
                                    </div>
                                </div>
                            </div>
                            <p>Distinctively customize holistic information whereas multidisciplinary process improvements. Proactively facilitate long-term high-impact partnerships through resource maximizing meta-services. Dynamically predominate standardized infomediaries vis-a-vis covalent total linkage. Credibly deploy functionalized.</p>
                            <p>vitae ultricies erat elit eu lacus. Vestibulum non justo fun consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit ametturpis interd enim. Vivamus fauc ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
                            <div class="tags-social d-flex align-items-center justify-content-between flex-wrap gap-4 mt-6">
                                <div class="tags-list d-flex align-items-center gap-2 flex-wrap">
                                    <span class="title text-secondary fw-bold me-2">Tags:</span>
                                    <a href="#">Car Dealership</a>
                                    <a href="#">Breaks Discs</a>
                                    <a href="#">Car Shop</a>
                                </div>
                                <div class="bs_social_share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="bs-author-box mt-6 d-sm-flex align-items-center rounded">
                                <img src="assets/img/authors/author-lg-1.png" alt="author" class="rounded-circle flex-shrink-0">
                                <div class="author-box-content ms-sm-4 mt-4 mt-sm-0">
                                    <h6 class="mb-1">Kristin Watsons</h6>
                                    <a href="https://themetags.com" class="text-danger fw-semibold">visit: themtags.com</a>
                                    <p class="mt-2 mb-3">Progressively transition integrated content whereas efficient Objectively restore intermandated value without optimal relationships.</p>
                                    <div class="bs-author-socials">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mt-6">Comments(02)</h4>
                            <ul class="comments_list mt-6">
                                <li class="d-sm-flex">
                                    <div class="thumbnail flex-shrink-0">
                                        <img src="assets/img/authors/user-thumb-1.jpg" alt="user" class="img-fluid rounded-circle">
                                    </div>
                                    <span class="date text-danger">05.03.2021[11.00am]</span>
                                    <div class="comments_content ms-sm-4 mt-4 mt-sm-0">
                                        <h6 class="mb-3">Randy K. Melton</h6>
                                        <p>Distinctively customize holistic information whereas multidisciplinary process improve. services. Dynamically predominate standardized. </p>
                                        <a href="#" class="reply-btn"><span class="me-1"><i class="fa-solid fa-reply"></i></span>Reply</a>
                                    </div>
                                </li>
                                <li class="d-sm-flex ms-5">
                                    <div class="thumbnail flex-shrink-0">
                                        <img src="assets/img/authors/user-thumb-2.jpg" alt="user" class="img-fluid rounded-circle">
                                    </div>
                                    <span class="date text-danger">05.03.2021[11.00am]</span>
                                    <div class="comments_content ms-sm-4 mt-4 mt-sm-0">
                                        <h6 class="mb-3">Randy K. Melton</h6>
                                        <p>Distinctively customize holistic information whereas multidisciplinary process improve. services. Dynamically predominate standardized. </p>
                                        <a href="#" class="reply-btn"><span class="me-1"><i class="fa-solid fa-reply"></i></span>Reply</a>
                                    </div>
                                </li>
                            </ul>
                            <hr class="my-6">
                            <div class="comment_form_wrapper">
                                <h4>Leave a Comments</h4>
                                <p class="mb-5">Your email address will not be published. Required fields are marked*</p>
                                <form action="#" class="comment_form">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="input-field">
                                                <input type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-field">
                                                <input type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <input type="url" placeholder="Website">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <textarea placeholder="Paste Here" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-30">Post Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="gshop-sidebar">
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
                            <div class="sidebar-widget search-widget bg-white pt-5 pb-4 px-4 border-top">
                                <div class="widget-title d-flex mb-3">
                                    <h6 class="mb-0 flex-shrink-0">Recent Post</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <ul class="sidebar-posts">
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="thumbnail rounded-2 overflow-hidden">
                                            <a href="{{ route('blog-details') }}"><img src="assets/img/gallery/gallery-1.jpg" alt="blog thumb" class="img-fluid"></a>
                                        </div>
                                        <div class="posts-content">
                                            <span class="date d-block fw-medium fs-xs"><i class="fa-regular fa-clock me-2"></i>May 24, 2022</span>
                                            <a href="{{ route('blog-details') }}" class="fw-bold d-block mt-2 blog-title">Perfect quality reasonable price for your family</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="thumbnail rounded-2 overflow-hidden">
                                            <a href="{{ route('blog-details') }}"><img src="assets/img/gallery/gallery-2.jpg" alt="blog thumb" class="img-fluid"></a>
                                        </div>
                                        <div class="posts-content">
                                            <span class="date d-block fw-medium fs-xs"><i class="fa-regular fa-clock me-2"></i>May 24, 2022</span>
                                            <a href="{{ route('blog-details') }}" class="fw-bold d-block mt-2 blog-title">Perfect quality reasonable price for your family</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="thumbnail rounded-2 overflow-hidden">
                                            <a href="{{ route('blog-details') }}"><img src="assets/img/gallery/gallery-3.jpg" alt="blog thumb" class="img-fluid"></a>
                                        </div>
                                        <div class="posts-content">
                                            <span class="date d-block fw-medium fs-xs"><i class="fa-regular fa-clock me-2"></i>May 24, 2022</span>
                                            <a href="{{ route('blog-details') }}" class="fw-bold d-block mt-2 blog-title">Perfect quality reasonable price for your family</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3">
                                        <div class="thumbnail rounded-2 overflow-hidden">
                                            <a href="{{ route('blog-details') }}"><img src="assets/img/gallery/gallery-4.jpg" alt="blog thumb" class="img-fluid"></a>
                                        </div>
                                        <div class="posts-content">
                                            <span class="date d-block fw-medium fs-xs"><i class="fa-regular fa-clock me-2"></i>May 24, 2022</span>
                                            <a href="{{ route('blog-details') }}" class="fw-bold d-block mt-2 blog-title">Perfect quality reasonable price for your family</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget category-widget bg-white py-5 px-4 border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Categories</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <ul class="widget-nav mt-4">
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Apples<span class="fw-bold fs-xs total-count">08</span></a></li>
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Premium Spareparts<span class="fw-bold fs-xs total-count">09</span></a></li>
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Avocados<span class="fw-bold fs-xs total-count">06</span></a></li>
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Dried Fruits &amp; Nuts<span class="fw-bold fs-xs total-count">10</span></a></li>
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Coffee<span class="fw-bold fs-xs total-count">11</span></a></li>
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Juice Drinks<span class="fw-bold fs-xs total-count">15</span></a></li>
                                    <li><a href="{{ route('product-details') }}" class="d-flex justify-content-between align-items-center">Fresh Fish<span class="fw-bold fs-xs total-count">18</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget gallery-widget bg-white py-5 px-4 border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Gallery</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <ul class="widget-gallery-thumb d-flex align-items-center justify-content-center gap-3 flex-wrap mt-5">
                                    <li class="position-relative rounded-2 overflow-hidden">
                                        <img src="assets/img/gallery/gallery-1.jpg" alt="gallery" class="img-fluid">
                                        <a href="assets/img/gallery/gallery-lg-1.jpg"><i class="fa-solid fa-images"></i></a>
                                    </li>
                                    <li class="position-relative rounded-2 overflow-hidden">
                                        <img src="assets/img/gallery/gallery-2.jpg" alt="gallery" class="img-fluid">
                                        <a href="assets/img/gallery/gallery-lg-2.jpg"><i class="fa-solid fa-images"></i></a>
                                    </li>
                                    <li class="position-relative rounded-2 overflow-hidden">
                                        <img src="assets/img/gallery/gallery-3.jpg" alt="gallery" class="img-fluid">
                                        <a href="assets/img/gallery/gallery-lg-3.jpg"><i class="fa-solid fa-images"></i></a>
                                    </li>
                                    <li class="position-relative rounded-2 overflow-hidden">
                                        <img src="assets/img/gallery/gallery-4.jpg" alt="gallery" class="img-fluid">
                                        <a href="assets/img/gallery/gallery-lg-4.jpg"><i class="fa-solid fa-images"></i></a>
                                    </li>
                                    <li class="position-relative rounded-2 overflow-hidden">
                                        <img src="assets/img/gallery/gallery-5.jpg" alt="gallery" class="img-fluid">
                                        <a href="assets/img/gallery/gallery-lg-5.jpg"><i class="fa-solid fa-images"></i></a>
                                    </li>
                                    <li class="position-relative rounded-2 overflow-hidden">
                                        <img src="assets/img/gallery/gallery-6.jpg" alt="gallery" class="img-fluid">
                                        <a href="assets/img/gallery/gallery-lg-6.jpg"><i class="fa-solid fa-images"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget tags-widget py-5 px-4 bg-white border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0">Tags.</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <div class="mt-4 d-flex gap-2 flex-wrap">
                                    <a href="#" class="btn btn-outline btn-sm">Vegetable</a>
                                    <a href="#" class="btn btn-outline btn-sm">Healthy</a>
                                    <a href="#" class="btn btn-outline btn-sm">Meat</a>
                                    <a href="#" class="btn btn-outline btn-sm">Organic</a>
                                    <a href="#" class="btn btn-outline btn-sm">Nature</a>
                                    <a href="#" class="btn btn-outline btn-sm">food</a>
                                    <a href="#" class="btn btn-outline btn-sm">bd food</a>
                                    <a href="#" class="btn btn-outline btn-sm">fish</a>
                                    <a href="#" class="btn btn-outline btn-sm">vegetable</a>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget bg-white py-5 px-4 border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Archives</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <ul class="widget-nav mt-4">
                                    <li><a href="{{ route('blog-details') }}" class="d-flex justify-content-between align-items-center">February 2021<span class="fw-bold fs-xs total-count">08</span></a></li>
                                    <li><a href="{{ route('blog-details') }}" class="d-flex justify-content-between align-items-center">October 2021<span class="fw-bold fs-xs total-count">09</span></a></li>
                                    <li><a href="{{ route('blog-details') }}" class="d-flex justify-content-between align-items-center">April 2020<span class="fw-bold fs-xs total-count">06</span></a></li>
                                    <li><a href="{{ route('blog-details') }}" class="d-flex justify-content-between align-items-center">March 2022<span class="fw-bold fs-xs total-count">10</span></a></li>
                                    <li><a href="{{ route('blog-details') }}" class="d-flex justify-content-between align-items-center">November 2022<span class="fw-bold fs-xs total-count">11</span></a></li>
                                    <li><a href="{{ route('blog-details') }}" class="d-flex justify-content-between align-items-center">December 2022<span class="fw-bold fs-xs total-count">15</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget products-widget py-5 px-4 bg-white border-top">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Best Selling</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <div class="sidebar-products-list">
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('product-details') }}"><img src="assets/img/products/p-sm-1.png" alt="product" class="img-fluid"></a>
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
                                            <a href="{{ route('product-details') }}" class="fw-bold text-heading title d-block">European Lemon Zest</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold fs-xs deleted me-1">$240.00</span>
                                                <span class="fw-bold fs-xs text-danger">$140.00</span>
                                            </div>
                                            <a href="{{ route('product-details') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('product-details') }}"><img src="assets/img/products/p-sm-1.png" alt="product" class="img-fluid"></a>
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
                                            <a href="{{ route('product-details') }}" class="fw-bold text-heading title d-block">European Lemon Zest</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold fs-xs deleted me-1">$240.00</span>
                                                <span class="fw-bold fs-xs text-danger">$140.00</span>
                                            </div>
                                            <a href="{{ route('product-details') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="horizontal-product-card d-sm-flex align-items-center bg-white rounded-2 mt-4 gap-3">
                                        <div class="thumbnail position-relative rounded-2">
                                            <a href="{{ route('product-details') }}"><img src="assets/img/products/p-sm-1.png" alt="product" class="img-fluid"></a>
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
                                            <a href="{{ route('product-details') }}" class="fw-bold text-heading title d-block">European Lemon Zest</a>
                                            <div class="pricing mt-2">
                                                <span class="fw-bold fs-xs deleted me-1">$240.00</span>
                                                <span class="fw-bold fs-xs text-danger">$140.00</span>
                                            </div>
                                            <a href="{{ route('product-details') }}" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget banner-widget text-center mt-4" data-background="assets/img/banner/banner-5.jpg">
                                <span class="gshop-subtitle text-secondary">Super Sale 50%</span>
                                <h3>Special Sale</h3>
                                <div class="coupon fw-bold">
                                    <span>Enter Code:</span>
                                    <span class="coupon-code bg-danger text-white fs-xs">G-shop45</span>
                                </div>
                                <a href="{{ route('shop-grid') }}" class="btn btn-secondary bg-dark border-dark mt-5">Shop Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--blog details end-->

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