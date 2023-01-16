<?php


use App\Http\Controllers\StaticController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/p2', [StaticController::class, 'p2'])->name('home.p2');
Route::get('/p3', [StaticController::class, 'p3'])->name('home.p3');
Route::get('/p4', [StaticController::class, 'p4'])->name('home.p4');
Route::get('/p5', [StaticController::class, 'p5'])->name('home.p5');
Route::get('/p6', [StaticController::class, 'p6'])->name('home.p6');
Route::get('/p7', [StaticController::class, 'p7'])->name('home.p7');
Route::get('/p8', [StaticController::class, 'p8'])->name('home.p8');


//users
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

  
