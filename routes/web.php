<?php

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PageView\PageViewController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.home.index');
// });

// Route::get('/about', function () {
//     return view('pages.about.index');
// });

// Route::get('/service', function () {
//     return view('pages.services.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', ProductController::class)->names('products');
    Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
});

Route::prefix('/')->group(function () {
    Route::get('/', [PageViewController::class, 'index'])->name('home');
    Route::prefix('/service')->group(function () {
        Route::get('/', [PageViewController::class, 'service'])->name('service');
        Route::resource('/product', ProductController::class)->names('product')->only(['show']);
    });
    Route::get('/about', [PageViewController::class, 'about'])->name('about');
    Route::get('/contact', [PageViewController::class, 'contact'])->name('contact');
});

require __DIR__.'/auth.php';
