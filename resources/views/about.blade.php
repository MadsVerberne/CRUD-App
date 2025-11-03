<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - CRUD App</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('partials.header')

    <!-- Hero Section -->
    <main class="about-container">

        <!-- Hero / Banner -->
        <section class="about-hero">
            <div class="about-hero-bg"></div>
            <div class="about-hero-text">
                <h1>The Story of CRUD APP</h1>
                <p>Passion for authentic food and user-friendly experiences since 2010.</p>
            </div>
        </section>

        <!-- History and Philosophy -->
        <section class="about-two-column">
            <div class="about-section">
                <h2>Our History</h2>
                <p>
                    CRUD APP was founded in 2010 with a vision to create simple and effective web applications for everyone. What started as a small project has grown into a comprehensive CRUD solution for many users.
                </p>
            </div>

            <div class="about-section">
                <h2>Our Philosophy</h2>
                <p>
                    We believe in simplicity and quality. Every feature in our application is designed with the user in mind. Our mission is to make our users' lives easier and more productive.
                </p>
            </div>
        </section>

        <!-- Contact & Location -->
        <section class="about-contact-section">
            <h2>Location & Contact</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <h4>Address</h4>
                    <p>Keizerin Marialaan 2, Helmond</p>
                </div>
                <div class="contact-card">
                    <h4>Opening Hours</h4>
                    <p>Monday - Friday: 09:00 - 18:00</p>
                </div>
                <div class="contact-card">
                    <h4>Contact</h4>
                    <p>Phone: <a href="tel:021234567">02 123 45 67</a></p>
                    <p>Email: <a href="mailto:info@crudapp.be">info@crudapp.be</a></p>
                </div>
            </div>
        </section>

    </main>

    @include('partials.footer')
    <script src="{{ asset('js/alerts.js') }}"></script>

</body>

</html>