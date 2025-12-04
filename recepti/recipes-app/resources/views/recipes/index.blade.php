@extends('layout')

@section('content')
    <h1>Recipes</h1>

    <a href="{{ route('recipes.create') }}" class="btn btn-success mb-3">+ Create Recipe</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>

        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td>{{ $recipe->title }}</td>
                <td>{{ $recipe->category->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('recipes.show', $recipe->id) }}">Show</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('recipes.edit', $recipe->id) }}">Edit</a>

                    <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $recipes->links() }}
@endsection
