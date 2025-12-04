@extends('layout')

@section('content')
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">+ Create Category</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">Show</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>

                    <form action="{{ route('categories.destroy', $category->id) }}"
                          method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $categories->links() }}
@endsection
