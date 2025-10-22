@php
use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('layouts.navigation')

    <!-- Main -->
    <main class="menu-container">
        <section class="menu-header">
            <h1>Our Menu</h1>
            <div class="menu-filters">
                <button class="filter-btn" data-type="appetizer">Appetizers</button>
                <button class="filter-btn" data-type="main-course">Main Courses</button>
                <button class="filter-btn" data-type="dessert">Desserts</button>
                <button class="filter-btn" data-type="all">All</button>
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
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="{{ Str::slug($product->type) }}">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ asset('images/' . $product->image) }}" width="100"></td>
                        <td>€{{ number_format($product->price, 2, ',', '.') }}</td>
                        <td><span class="tag {{ Str::slug($product->type) }}">{{ $product->type }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>


    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2024 CRUD APP. All rights reserved.</p>
    </footer>


</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.filter-btn');
        const rows = document.querySelectorAll('.menu-table tbody tr');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const type = btn.getAttribute('data-type');

                rows.forEach(row => {
                    if (type === 'all' || row.classList.contains(type)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });

                // Active styling
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    });
</script>