<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Company\UserController;
use App\Http\Controllers\Dealer\DealerDashboardController;
use App\Http\Controllers\Dealer\WarrantyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/inverter-batteries', [PageController::class, 'inverter'])->name('inverter');
Route::get('/bike-batteries', [PageController::class, 'bike'])->name('bike');
Route::get('/rickshaw-batteries', [PageController::class, 'rickshaw'])->name('rickshaw');
Route::get('/warranty-registration', [PageController::class, 'registration'])->name('registration');


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
    Route::resource('battery-calculator', CalculatorController::class);
});

Route::middleware(['auth','role:company'])->prefix('company')->name('company.')->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
     Route::get('dashboard', [UserController::class,'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:distributor'])
    ->prefix('distributor')
    ->name('distributor.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('distributor.dashboard');
        })->name('dashboard');

});

Route::middleware(['auth', 'role:company'])
    ->prefix('company')
    ->name('company.')
    ->group(function () {
        Route::get('warranties', [App\Http\Controllers\Dealer\WarrantyController::class, 'viewwarrantiescompany'])
            ->name('warranties');
    });


Route::middleware(['auth', 'role:dealer'])->prefix('dealer')->name('dealer.')->group(function () {

    Route::get('/dashboard', [DealerDashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/register-warranty', [WarrantyController::class, 'create'])
        ->name('warranty.create');

    Route::post('/register-warranty', [WarrantyController::class, 'store'])
        ->name('warranty.store');
});





require __DIR__ . '/auth.php';