<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StaticController;

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
Route::get('/gridproducts', [StaticController::class, 'gridproducts'])->name('home.gridproducts');
  Route::get('/listproducts', [StaticController::class, 'listproducts'])->name('gridproducts.listproducts');

  
