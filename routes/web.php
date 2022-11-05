<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
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
    return view('clients.index');
})->name('index');

Route::get('/product',function(){
    return view('product');
})->name('product');

Route::get('/cart',function(){
    return view('cart');
})->name('cart');

Route::get('/register', [RegisterController::class, 'getRegister'])->name('register.get');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('register.post');

Route::get('/login', [LoginController::class, 'getAuthLogin'])->name('login.get');
Route::post('/login', [LoginController::class, 'postAuthLogin'])->name('login.post');

Route::get('/home', [HomeController::class, 'index']);
