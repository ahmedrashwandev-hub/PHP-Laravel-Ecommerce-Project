<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $result = DB::table('categories')->get();
    return view('welcome',[ 'categories' => $result ]);
});

Route::get('/products', function () {
    return view('product');
});
Route::get('/category', function () {
    return view('category');
});
