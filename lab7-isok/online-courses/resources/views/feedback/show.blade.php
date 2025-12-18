@extends('layout')
@section('content')
    <h2>Feedback Detail</h2>
    <p><strong>{{ $feedback->author_name }}</strong></p>
    <p>{{ $feedback->comment }}</p>
    <p>Score: {{ $feedback->score }}</p>
    <p>Status: {{ $feedback->status }}</p>
@endsection
