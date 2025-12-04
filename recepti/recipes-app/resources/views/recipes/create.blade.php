@extends('layout')

@section('content')
    <h1>Create Recipe</h1>

    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
            @error('description') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ingredients</label>
            <textarea name="ingredients" class="form-control" required>{{ old('ingredients') }}</textarea>
            @error('ingredients') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
@endsection
