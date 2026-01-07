<?php

use Illuminate\Support\Facades\Route; // Route es la clase que te permite escribir Route::get(...)

// Los ...Controller son los controladores donde está la lógica (cargar mocks, filtrar productos, etc.)
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CartController;

// Welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); // Cuando entras a la home (/), se ejecuta el método index() del WelcomeController.

// 
Route::get('/products-on-sale', [ProductController::class, 'onSale'])->name('products.on-sale');

Route::resource('products', ProductController::class);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// OfferController
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index'); // lista ofertas.
Route::get('/offers/{offer}', [OfferController::class, 'show'])->name('offers.show'); // 

// Carrito
Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // ver el carrito (mostrar la vista)
Route::post('/cart', [CartController::class, 'store'])->name('cart.store'); // añadir un producto (simulado)
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update'); // actualizar cantidad de un item del carrito (simulado)

// Página de contacto
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

