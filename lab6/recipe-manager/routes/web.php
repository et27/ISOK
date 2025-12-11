<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('categories.index'));

Route::resource('categories', CategoryController::class);
Route::resource('recipes', RecipeController::class);
