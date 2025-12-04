@extends('layout')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>

            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection
