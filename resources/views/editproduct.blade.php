<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Product - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-background-dark dark:text-background-light">

    <!-- Header / Nav -->
    @include('partials.header')

    <!-- Main -->
    <main class="management-container">
        <div class="management-header">
            <h1>Edit Product</h1>
            <a href="{{ route('management') }}" class="btn-cancel">
                <span>Back to Management</span>
            </a>
        </div>

        <div class="form-wrapper">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" id="image" accept="image/*">
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="150">
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" required>{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" value="{{ $product->price }}" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" id="type" required>
                        <option value="Starter" {{ $product->type == 'Appetizer' ? 'selected' : '' }}>Appetizer</option>
                        <option value="Main Course" {{ $product->type == 'Main Course' ? 'selected' : '' }}>Main Course</option>
                        <option value="Dessert" {{ $product->type == 'Dessert' ? 'selected' : '' }}>Dessert</option>
                    </select>
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')
    <script src="{{ asset('js/alerts.js') }}"></script>

</body>

</html>