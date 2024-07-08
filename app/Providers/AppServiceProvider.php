<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    */
    public function register(): void
    {
        
    }
    
    /**
    * Bootstrap any application services.
    */
    public function boot(): void
    {
        
        
        
        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            View::share('categories', $categories);
        }

        if (Schema::hasTable('articles')) {
            $lastArticles = Article::where('accepted', true)->orderBy('created_at' , 'desc')->take(5)->get();
            View::share('lastArticles', $lastArticles);
        }
    }


}
