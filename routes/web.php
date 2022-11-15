<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\product\PaginationController;
use App\Http\Controllers\cart\AddToCartController;
use App\Http\Controllers\cart\CartController;
use App\Http\Controllers\cart\DeleteCartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('template.index');
})->name('index');

Route::get('/test',function(){
    return view('clients.test');
})->name('test');

Route::get('/cart', [CartController::class, 'Cart'])->name('cart');

Route::get('/register', [RegisterController::class, 'getRegister'])->name('register.get');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('register.post');

Route::get('/login', [LoginController::class, 'getAuthLogin'])->name('login.get');
Route::post('/login', [LoginController::class, 'postAuthLogin'])->name('login.post');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/product', [PaginationController::class, 'index'])->name('product');

Route::get('/add-to-cart', [AddToCartController::class, 'AddToCart'])->name('add-to-cart');

Route::get('/delete-to-cart', [DeleteCartController::class, 'DeleteToCart'])->name('deletetocart');
