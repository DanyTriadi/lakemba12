<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Lakemba 12 Coffee & Roastery
|--------------------------------------------------------------------------
*/

// Public Customer Facing Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Menu / Products
Route::get('/menu', [ProductController::class, 'index'])->name('products.index');
Route::get('/menu/{slug}', [ProductController::class, 'show'])->name('products.show');

// Cart & Orders
Route::get('/cart', [OrderController::class, 'cart'])->name('cart');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order_number}', [OrderController::class, 'show'])->name('orders.show');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Contact & Inquiry
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Authentication
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('login');
Route::get('/admin/login-portal', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Protected Dashboard
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Order Management
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::post('/orders/{id}/status', [AdminController::class, 'updateOrderStatus'])->name('orders.updateStatus');
    
    // Product Management
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('products.store');
    Route::put('/products/{id}', [AdminController::class, 'updateProduct'])->name('products.update');
    Route::delete('/products/{id}', [AdminController::class, 'deleteProduct'])->name('products.delete');
    
    // Message Management
    Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
    Route::post('/messages/{id}/toggle-read', [AdminController::class, 'toggleMessageRead'])->name('messages.toggleRead');
});
