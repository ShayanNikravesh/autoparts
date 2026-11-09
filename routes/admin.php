<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

//change Status
Route::post('category/ChangeStatus/{id}',[CategoryController::class,'ChangeStatus'])->name('change_Status_category');
Route::post('brand/ChangeStatus/{id}',[BrandController::class,'ChangeStatus'])->name('change_Status_brand');
Route::post('article/ChangeStatus/{id}',[ArticleController::class,'ChangeStatus'])->name('change_Status_article');
Route::post('product/changeStatus/{id}/{status}',[ProductController::class,'changeStatus'])->name('change_Status_product');

//Show Photo
Route::get('product/{id}/photos',[ProductController::class,'showProductPhoto'])->name('show_product_photo');

//Store Photo
Route::post('article/photo',[ArticleController::class,'storePhoto'])->name('store_article_photo');
Route::post('product/photo',[ProductController::class,'storePhoto'])->name('store_product_photo');

//Delete Photo
Route::delete('photo/{id}',[PhotoController::class,'delete'])->name('delete_photo');

//Resources
Route::resources([

    //Category
    'categories' => CategoryController::class,

    //Brand
    'brands' => BrandController::class,

    //Article
    'articles' => ArticleController::class,

    //Product
    'products' => ProductController::class,
    
]);