<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<nav class="mb-4">
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Categories</a>
    <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Recipes</a>
</nav>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    @yield('content')
</div>

</body>
</html>
