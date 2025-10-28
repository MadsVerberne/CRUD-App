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
    @include('partials.header')

    <!-- Hero Section -->
    <main class="about-container">

        <!-- Hero / Banner -->
        <section class="about-hero">
            <div>
                <h1>About CRUD APP</h1>
                <p>Passion for simplicity, technology, and quality since 2010.</p>
            </div>
        </section>

        <!-- History -->
        <section class="about-section">
            <h2>Our History</h2>
            <p>
                CRUD APP was founded in 2010 with a vision to create simple and effective web applications for everyone.
                What started as a small project has grown into a full-featured CRUD solution used by many people.
            </p>
        </section>

        <!-- Philosophy -->
        <section class="about-section">
            <h2>Our Philosophy</h2>
            <p>
                We believe in simplicity and quality. Every feature in our application is designed with the user in mind.
                Our mission is to make our users' lives easier and more productive.
            </p>
        </section>

        <!-- Team / Founder -->
        <section class="about-section about-team">
            <h2>Our Team</h2>
            <div class="team-member">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw2Hl5Rs-x6LtcPNpQjgTa4N20-eXIur3YGNJ-JXnxmh3-0UBbTNuCY2_Os4GUPGZ6AufgwLcYalQEe04hbC6Gb4q5uUAB--DItff2BQW0zfSrC0yt-a-ZgX0TNVuAMivFQcxBVWxx7VgS0BjI7OQ4n3VCJiEJFbeAA6viqcUMamHnZ56doX4_Cb_Q471epBSoWfVwLs4KvJlK8o1ARLyaIV2mSTsgrJcwSEvJtoYCK4sN0ZKmrSKt_wOPY-WZhDjxyh6ldRnLg0o" alt="Team Lead">
                <div class="team-info">
                    <h3>Marco Rossi</h3>
                    <p class="team-role">Founder & CEO</p>
                    <p>
                        Marco Rossi has over 20 years of experience in technology and development.
                        He is the driving force behind CRUD APP and ensures everything runs smoothly and efficiently.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact & Location -->
        <section class="about-section about-contact">
            <h2>Location & Contact</h2>
            <div class="contact-details">
                <div>
                    <h4>Address</h4>
                    <p>Church Street 12, 1000 Brussels</p>
                </div>
                <div>
                    <h4>Opening Hours</h4>
                    <p>Monday - Friday: 09:00 - 18:00</p>
                </div>
                <div>
                    <h4>Contact</h4>
                    <p>Phone: <a href="tel:021234567">02 123 45 67</a></p>
                    <p>Email: <a href="mailto:info@crudapp.be">info@crudapp.be</a></p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>

</html>