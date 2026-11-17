<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $code)
    {
        // $product = Product::findOrFail($id);
        $product = Product::where('tracking_code','=',$code)->firstOrFail();
        return view('user.product.product',compact('product'));
    }

    public function category(string $id)
    {
        //Category
        $category = Category::findOrFail($id);
        $title = $category->title;

        //Category Products
        $products = $category->products()->where('status', '!=', 'inactive')->paginate(12);
        
        return view('user.product.products',compact('products','title'));

    }

    public function brand(string $id)
    {
        //Brand
        $brand = Brand::findOrFail($id);
        $title = $brand->title;

        //Brand Products
        $products = $brand->products()->where('status', '!=', 'inactive')->paginate(12);

        return view('user.product.products',compact('products','title'));
    }

}
