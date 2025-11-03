<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Management - CRUD App</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


    <!-- Header / Nav -->
    @include('layouts.navigation')

    <!-- Main -->
    <main class="menu-container">
        <section class="menu-header">
            <h1>Product Management</h1>
            <a href="{{ route('addproduct') }}" class="btn-primary">
                <span class="icon">+</span> New Product
            </a>
        </section>

        <section class="menu-table-section">
            <table class="menu-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Categories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="id">{{ $product->id }}</td>
                        <td><img src="{{ $product->images->first() ? asset('storage/' . $product->images->first()->path) : 'https://via.placeholder.com/100x100?text=No+Image' }}" width="100" alt="{{ $product->name }}"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>€{{ number_format($product->price, 2) }}</td>
                        <td>
                            @foreach($product->categories as $category)
                            <span class="badge">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <div>
                                <a href="{{ route('editproduct', $product->id) }}" class="btn-edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this product?')">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </section>
        </section>
        <section class="menu-table-section">
            <h3>Add New Category</h3>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" placeholder="New category" required>
                </div>
                <button type="submit" class="btn-primary">Add</button>
            </form>
        </section>
        
    </main>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2025 CRUD APP. Alle rechten voorbehouden.</p>
    </footer>

</body>

</html>