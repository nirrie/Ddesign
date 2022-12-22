<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;
use App\Http\controllers\StaticController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

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
Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/error', [StaticController::class, 'error'])->name('home.error');
Route::get('/login', [StaticController::class, 'login'])->name('home.login');
Route::get('/about', [StaticController::class, 'about'])->name('home.about');
Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');
Route::get('/gridproducts', [StaticController::class, 'gridproducts'])->name('home.gridproducts');
Route::get('/listproducts', [StaticController::class, 'listproducts'])->name('gridproducts.listproducts');
Route::get('/shoppingcart', [StaticController::class, 'shoppingcart'])->name('home.shoppingcart');
Route::get('/checkout', [StaticController::class, 'checkout'])->name('home.checkout');
Route::get('/Betaling', [StaticController::class, 'Betaling'])->name('uitchecken.betaling');
Route::get('/verwerkt', [StaticController::class, 'verwerkt'])->name('betaling.verwerkt');

// Producten
Route::get('/p1', [StaticController::class, 'p1'])->name('home.p1');

//users
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

//sessions
route::get('index', [SessionController::class, 'accessSessionData']);
//route::get('/checkout', [SessionController::class, 'accessSessionData']);

//cookies
route::get('index', [CookieController::class, 'setCookie']);
