@extends('layout')

@section('content')
    <h1>{{ $recipe->title }}</h1>

    <p><strong>Category:</strong> {{ $recipe->category->name }}</p>

    <p><strong>Description:</strong> {{ $recipe->description }}</p>

    <p><strong>Ingredients:</strong><br>{{ $recipe->ingredients }}</p>

    <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Back</a>
@endsection
