<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

//Change Status
Route::post('category/ChangeStatus/{id}',[CategoryController::class,'ChangeStatus'])->name('change_Status_category');
Route::post('brand/ChangeStatus/{id}',[BrandController::class,'ChangeStatus'])->name('change_Status_brand');
Route::post('article/ChangeStatus/{id}',[ArticleController::class,'ChangeStatus'])->name('change_Status_article');
Route::post('manager/ChangeStatus/{id}',[ManagerController::class,'changeStatus'])->name('change_Status_manager');
Route::post('product/ChangeStatus/{id}/{status}',[ProductController::class,'changeStatus'])->name('change_Status_product');

//Change Level
Route::post('manager/ChangeLevel/{id}',[ManagerController::class,'ChangeLevel'])->name('change_Level_manager');

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
    
    //Manager
    'managers' => ManagerController::class,

]);