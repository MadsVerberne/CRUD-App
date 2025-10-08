<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-background-light">

    <!-- Header / Nav -->
    <header class="site-header">
        <div class="logo">
            <svg class="logo-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z" fill="currentColor"></path>
            </svg>
            <h2 class="logo-text">CRUD APP</h2>
        </div>

        <nav class="site-nav">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('welcome') }}">Home</a>
                    <a href="{{ route('products') }}">Products</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </nav>

    <!-- Hero Section -->
    <main>

    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2025 CRUD APP. Alle rechten voorbehouden.</p>
    </footer>

</body>
</html>
