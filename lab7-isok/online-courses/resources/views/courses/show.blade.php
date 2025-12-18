@extends('layout')
@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <h2 class="card-title">{{ $course->title }}</h2>
            <p>Category: {{ $course->category }}</p>

            <p>Difficulty: {{ $course->difficulty_level }}</p>
            <p>Price: {{ $course->price }} €</p>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <h3>Feedbacks</h3>
            <div class="mb-2">
                <a class="btn btn-primary btn-sm" href="?status=published">Published</a>
                <a class="btn btn-primary btn-sm" href="?status=rejected">Rejected</a>
                <a class="btn btn-secondary btn-sm" href="{{ url()->current() }}">All</a>
            </div>
            @forelse($feedbacks as $feedback)
                <div class="border p-2 mb-2">
                    <p><strong>{{ $feedback->author_name }}</strong> | Score:
                        {{ $feedback->score }}</p>
                    <p>{{ $feedback->comment }}</p>
                    <p>Status: <strong>{{ $feedback->status }}</strong></p>
                    @if($feedback->status == 'new')
                        <form method="POST" action="{{ route('feedback.status', [$feedback,'published']) }}" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success btn-sm">Publish</button>
                        </form>
                        <form method="POST" action="{{ route('feedback.status', [$feedback,'rejected']) }}" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </form>
                    @endif
                </div>
            @empty
                <p>No feedbacks yet.</p>
            @endforelse
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>Add Feedback</h3>
            <form method="POST" action="{{ route('feedback.store') }}">

                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="text" name="author_name" class="form-control mb-2"
                       placeholder="Your name">
                <textarea name="comment" class="form-control mb-2"
                          placeholder="Comment"></textarea>
                <input type="number" name="score" class="form-control mb-2" min="1"
                       max="10" placeholder="Score (1-10)">
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
