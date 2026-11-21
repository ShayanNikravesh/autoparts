<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Banners
        $banners = Banner::whereIn('title', ['کروسل', 'بنر متوسط', 'بنر کوچک'])->get()->keyBy('title');

        $carousel = $banners->get('کروسل');
        $medium_banner = $banners->get('بنر متوسط');
        $small_banner = $banners->get('بنر کوچک');

        $articles = Article::where('status','active')->latest()->limit(3)->get();

        $products = Product::where('status','active')->latest()->get();

        $collection = $products->partition(fn ($product) => $product->price_discounted > 0);

        $recent_products = $products->take(12);
        $discounted_products = $collection[0]->take(10);

        return view('user.index',compact('carousel','medium_banner','small_banner','articles','products','recent_products','discounted_products'));
    }
}
