<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Recipe;
use App\Observers\CategoryObserver;
use App\Observers\RecipeObserver;
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
        Category::observe(CategoryObserver::class);
        Recipe::observe(RecipeObserver::class);
    }
}
