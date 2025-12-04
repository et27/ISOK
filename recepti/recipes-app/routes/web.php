<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('categories.index');
});
use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);
Route::resource('recipes', RecipeController::class);
