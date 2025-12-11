@extends('layout')

@section('content')
    <h1 class="mb-3">Рецепти</h1>
    <a href="{{ route('recipes.create') }}" class="btn btn-success mb-3">+ Нов рецепт</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Наслов</th>
            <th>Категорија</th>
            <th>Акции</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td><a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a></td>
                <td>{{ $recipe->category->name }}</td>
                <td>
                    <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-warning btn-sm">Измени</a>
                    <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Да се избрише?')">Избриши</button>
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
