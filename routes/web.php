<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductPdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{category}', [HomeController::class, 'category'])->name('category');

Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');

Route::get('/products/brochure', [ProductPdfController::class, 'generate'])
    ->name('products.brochure');
