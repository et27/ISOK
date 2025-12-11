@extends('layout')

@section('content')
    <h2 class="mb-3">Нова категорија</h2>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Име на категорија</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Зачувај</button>
    </form>
@endsection
