<?php

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


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

use App\Http\Controllers\PartnerController;
// use App\Http\Controllers\DeliveryController;

Route::resource('partners', PartnerController::class);
// Route::get('/deliveries/create', [DeliveryController::class, 'create'])->name('deliveries.create');
// Route::post('/deliveries', [DeliveryController::class, 'store'])->name('deliveries.store');

