<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/inverter-batteries', [PageController::class, 'inverter'])->name('inverter');
Route::get('/bike-batteries', [PageController::class, 'bike'])->name('bike');
Route::get('/rickshaw-batteries', [PageController::class, 'rickshaw'])->name('rickshaw');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix'=> 'admin', 'middleware' => ['auth']], function(){
    Route::resource('product', ProductController::class);
    Route::resource('blog', BlogController::class);
});

require __DIR__ . '/auth.php';

