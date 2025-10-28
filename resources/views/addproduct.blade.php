<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Add New Product - CRUD App</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body>

<!-- Header / Nav -->
@include('partials.header')

<!-- Main -->
<main class="management-container">
    <div class="management-header">
        <h1>Add New Product</h1>
        <button class="btn-primary">
            <span class="icon">Save</span>
        </button>
    </div>

    <div class="form-wrapper">
        <form class="product-form">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="number" id="id" name="id" placeholder="E.g. 6" required>
            </div>
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="url" id="image" name="image" placeholder="https://example.com/image.jpg" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="E.g. Caesar Salad" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="E.g. Fresh romaine lettuce with croutons and Parmesan cheese." required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price (€)</label>
                <input type="number" id="price" name="price" placeholder="12.50" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="">Select type</option>
                    <option value="Starter">Starter</option>
                    <option value="Main">Main</option>
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