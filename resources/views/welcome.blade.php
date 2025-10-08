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
    <header class="site-header">
        <div class="logo">
            <svg class="logo-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"
                    fill="currentColor"></path>
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

        <button class="btn-primary">Bestel nu</button>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>CRUD APP</h1>
                <p>Waar elke maaltijd een verhaal vertelt</p>
                <button class="btn-primary">Bekijk menu</button>
            </div>
        </section>

        <!-- Featured Dishes -->
        <section class="featured-dishes">
            <h2>Uitgelichte gerechten</h2>
            <div class="dishes-grid">
                <div class="dish-card">
                    <div class="dish-image pasta"></div>
                    <h3>Pasta Primavera</h3>
                    <p>Verse pasta met seizoensgroenten</p>
                </div>
                <div class="dish-card">
                    <div class="dish-image salmon"></div>
                    <h3>Gegrilde zalm met citroen</h3>
                    <p>Perfect gegrilde zalm met een vleugje citroen</p>
                </div>
                <div class="dish-card">
                    <div class="dish-image chocolate"></div>
                    <h3>Chocolade lava cake</h3>
                    <p>Warm chocolade dessert met vloeibare kern</p>
                </div>
            </div>
            <div class="center">
                <button class="btn-outline">Bekijk het volledige menu</button>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2025 CRUD APP. Alle rechten voorbehouden.</p>
    </footer>

</body>

</html>
