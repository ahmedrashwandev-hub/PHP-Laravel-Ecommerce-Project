<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class FirstController extends Controller
{
/*
|--------------------------------------------------------------------------------------------
|                         get all Categories
|--------------------------------------------------------------------------------------------
*/
    public function MainPage()
    {
        $result = Category::all();
        return view('welcome',[ 'categories' => $result ]);
    }
/*
|--------------------------------------------------------------------------------------------
|                         get Products by Category ID
|--------------------------------------------------------------------------------------------
*/
    public function GetCategoryProduct( $catid = null )
    {
        if ($catid) {
            $result = Product::where('category_id',$catid)->get();
            return view('product',[ 'products' => $result ]);
        }
        else {
            $result = Product::all();
            return view('product',[ 'products' => $result ]);
            // abort(403,"you should provide category id");
        }
    }
/*
|--------------------------------------------------------------------------------------------
|                         get all Categories with their Products
|--------------------------------------------------------------------------------------------
*/
    public function GetCategoryWithProducts()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('category',[ 'categories' => $categories, 'products' => $products ]);
    }
}
