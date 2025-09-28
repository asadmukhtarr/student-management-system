<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

// For Home .. Landing Page ..
Route::get('/', [pagesController::class,'home'])->name('home');
// For Products ..
Route::get('/products',[pagesController::class,'products'])->name('products');
// For About ..
Route::get('/about',[pagesController::class,'about'])->name('about');
// For Contact ..
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
// For Checkout ..
Route::get('/checkout',[pagesController::class,'checkout'])->name('checkout');
// For Cart ..
Route::get(uri: '/cart',action: [pagesController::class,'cart'])->name('cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
