<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;

Route::get('/', [FirstController::class , 'MainPage'] );
Route::get('/product/{catid?}', [FirstController::class , 'GetCategoryProduct'] );
Route::get('/category', [FirstController::class , 'GetCategoryWithProducts'] );
Route::get('/reviews', [FirstController::class , 'reviews'] );
Route::post('/storeReviews', [FirstController::class , 'storeReviews'] );


Route::get('/addproduct', [ProductController::class , 'AddProduct'] );
Route::post('/storeproduct', [ProductController::class , 'StoreProduct'] );
Route::get('/editproduct/{productid?}', [ProductController::class , 'EditProduct'] );
Route::get('/removeproduct/{productid?}', [ProductController::class , 'RemoveProduct'] );
