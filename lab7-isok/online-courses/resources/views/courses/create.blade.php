@extends('layout')
@section('content')
    <h2>Add New Course</h2>
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        <input name="title" class="form-control mb-2" placeholder="Title">
        <input name="category" class="form-control mb-2" placeholder="Category">
        <select name="difficulty_level" class="form-control mb-2">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
        <input type="number" name="price" class="form-control mb-2" step="0.01"
               placeholder="Price">
        <button class="btn btn-primary">Create</button>
    </form>
@endsection
