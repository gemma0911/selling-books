<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\cart\AddToCartController;
use App\Http\Controllers\cart\CartController;
use App\Http\Controllers\cart\DeleteCartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PaginatisonController;
use App\Http\Controllers\SaleAndNewController;
use App\Http\Controllers\cart\EditCartController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\admin\AddProductController;
use App\Http\Controllers\SearchProductController;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
Route::get('/product', [PaginatisonController::class, 'index'])->name('product');

Route::get('/searchProduct',[SearchProductController::class,'index'])->name('searchproduct');

Route::get('/search', [CategoryController::class, 'index'])->name('search');
Route::get('/search1', [CategoryController::class, 'index1'])->name('category');
Route::get('/search2', [CategoryController::class, 'index2'])->name('category');
Route::get('/search3', [CategoryController::class, 'index3'])->name('category');
Route::get('/search4', [CategoryController::class, 'index4'])->name('category');

Route::get('/search5', [SaleAndNewController::class, 'sale']);
Route::get('/search6', [SaleAndNewController::class, 'new']);
Route::get('/search7', [SaleAndNewController::class, 'saleandnew']);

Route::get('/price1', [PriceController::class, 'index1'])->name('price');
Route::get('/price2', [PriceController::class, 'index2'])->name('price');
Route::get('/price3', [PriceController::class, 'index3'])->name('price');
Route::get('/price4', [PriceController::class, 'index4'])->name('price');
Route::get('/price5', [PriceController::class, 'index5'])->name('price');
Route::get('/price6', [PriceController::class, 'index6'])->name('price');
Route::get('/price7', [PriceController::class, 'index7'])->name('price');

Route::get('/payment',[PaymentController::class,'index'])->name('payment');

Route::get('/register', [RegisterController::class, 'getRegister'])->name('register.get');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('register.post');

Route::get('/login', [LoginController::class, 'getAuthLogin'])->name('login.get');
Route::post('/login', [LoginController::class, 'postAuthLogin'])->name('login.post');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/add-to-cart', [AddToCartController::class, 'AddToCart'])->name('add-to-cart');
Route::get('/delete-to-cart', [DeleteCartController::class, 'DeleteToCart'])->name('deletetocart');
Route::get('/edit-to-cart', [EditCartController::class, 'EditToCart'])->name('edit-to-cart');

Route::get('/product-detail', [DetailProductController::class, 'index'])->name('productdetail');

Route::get('/admin',function(){
    return view("template.admin.index");
});

Route::prefix('/admin')->group(function () {
    Route::get('/',function(){
        return view("template.admin.index");
    });
    Route::get("/add",[AddProductController::class,'index'])->name('add');
    Route::get("/add-product",[AddProductController::class,'addProduct'])->name('add-product');
});
