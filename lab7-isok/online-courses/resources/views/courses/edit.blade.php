@extends('layout')
@section('content')
    <h2>Edit Course</h2>
    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('PUT')
        <input name="title" class="form-control mb-2" value="{{ $course->title }}">
        <input name="category" class="form-control mb-2" value="{{ $course->category }}">
        <select name="difficulty_level" class="form-control mb-2">
            <option value="beginner" {{ $course->difficulty_level == 'beginner' ?
'selected' : '' }}>Beginner</option>
            <option value="intermediate" {{ $course->difficulty_level ==
'intermediate' ? 'selected' : '' }}>Intermediate</option>
            <option value="advanced" {{ $course->difficulty_level == 'advanced' ?
'selected' : '' }}>Advanced</option>
        </select>
        <input type="number" name="price" class="form-control mb-2"
               value="{{ $course->price }}" step="0.01">
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
