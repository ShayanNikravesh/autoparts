<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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

        $products = Product::where('status','active')->where('price_discounted','>',0)->latest()->limit(10)->get();

        return view('user.index',compact('carousel','medium_banner','small_banner','products'));
    }
}
