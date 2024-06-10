
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Autoparthub Automotive  eCommerce html template. Multivendor responsive eCommerce template">
    <meta name="author" content="ThemeTags">
    <meta name="keywords" content="Autoparthub Automotive  ecommerce, admin template, online shop, e-commerce, ecommerce template, marketplace, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        .product-details {
            margin: 50px 0;
        }
        .product-image {
            max-width: 100%;
            height: auto;
        }
        .product-info {
            margin-top: 20px;
        }
        .product-name {
            font-size: 2rem;
            font-weight: bold;
        }
        .product-description {
            margin-top: 15px;
        }
        .product-price {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #28a745;
        }
        .add-to-cart {
            margin-top: 30px;
        }
        .related-products {
            margin-top: 30px;
        }
        .related-product {
            margin-bottom: 20px;
        }
        .related-product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
        
@include("footerheader.header")
    <div class="container ">
        <div class="row product-details mt-5 ">
            <div class="col-md-8 bg-white ">
                <div class="row">
                    <div class="col-md-6 ">
                        <img src="{{ $product->image }}" alt="{{ $product->nama_product }}" class="product-image">
                    </div>
                    <div class="col-md-6 product-info bg-white ">
                        <div class="product-name">{{ $product->nama_product }}</div>
                        <div class="product-description">{{ $product->description }}</div>
                        <div class="product-price">Rp{{ number_format($product->price_unit, 2) }}</div>
                        <form action="{{ route('cart.store') }}" method="POST" class="add-to-cart">
                            @csrf
                            <input type="hidden" name="id_product" value="{{ $product->id_product }}">
                           
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Other product</h4>
                <div class="related-products">
                    @foreach($other as $others)
                        <div class="related-product">
                            <img src="{{ $others->image }}" alt="{{ $others->nama_product }}">
                            <div class="related-product-name">{{ $others->nama_product }}</div>
                            <div class="related-product-price">${{ number_format($others->price_unit, 2) }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    @include('footerheader.footer')
</body>
</html>
