<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerControlller;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;

//Admin Auth
Route::get('Login',[AuthController::class,'login'])->name('login');

Route::post('auth',[AuthController::class,'authenticate'])->name('sign_in');

Route::middleware(['auth:admin','operator'.':manager'])->group(function () {

    //Dashboard
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard')->withoutMiddleware('operator');

    //Logout
    Route::post('/admin_logout', [AuthController::class, 'logout'])->name('admin_logout')->withoutMiddleware('operator');

    //Change Status
    Route::post('category/ChangeStatus/{id}',[CategoryController::class,'ChangeStatus'])->name('change_Status_category');
    Route::post('brand/ChangeStatus/{id}',[BrandController::class,'ChangeStatus'])->name('change_Status_brand');
    Route::post('manager/ChangeStatus/{id}',[ManagerController::class,'changeStatus'])->name('change_Status_manager');
    Route::post('product/ChangeStatus/{id}/{status}',[ProductController::class,'changeStatus'])->name('change_Status_product');

    //Change Level
    Route::post('manager/ChangeLevel/{id}',[ManagerController::class,'ChangeLevel'])->name('change_Level_manager');

    //Show Photo
    Route::get('product/{id}/photos',[ProductController::class,'showProductPhoto'])->name('show_product_photo');
    Route::get('banner/{id}/photos',[BannerControlller::class,'show'])->name('show_banner_photo');

    //Store Photo
    Route::post('product/photo',[ProductController::class,'storePhoto'])->name('store_product_photo');
    Route::post('banner/photo',[BannerControlller::class,'storePhoto'])->name('store_banner_photo');
  
    //Operator
    Route::withoutMiddleware('operator')->group(function () {

        //Change Status
        Route::post('article/ChangeStatus/{id}',[ArticleController::class,'ChangeStatus'])->name('change_Status_article');

        //Store Photo
        Route::post('article/photo',[ArticleController::class,'storePhoto'])->name('store_article_photo');

        //Delete Photo
        Route::delete('photo/{id}',[PhotoController::class,'delete'])->name('delete_photo');

        //Article
        Route::resource('articles', ArticleController::class);

    });

    //Manager
    Route::resource('managers', ManagerController::class)->withoutMiddlewareFor(['edit', 'update'], 'operator');

    //Resources
    Route::resources([

        //Category
        'categories' => CategoryController::class,

        //Brand
        'brands' => BrandController::class,

        //Product
        'products' => ProductController::class,
        
        //Message
        'messages' => MessageController::class,

    ]);

});



