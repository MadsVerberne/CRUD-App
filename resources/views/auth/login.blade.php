<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRUD App</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body
    data-success="{{ session('success') }}"
    data-error="{{ session('error') }}"
    data-errors='@json($errors->all())'>


    @include('partials.header')

    <!-- Main -->
    <main class="login-container">
        <div class="login-card">
            <h2>Welcome Back</h2>
            <p>Log in to access your account</p>

            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="email">Username or Email</label>
                    <input type="email" id="email" name="email" placeholder="Username or Email" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <button type="submit" class="btn-primary full">Log In</button>
            </form>

            <p class="signup-text">
                Don't have an account?
                <a href="{{ route('register') }}">Sign Up</a>
            </p>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>