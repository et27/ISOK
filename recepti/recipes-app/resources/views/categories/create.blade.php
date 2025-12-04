@extends('layout')

@section('content')
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" required>

            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
@endsection
