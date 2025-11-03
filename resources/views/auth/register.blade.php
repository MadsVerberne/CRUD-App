<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CRUD App</title>
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
            <h2>Create Account</h2>
            <p>Register to get started</p>

            <form action="{{ route('register') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Full Name" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button type="submit" class="btn-primary full">Register</button>
            </form>


            <p class="signup-text">
                Already have an account?
                <a href="{{ route('login') }}">Log In</a>
            </p>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>