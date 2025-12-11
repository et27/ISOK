<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     */
    public function created(Category $category): void
    {
        Log::info("Категорија креирана: {$category->id} - {$category->name}");    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        Log::info("Категорија ажурирана: {$category->id} - {$category->name}");    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        Log::info("Категорија избришана: {$category->id} - {$category->name}");    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }
}
