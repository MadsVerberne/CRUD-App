<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body
    data-success="{{ session('success') }}"
    data-error="{{ session('error') }}"
    data-errors='@json($errors->all())'>


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
                        <th>Type</th>
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
                        <td><span class="badge {{ $product->type }}">{{ $product->type }}</span></td>
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
    </main>

    <!-- Footer -->
    @include('partials.footer')
    <script src="{{ asset('js/alerts.js') }}"></script>

</body>

</html>