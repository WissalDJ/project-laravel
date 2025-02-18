<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';

// Public Routes
Route::get('/', function () {
    return view('products');
})->name('products');

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
       // Partner Routes
    Route::prefix('partners')->group(function () {
        Route::get('/', [PartnerController::class, 'index'])->name('partners.index');
        Route::get('/create', [PartnerController::class, 'create'])->name('partners.create');
        Route::post('/', [PartnerController::class, 'store'])->name('partners.store');
        // routes PDF and excel  
        Route::get('/pdf', [PartnerController::class, 'generatePdf'])->name('partners.pdf');
        Route::get('/export', [PartnerController::class, 'export'])->name('partners.export');

        Route::get('/{partner}', [PartnerController::class, 'show'])->name('partners.show');
        Route::delete('/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
        // Partner Profile Routes
        Route::get('/{partner}/profile', [PartnerController::class, 'show'])->name('partners.profile');
        Route::get('/{partner}/profile/edit', [PartnerController::class, 'edit'])->name('partners.profile.edit');
        Route::patch('/{partner}/profile', [PartnerController::class, 'update'])->name('partners.profile.update');
    });
    // products  Routes
    Route::resource('products', ProductController::class);
    
    Route::get('couriers/profile', [CourierController::class, 'profile'])->name('courier.profile');
    Route::resource('couriers', CourierController::class);  

    Route::get('/profile', [CourierController::class, 'profile'])->name('couriers.profile');
    Route::prefix('orders')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/gotoproducts', [OrderController::class, 'gotoproducts'])->name('orders.gotoproducts'); // Ensure this is GET
        Route::get('add/{id}', [OrderController::class, 'addToCart'])->name('orders.add');
        Route::post('update/{id}', [OrderController::class, 'updateCart'])->name('orders.update');
        Route::get('remove/{id}', [OrderController::class, 'removeFromCart'])->name('orders.remove');
    });
    Route::get('/produits/{id}/page-description-food', [ProductController::class, 'showDescription1'])->name('produits.page-description-food');
    Route::get('/produits/{id}/page-description-pastryShop', [ProductController::class, 'showDescription2'])->name('produits.page-description-pastryShop');
    Route::get('/produits/{id}/page-description-glacier', [ProductController::class, 'showDescription3'])->name('produits.page-description-glacier');
    Route::get('/contact', function(){return view('products.contact');})->name('contact');
});

