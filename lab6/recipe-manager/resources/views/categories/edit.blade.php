@extends('layout')

@section('content')
    <h2 class="mb-3">Измени категорија</h2>

    <form method="POST" action="{{ route('categories.update', $category) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Име на категорија</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ажурирај</button>
    </form>
@endsection
