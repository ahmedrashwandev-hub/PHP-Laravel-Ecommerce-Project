<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
/*
|--------------------------------------------------------------------------------------------
|                         get all Categories
|--------------------------------------------------------------------------------------------
*/
    public function Addproduct()
    {
        $allcategories = Category::all();
        return view('Products.addproduct',['allcategories'=>$allcategories]);
    }
/*
|--------------------------------------------------------------------------------------------
|                         store product
|--------------------------------------------------------------------------------------------
*/
    public function StoreProduct(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:300',
            'price'=>'required|numeric',
            'quantity'=>'required|integer',
            'description'=>'required|min:3',
        ]);
        // edit
        if ($request->id)
        {
            $currentProduct= Product::find($request->id);
            $currentProduct->name = request('name');
            $currentProduct->price = request('price');
            $currentProduct->quantity = request('quantity');
            $currentProduct->description = request('description');
            $currentProduct->imagepath = "sss";
            $currentProduct->category_id = request('category_id');
            $currentProduct->save();
            return redirect('/product');
        }
        // store
        else {
            $newProduct = new Product();
            $newProduct->name = request('name');
            $newProduct->price = request('price');
            $newProduct->quantity = request('quantity');
            $newProduct->description = request('description');
            $newProduct->imagepath = "sss";
            $newProduct->category_id = request('category_id');

            $newProduct->save();

            return redirect('/');
        }
    }
/*
|--------------------------------------------------------------------------------------------
|                         Edit product by id
|--------------------------------------------------------------------------------------------
*/
    public function EditProduct($productid = null)
    {
        if ($productid != null) {
            $product = Product::find($productid);
            if ($product == null) {
                abort(403,"Can't find product");
            }
            $allcategories = Category::all();
            return view('Products.editproduct',['product'=>$product,'allcategories'=>$allcategories]);
        } else {
            return redirect('addproduct');
        }
    }
/*
|--------------------------------------------------------------------------------------------
|                         delete product by id
|--------------------------------------------------------------------------------------------
*/
    public function RemoveProduct($productid = null)
    {
        if ($productid != null) {
            $product = Product::find($productid);
            $product->delete();

            return redirect('/product')->with('success', 'Product removed successfully.');
        } else {
            abort(403,"please enter product id in the route");
        }
    }
}


