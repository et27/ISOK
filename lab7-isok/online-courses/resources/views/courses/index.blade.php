@extends('layout')
@section('content')

    <h2>All Courses</h2>
    <form method="GET" class="mb-3 d-flex">
        <input type="text" name="search" class="form-control me-2"
               placeholder="Search by title or category" value="{{ request('search') }}">
        <button class="btn btn-primary">Search</button>
    </form>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">Category: {{ $course->category }}</p>
                        <p class="card-text">Difficulty: {{ $course->difficulty_level }}</p>
                        <p class="card-text">Price: {{ $course->price }} €</p>
                        <a class="btn btn-success" href="{{ route('courses.show',$course) }}">View</a>
                        <a class="btn btn-warning" href="{{ route('courses.edit',$course) }}">Edit</a>
                        <form method="POST" action="{{ route('courses.destroy', $course) }}"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
