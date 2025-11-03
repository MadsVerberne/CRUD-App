<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - CRUD App</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


    @include('partials.header')

    <!-- Hero Section -->
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>CRUD APP</h1>
                <p>Where every meal tells a story</p>
                <a href="{{ route('products') }}" class="btn-primary">View Menu</a>
            </div>
        </section>

        <!-- Featured Dishes -->
        <section class="featured-dishes">
            <h2>Featured Dishes</h2>
            <div class="dishes-grid">
                <div class="dish-card">
                    <div class="dish-image pasta"></div>
                    <h3>Pasta Primavera</h3>
                    <p>Fresh pasta with seasonal vegetables</p>
                </div>
                <div class="dish-card">
                    <div class="dish-image salmon"></div>
                    <h3>Grilled Salmon with Lemon</h3>
                    <p>Perfectly grilled salmon with a hint of lemon</p>
                </div>
                <div class="dish-card">
                    <div class="dish-image chocolate"></div>
                    <h3>Chocolate Lava Cake</h3>
                    <p>Warm chocolate dessert with liquid core</p>
                </div>
            </div>
            <div class="center">
                <a href="{{ route('products') }}" class="btn-outline">View Full Menu</a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</body>

</html>