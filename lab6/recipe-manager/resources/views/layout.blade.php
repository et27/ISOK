<!doctype html>
<html lang="mk">
<head>
    <meta charset="utf-8">
    <title>Recipe Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<nav class="mb-4">
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Категории</a>
    <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Рецепти</a>
</nav>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
