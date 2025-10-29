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


    @include('layouts.navigation')

    <!-- Hero Section -->
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>CRUD APP</h1>
                <p>Waar elke maaltijd een verhaal vertelt</p>
                <a href="{{ route('products') }}" class="btn-primary">Bekijk menu</a>
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
                <a href="{{ route('products') }}" class="btn-outline">Bekijk het volledige menu</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2025 CRUD APP. Alle rechten voorbehouden.</p>
    </footer>

</body>

</html>