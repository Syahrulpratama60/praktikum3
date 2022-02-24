<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/products1', [ProductsController::class, 'productspertama'])->name('productspertama');
    Route::get('/products2', [ProductsController::class, 'productskedua'])->name('productskedua');
    Route::get('/products3', [ProductsController::class, 'productsketiga'])->name('productsketiga');
    Route::get('/products4', [ProductsController::class, 'productskeempat'])->name('productskeempat');
});

Route::prefix('news')->group(function() {
    Route::get('/news1', [NewsController::class, 'newspertama'])->name('newspertama');
    Route::get('/{id}', [NewsController::class, 'newskedua'])->name('newskedua');
});

Route::prefix('program')->group(function() {
    Route::get('/program1', [ProgramController::class, 'karir'])->name('programpertama');
    Route::get('/program2', [ProgramController::class, 'magang'])->name('programkedua');
    Route::get('/program3', [ProgramController::class, 'kunjunganIndustri'])->name('programketiga');
});

Route::get("/about-us", [AboutUsController::class, 'aboutUs'])->name('about-us');

Route::get("/contact-us", [ContactUsController::class, 'contactUs'])->name('contact-us');
