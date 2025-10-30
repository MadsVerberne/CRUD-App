<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Category - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>

    @include('partials.header')

    <main class="management-container">
        <div class="management-header">
            <h1>Edit Category</h1>
            <a href="{{ route('categories.index') }}" class="btn-cancel">Back to Categories</a>
        </div>

        <div class="form-wrapper">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" value="{{ $category->name }}" required>
                </div>

                <button type="submit">Update Category</button>
            </form>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>