<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use App\Models\Category;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recipes = Recipe::latest()->paginate(10);
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all(); // потребни за dropdown
        return view('recipes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest  $request)
    {
        //
        Recipe::create($request->validated());
        return redirect()->route('recipes.index')
            ->with('success', 'Recipe created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
        $recipe->load('category'); // вчитување на категоријата
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
        $categories = Category::all();
        return view('recipes.edit', compact('recipe', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
        $recipe->update($request->validated());
        return redirect()->route('recipes.index')
                        ->with('success', 'Recipe updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
        $recipe->delete();
        return redirect()->route('recipes.index')
            ->with('success', 'Recipe deleted successfully.');

    }
}
