<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Edit Product - CRUD App</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
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
        <form action="#" method="POST" class="product-form">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="number" id="id" name="id" value="6" required>
            </div>
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="url" id="image" name="image" value="https://example.com/burger.jpg" required>
                <p class="text-sm mt-1">Current image: burger.jpg</p>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="Classic Burger" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required>Juicy beef burger with lettuce, tomato, pickles and our secret sauce on a toasted bun.</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price (€)</label>
                <input type="number" id="price" name="price" value="12.50" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="Starter">Starter</option>
                    <option value="Main" selected>Main</option>
                    <option value="Dessert">Dessert</option>
                </select>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn-cancel">Cancel</button>
                <button type="submit" class="btn-save">Save</button>
            </div>
        </form>
    </div>
</main>

<!-- Footer -->
@include('partials.footer')

</body>
</html>
