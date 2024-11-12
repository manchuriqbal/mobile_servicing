<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('billings', App\Http\Controllers\BillingController::class);
Route::resource('technicians', App\Http\Controllers\TechnicianController::class);

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/reports', [App\Http\Controllers\ReportControllar::class, 'index'])->name('reports.index');
