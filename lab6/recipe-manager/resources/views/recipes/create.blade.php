@extends('layout')

@section('content')
    <h2 class="mb-3">Нов рецепт</h2>

    <form method="POST" action="{{ route('recipes.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Наслов</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Опис (мин. 50 карактери)</label>
            <textarea name="description" rows="6" class="form-control">{{ old('description') }}</textarea>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Состојки</label>
            <textarea name="ingredients" rows="4" class="form-control">{{ old('ingredients') }}</textarea>
            @error('ingredients') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Категорија</label>
            <select name="category_id" class="form-select">
                <option value="">-- Одбери --</option>
                @foreach($categories as $id => $name)
                    <option value="{{ $id }}" @selected(old('category_id') == $id)>{{ $name }}</option>
                @endforeach
            </select>
            @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Зачувај</button>
    </form>
@endsection
