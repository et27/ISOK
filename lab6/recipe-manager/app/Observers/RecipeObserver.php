<?php

namespace App\Observers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Log;

class RecipeObserver
{
    /**
     * Handle the Recipe "created" event.
     */
    public function created(Recipe $recipe): void
    {
        Log::info("Рецепт креиран: {$recipe->id} - {$recipe->title}");
    }

    /**
     * Handle the Recipe "updated" event.
     */
    public function updated(Recipe $recipe): void
    {
        Log::info("Рецепт ажуриран: {$recipe->id} - {$recipe->title}");
    }

    /**
     * Handle the Recipe "deleted" event.
     */
    public function deleted(Recipe $recipe): void
    {
        Log::info("Рецепт избришан: {$recipe->id} - {$recipe->title}");
    }

    /**
     * Handle the Recipe "restored" event.
     */
    public function restored(Recipe $recipe): void
    {
        //
    }

    /**
     * Handle the Recipe "force deleted" event.
     */
    public function forceDeleted(Recipe $recipe): void
    {
        //
    }
}
