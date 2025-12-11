<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recipes = Recipe::with('category')->latest()->paginate(10);
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name')->pluck('name', 'id');
        return view('recipes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request) {
        $recipe = Recipe::create($request->validated());
        return redirect()->route('recipes.show', $recipe)->with('success', 'Рецептот е креиран.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe) {
        $recipe->load('category');
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe) {
        $categories = Category::orderBy('name')->pluck('name', 'id');
        return view('recipes.edit', compact('recipe', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeRequest $request, Recipe $recipe) {
        $recipe->update($request->validated());
        return redirect()->route('recipes.show', $recipe)->with('success', 'Рецептот е ажуриран.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe) {
        $recipe->delete();
        return redirect()->route('recipes.index')->with('success', 'Рецептот е избришан.');
    }
}
