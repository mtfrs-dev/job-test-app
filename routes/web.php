<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::controller(ProductController::class)->as('product.')->group(function () {
    Route::get('our-products', 'index')->name('index');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');