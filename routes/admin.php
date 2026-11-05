<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::resources([

    //Category
    'categories' => CategoryController::class,

    //Brand
    'brands' => BrandController::class,

    //Article
    'articles' => ArticleController::class,
]);

//change Status
Route::post('category/ChangeStatus/{id}',[CategoryController::class,'ChangeStatus'])->name('change_Status_category');
Route::post('brand/ChangeStatus/{id}',[BrandController::class,'ChangeStatus'])->name('change_Status_brand');
Route::post('article/ChangeStatus/{id}',[ArticleController::class,'ChangeStatus'])->name('change_Status_article');

//Store Photo
Route::post('storePhoto',[ArticleController::class,'storePhoto'])->name('store_article_photo');