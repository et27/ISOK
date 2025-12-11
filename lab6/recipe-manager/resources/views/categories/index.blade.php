<!-- resources/views/categories/index.blade.php -->
@extends('layout')

@section('content')
    <h1 class="mb-3">Категории</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">+ Нова категорија</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Име</th>
            <th>Акции</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.show', $category) }}" class="btn btn-info btn-sm">Покажи</a>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Измени</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Да се избрише?')">Избриши</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>
@endsection
