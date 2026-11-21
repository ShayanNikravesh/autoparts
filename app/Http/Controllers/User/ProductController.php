<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function discounted()
    {
        $products = Product::where('status','active')->where('price_discounted','>',0)->paginate(12);
        return view('user.product.products',compact('products'));
    }

    public function show(string $code)
    {
        $product = Product::where('tracking_code','=',$code)->where('status', '=', 'active')->firstOrFail();
        return view('user.product.product',compact('product'));
    }

    public function category(string $id)
    {
        //Category
        $category = Category::where('id', '=', $id)->where('status', '=', 'active')->firstOrFail();
        $title = $category->title;

        //Category Products
        $products = $category->products()->where('status', '!=', 'inactive')->paginate(12);
        
        return view('user.product.products',compact('products','title'));

    }

    public function brand(string $id)
    {
        //Brand
        $brand = Brand::where('id', '=', $id)->where('status', '=', 'active')->firstOrFail();
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

    public function search(Request $request)
    {
        $request->validate([
            'search' => ['string','max:100'],
        ]);

        $search = $request->search;
        
        $products = Product::where('title', 'LIKE', "%{$search}%")->orWhere('english_title', 'LIKE', "%{$search}%")->orWhere('tracking_code', 'LIKE', "%{$search}%")->paginate(12);

        if ($request->ajax()) {
            return response()->json($products);
        }
    
        return view('user.product.products', compact('products'));
    }
    
    // public function recent()
    // {
    //     $products = Product::where('status','active')->latest()->paginate(12);
    //     return view('user.product.products',compact('products'));
    // }
    
}
