<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

Route::get('/', function () {
    $result = Category::all();
    return view('welcome',[ 'categories' => $result ]);
});

Route::get('/product/{catid?}', function ( $catid = null ) {
    if ($catid) {
        $result = Product::where('category_id',$catid)->get();
        return view('product',[ 'products' => $result ]);
    }
    else {
        $result = Product::all();
        return view('product',[ 'products' => $result ]);
    }
});



Route::get('/category', function () {
    return view('category');
});




Route::get('/test', function () {
    return view('test');
});
