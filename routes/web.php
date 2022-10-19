<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Products;

Route::get('/', function () {
    return view('home');
});

//* Get all Products
Route::get('/products', function () {
    return view('productAll', [
        'title'=>"Product List",
        'products'=>Products::getProducts()
    ]);
});

//* Get Product by productId
Route::get('/products/{productId}', function ($productId) {
    return view('product', [
        'product'=>Products::getProduct($productId)
    ]);
});