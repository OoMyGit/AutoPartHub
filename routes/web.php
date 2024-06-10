<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopGridController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\BlogGridController;
use App\Http\Controllers\BlogListingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ShopGrid2Controller;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ForgetPasswordController;

// your routes
Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'update'])->name('cart.update');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/', [IndexController::class, 'Index'])->name('index');

Route::get('/shop-grid', [ShopGridController::class, 'ShopGrid'])->name('shop-grid');

Route::get('/my-account', [MyAccountController::class, 'MyAccount'])->name('my-account');
Route::get('/about', [AboutController::class, 'About'])->name('about');
Route::get('/blog-details', [BlogDetailsController::class, 'BlogDetails'])->name('blog-details');
Route::get('/blog-grid', [BlogGridController::class, 'BlogGrid'])->name('blog-grid');
Route::get('/blog-listing', [BlogListingController::class, 'BlogListing'])->name('blog-listing');
Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
//Route::get('/checkout', [CheckoutController::class, 'Checkout'])->name('checkout');
Route::post('/checkout', [TransactionController::class, 'checkout'])->name('checkout');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');
Route::get('/checkout-success', [CheckoutController::class, 'success'])->name('checkout.success');

Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::get('/coupons', [CouponsController::class, 'Coupons'])->name('coupons');
Route::get('/invoice', [InvoiceController::class, 'Invoice'])->name('invoice');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/store', [LoginController::class, 'login'])->name('login.submit');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('auth');

//Route::post('/login', [LoginController::class, 'LoginRequest']); 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/product-details/{id}', [ProductDetailsController::class, 'ProductDetails'])->name('product-details');



Route::get('/shop-grid-2', [ShopGrid2Controller::class, 'ShopGrid2'])->name('shop-grid-2');

Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.submit');
Route::get('password/reset', [ForgetPasswordController::class, 'showResetForm'])->name('password.request');
Route::post('password/reset', [ForgetPasswordController::class, 'reset'])->name('password.reset');

Route::get('/team', [TeamController::class, 'Team'])->name('team');
Route::get('/welcome', [WelcomeController::class, 'Welcome'])->name('welcome');


Route::get('/admin-signup', [AdminController::class, 'showSignupForm'])->name('admin-signup');
Route::get('/admin-login', [AdminController::class, 'showLoginForm'])->name('admin-login');
Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])->name('admin-dashboard');
Route::get('/admin-edit-product', [AdminController::class, 'showEditProduct'])->name('admin-edit-product');

Route::get('/dbconn', function(){return view ('dbconn');});


// web.php

Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');

// Route to add an item to the wishlist
Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');

// Route to remove an item from the wishlist
Route::post('/wishlist/remove', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');



