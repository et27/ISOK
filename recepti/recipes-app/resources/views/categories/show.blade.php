@extends('layout')

@section('content')
    <h1>Category: {{ $category->name }}</h1>

    <h3>Recipes in this category:</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Ingredients</th>
        </tr>

        @foreach($category->recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td>{{ $recipe->title }}</td>
                <td>{{ $recipe->ingredients }}</td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
@endsection
