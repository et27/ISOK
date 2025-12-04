@extends('layout')

@section('content')
    <h1>Edit Recipe</h1>

    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" class="form-control" value="{{ $recipe->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ $recipe->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Ingredients</label>
            <textarea name="ingredients" class="form-control" required>{{ $recipe->ingredients }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" @selected($cat->id == $recipe->category_id)>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection
