<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('user.*', function ($view) {
            
            //Category Collections
            $categories = Category::where('status','active')->get();
            [$parents,$children] = $categories->partition(fn ($category) => is_null($category->parent_id));

            //Brands
            $brands = Brand::where('status','active')->get();
            
            $view->with([
                'parents' => $parents,
                'categories' => $children,
                'brands' => $brands,
            ]);

        });
    }
}
