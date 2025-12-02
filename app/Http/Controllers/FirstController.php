<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;


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
/*
|--------------------------------------------------------------------------------------------
|                         get all reviews
|--------------------------------------------------------------------------------------------
*/
    public function reviews()
    {

        $reviews = Review::all();
        return view('reviews',[ 'reviews' => $reviews ]);
    }
/*
|--------------------------------------------------------------------------------------------
|                         Store reviews
|--------------------------------------------------------------------------------------------
*/
    public function storeReviews(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:300',
            'phone'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:3',
            'message'=>'required|min:3',
        ]);
            $newReview = new Review();
            $newReview->name = request('name');
            $newReview->phone = request('phone');
            $newReview->email = request('email');
            $newReview->subject = request('subject');
            $newReview->message = request('message');

            $newReview->save();

        return redirect('/reviews');
    }
}
