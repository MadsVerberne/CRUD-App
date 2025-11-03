@php
use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - CRUD App</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('partials.header')

    <!-- Main -->
    <main class="menu-container">
        <section class="menu-header">
            <h1>Our Menu</h1>
            <div class="menu-filters">
                @foreach($categories as $cat)
                <a href="{{ route('products.category', $cat) }}" class="filter-btn {{ isset($category) && $category->id == $cat->id ? 'active' : '' }}">
                    {{ $cat->name }}
                </a>
                @endforeach
                <a href="{{ route('products') }}" class="filter-btn {{ !isset($category) ? 'active' : '' }}">All</a>
            </div>



        </section>

        <section class="menu-table-section">
            <table class="menu-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Categories</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="{{ Str::slug($product->type) }}">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ $product->images->first() ? asset('storage/' . $product->images->first()->path) : 'https://via.placeholder.com/100x100?text=No+Image' }}" width="100" alt="{{ $product->name }}"></td>
                        <td>€{{ number_format($product->price, 2, ',', '.') }}</td>
                        <td>
                            @foreach($product->categories as $category)
                            <span class="badge">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>


    <!-- Footer -->
    @include('partials.footer')


</body>

</html>