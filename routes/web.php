<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('billing', App\Http\Controllers\BillingController::class);

Route::get('/technician', [App\Http\Controllers\TechnicianController::class, 'index'])->name('technician.index');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
