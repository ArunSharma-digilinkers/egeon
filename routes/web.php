<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Company\UserController;
use App\Http\Controllers\Dealer\DealerDashboardController;
use App\Http\Controllers\Dealer\WarrantyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/inverter-batteries', [PageController::class, 'talltubular'])->name('inverter-batteries');
Route::get('/inverter-battery/{id}', [PageController::class, 'talltubularbat'])->name('inverter-battery');
Route::get('/bike-batteries', [PageController::class, 'bike'])->name('bike-batteries');
Route::get('/bike-battery/{id}', [PageController::class, 'bikebat'])->name('bike-battery');
Route::get('/rickshaw-batteries', [PageController::class, 'rickshaw'])->name('rickshaw-batteries');
Route::get('/rickshaw-battery/{id}', [PageController::class, 'rickshawbat'])->name('rickshaw-battery');
Route::get('/warranty-registration', [PageController::class, 'registration'])->name('registration');

// blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/details/{slug}', [PageController::class, 'show'])->name('details.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('product', ProductController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('battery-calculator', CalculatorController::class);
});

Route::middleware(['auth', 'role:company'])->prefix('company')->name('company.')->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:distributor'])->prefix('distributor')->name('distributor.')->group(function () {
    Route::get('/dashboard', function () {
        return view('distributor.dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [DealerDashboardController::class, 'distributordash'])
        ->name('dashboard');

    Route::get('/check-warranty', [WarrantyController::class, 'check'])
        ->name('check-warranty');
});

Route::middleware(['auth', 'role:company'])->prefix('company')->name('company.')->group(function () {
    Route::get('warranties', [App\Http\Controllers\Dealer\WarrantyController::class, 'viewwarrantiescompany'])->name('warranties');
});

Route::middleware(['auth', 'role:dealer'])->prefix('dealer')->name('dealer.')->group(function () {
    Route::get('/dashboard', [DealerDashboardController::class, 'index'])->name('dashboard');
    Route::get('/register-warranty', [WarrantyController::class, 'create'])->name('warranty.create');
    Route::post('/register-warranty', [WarrantyController::class, 'store'])->name('warranty.store');
    Route::get('/view-warranty', [WarrantyController::class, 'viewwarranty'])
        ->name('view-warranty');
});

require __DIR__.'/auth.php';