<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    $products = Product::latest()->get();

    return view('pages.home', compact('products'));
})->name('home');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});