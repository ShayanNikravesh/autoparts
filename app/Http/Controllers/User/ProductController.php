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

    public function filter(Request $request)
    {

        $query = Product::query();

        $query->where('status', '!=', 'inactive');

        if ($request->has('category')) 
        {
            $query->where('category_id', $request->category);
        }
    
        if ($request->has('brand')) 
        {
            $query->where('brand_id', $request->brand);
        }
       
        if ($request->has('min_price') && is_numeric($request->min_price)) 
        {
            $query->where('price', '>=', $request->min_price);
        }
    
        if ($request->has('max_price') && is_numeric($request->max_price))
        {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->available == 1) 
        {
            $query->where('status', '=', 'active');  
        }

        $products = $query->paginate(12);
        
        return view('user.product.products', compact('products'));
    }

}
