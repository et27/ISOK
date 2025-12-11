@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $recipe->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Категорија:</strong> {{ $recipe->category->name }}</p>
            <p><strong>Опис:</strong></p>
            <p class="border p-2">{{ $recipe->description }}</p>
            <p><strong>Состојки:</strong></p>
            <p class="border p-2">{{ $recipe->ingredients }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-warning">Измени</a>
            <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Назад кон сите рецепти</a>
        </div>
    </div>
@endsection
