<!DOCTYPE html>
<html>

<head>
    <title>Home - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
            <a
                href="{{ url('/dashboard') }}">Dashboard
            </a>
            @else
            <a
                href="{{ route('welcome') }}">
                Home
            </a>
            <a
                href="{{ route('products') }}">
                products
            </a>
            <a
                href="{{ route('about') }}">
                about
            </a>
            <a
                href="{{ route('login') }}">
                Log in
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

</body>

</html>