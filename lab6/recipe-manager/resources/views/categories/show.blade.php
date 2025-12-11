@extends('layout')
@section('content')
    <h2 class="mb-3">Категорија: {{ $category->name }}</h2>
    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning mb-3">Измени</a>

    <h3>Рецепти</h3>
    <table class="table table-hover">
        <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Наслов</th>
            <th>Акции</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td><a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a></td>
                <td>
                    <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-sm btn-warning">Измени</a>
                    <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Да се избрише?')">Избриши</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $recipes->links('pagination::bootstrap-5') }}
    </div>
@endsection
