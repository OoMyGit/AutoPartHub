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
    <title>Autoparthub - Signup - Autoparthub Automotive eCommerce Website</title>

    <!--build:css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- endbuild -->
</head>

<body>
@if (session('message'))
        <div class="alert alert-danger text-center">
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

    <!--login section start-->
    <section class="login-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12 tt-login-img" data-background="storage/sparepart.png"></div>
                <div class="col-lg-5 col-12 bg-white d-flex p-0 tt-login-col shadow">
                <div class="tt-login-form-wrap p-3 p-md-6 p-lg-6 py-7 w-100">
                        <div class="mb-7">
                            <img src="storage/logo.jpg" alt="logo">
                        </div>
                        <h2 class="mb-4 h3">Hey there! <br>Welcome back <br><span class="text-secondary">Autoparthub.</span>
                        </h2>
                        <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <div class="input-field">
                                        <label class="fw-bold text-dark fs-sm mb-1">Username</label>
                                        <input type="username" name="username" placeholder="Enter your email" class="theme-input" required>
                                        @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-field check-password">
                                        <label class="fw-bold text-dark fs-sm mb-1">Password</label>
                                        <div class="check-password">
                                            <input type="password" name="password" placeholder="Password" class="theme-input" required>
                                            <span class="eye eye-icon">
                                                <i class="fa-solid fa-eye"></i>
                                            </span>
                                            <span class="eye eye-slash">
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </span>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div class="checkbox d-inline-flex align-items-center gap-2">
                                    <div class="theme-checkbox flex-shrink-0">
                                        <input type="checkbox" id="save-password" name="remember">
                                        <span class="checkbox-field">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <label class="save-password fs-sm">Remember for 30 days</label>
                                </div>
                                <a href="/password/reset" class="fs-sm">Forgot Password</a>
                            </div>
                            <div class="row g-4 mt-4">
                                <div class="col-sm-12">
                                <button type="submit" id="loginButton" class="btn btn-primary w-100">Log In</button>
                            </div>
                            </div>
                                @if (session('status'))
                                <div class="alert alert-success mt-3">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                        </form>
                        <p class="mb-0 fs-xs mt-4">Don't have an Account? <a href="{{ route('signup') }}">Sign Up</a></p>
                </div>
            </div>
        </div>
        
        <!-- <script>
            document.getElementById('loginButton').addEventListener('click', function() {
                window.location.href = "{{ route('login.submit') }}";
            });
        </script> -->
        
    </section>
    <!--login section end-->


    </div>
    <!--main content wrapper end-->


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