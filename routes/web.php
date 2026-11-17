<?php

use App\Http\Controllers\User\ArticleControlller;
use App\Http\Controllers\User\ProductController;
use Illuminate\Support\Facades\Route;

//Admin Subdomain
Route::domain('admin.autoparts.test')->middleware('web')->group(base_path('routes/admin.php'));

//Index
Route::get('/', function () {
    return view('user.index');
})->name('user_index');

//Category Products
Route::get('category/{id}',[ProductController::class,'category'])->name('category_products');

//Brand Products
Route::get('brand/{id}',[ProductController::class,'brand'])->name('brand_products');

//Single Product
Route::get('product/{id}',[ProductController::class,'show'])->name('single_product');

//Filter
Route::get('filter',[ProductController::class,'filter'])->name('filter');

//Search
Route::get('search',[ProductController::class,'search'])->name('search');

//Article
Route::get('blog',[ArticleControlller::class,'index'])->name('index');
Route::get('article/{id}',[ArticleControlller::class,'show'])->name('show');

//About
Route::view('/about', 'user.about')->name('about');

Route::fallback(function () {
    return view('user.404');
});
