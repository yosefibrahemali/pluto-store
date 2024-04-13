<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
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
        view()->composer(
            'layouts.app', 
            function ($view) {
                $wcategories = Category::where('type','womens')->get();
                $mcategories = Category::where('type','mens')->get();
                $view->with(compact('wcategories','mcategories'));
            }
        );
    }
}
