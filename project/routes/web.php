<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\admin\usersController;

// Cient Side Routes ...
// For Home .. Landing Page ..
Route::get('/', [pagesController::class,'home'])->name('home');
// For Products ..
Route::get('/products',[pagesController::class,'products'])->name('products');
Route::get('/product/{id}',[pagesController::class,'show'])->name('product.client.show');
// For About ..
Route::get('/about',[pagesController::class,'about'])->name('about');
// For Contact ..
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
// For Checkout ..
Route::get('/checkout',[pagesController::class,'checkout'])->name('checkout');
// For Cart ..

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/cart', [pagesController::class, 'cart'])->name('cart');
    Route::post('/checkout/place', [pagesController::class, 'place_order'])->name('checkout.place');
    Route::get('/cart/add/{id}', [pagesController::class, 'add_to_cart'])->name('add.cart');
    Route::post('/cart/update/{id}', [pagesController::class, 'update_cart'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [pagesController::class, 'remove_cart'])->name('cart.remove');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('client.dashboard');
// Admin Side Routes ...
// Dashboard & Common Pages
Route::prefix('admin')->middleware('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('analytics');

    // Orders Group
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/new', [AdminController::class, 'newOrders'])->name('new');
        Route::get('/history', [AdminController::class, 'orderHistory'])->name('history');
    });
    Route::prefix('orders')->group(function(){
        Route::get('/view/{id}', [AdminController::class, 'viewOrder'])->name('orders.view');
        Route::get('/complete/{id}', [AdminController::class, 'completeOrder'])->name('orders.complete');
    });
    Route::resource('users',usersController::class);
    Route::resource('/product',productController::class);
    // Products Group
    Route::prefix('products')->name('products.')->group(function () {
        Route::resource('/category', categoryController::class);
    });

});
Route::get('/logout/admin',function(){
    Auth::logout();
    return redirect(route('home'));
})->name('admin.logout');