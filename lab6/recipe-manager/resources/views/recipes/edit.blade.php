@extends('layout')

@section('content')
    <h2 class="mb-3">Измени рецепт</h2>

    <form method="POST" action="{{ route('recipes.update', $recipe) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Наслов</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $recipe->title) }}">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Опис</label>
            <textarea name="description" rows="6" class="form-control">{{ old('description', $recipe->description) }}</textarea>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Состојки</label>
            <textarea name="ingredients" rows="4" class="form-control">{{ old('ingredients', $recipe->ingredients) }}</textarea>
            @error('ingredients') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Категорија</label>
            <select name="category_id" class="form-select">
                @foreach($categories as $id => $name)
                    <option value="{{ $id }}" @selected(old('category_id', $recipe->category_id) == $id)>{{ $name }}</option>
                @endforeach
            </select>
            @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ажурирај</button>
    </form>
@endsection
