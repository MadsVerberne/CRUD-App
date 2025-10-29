<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Product - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>


    <!-- Header / Nav -->
    @include('partials.header')

    <!-- Main -->
    <main class="management-container">
        <div class="management-header">
            <h1>Add New Product</h1>
        </div>

        <div class="form-wrapper">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" id="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" id="type" required>
                        <option value="Appetizer">Appetizer</option>
                        <option value="Main Course">Main Course</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')
    <script src="{{ asset('js/alerts.js') }}"></script>

</body>

</html>