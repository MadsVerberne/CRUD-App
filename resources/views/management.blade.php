<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


    <!-- Header / Nav -->
    @include('layouts.navigation')

    <!-- Main -->
    <main class="management-container">
        <div class="management-header">
            <h1>Product Management</h1>
            <a href="{{ route('addproduct') }}" class="btn-primary">
                <span class="icon">+</span> New Product
            </a>

        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Categorieen</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="id">{{ $product->id }}</td>
                        <td><img src="{{ $product->image_url }}" width="100" alt="{{ $product->name }}"></td>
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
        </div>
        <div class="form-wrapper">
            <h3>Nieuwe Categorie Toevoegen</h3>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Categorie Naam</label>
                    <input type="text" name="name" id="name" placeholder="Nieuwe categorie" required>
                </div>
                <button type="submit" class="btn-primary">Toevoegen</button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn-edit">Edit</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Weet je zeker dat je deze categorie wilt verwijderen?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>

</html>