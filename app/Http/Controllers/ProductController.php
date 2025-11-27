<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
/*
|--------------------------------------------------------------------------------------------
|                         get all Categories
|--------------------------------------------------------------------------------------------
*/
    public function Addproduct()
    {
        return view('Products.addproduct',[]);
    }
/*
|--------------------------------------------------------------------------------------------
|                         store product
|--------------------------------------------------------------------------------------------
*/
    public function StoreProduct()
    {
        return view('Products.addproduct',[]);
    }
}


