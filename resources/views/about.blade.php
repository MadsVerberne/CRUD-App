<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-background-light">

    @include('layouts.navigation')

    <!-- Hero Section -->
    <main class="about-container">

        <!-- Hero / Banner -->
        <section class="about-hero">
            <div class="about-hero-bg"></div>
            <div class="about-hero-text">
                <h1>Het Verhaal van CRUD APP</h1>
                <p>Passie voor authentiek eten en een gebruiksvriendelijke ervaring, sinds 2010.</p>
            </div>
        </section>

        <!-- History -->
        <section class="about-section">
            <h2>Onze Geschiedenis</h2>
            <p>
                CRUD APP is opgericht in 2010 met een visie om simpele en effectieve webapplicaties te creëren voor iedereen. Wat begon als een klein project is uitgegroeid tot een volwaardige CRUD-oplossing voor vele gebruikers.
            </p>
        </section>

        <!-- Philosophy -->
        <section class="about-section">
            <h2>Onze Filosofie</h2>
            <p>
                Wij geloven in eenvoud en kwaliteit. Elke functie in onze applicatie is ontworpen met de gebruiker in gedachten. Onze missie is om het leven van onze gebruikers makkelijker en productiever te maken.
            </p>
        </section>

        <!-- Team / Chef -->
        <section class="about-section about-team">
            <h2>Ons Team</h2>
            <div class="team-member">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw2Hl5Rs-x6LtcPNpQjgTa4N20-eXIur3YGNJ-JXnxmh3-0UBbTNuCY2_Os4GUPGZ6AufgwLcYalQEe04hbC6Gb4q5uUAB--DItff2BQW0zfSrC0yt-a-ZgX0TNVuAMivFQcxBVWxx7VgS0BjI7OQ4n3VCJiEJFbeAA6viqcUMamHnZ56doX4_Cb_Q471epBSoWfVwLs4KvJlK8o1ARLyaIV2mSTsgrJcwSEvJtoYCK4sN0ZKmrSKt_wOPY-WZhDjxyh6ldRnLg0o" alt="Team Lead">
                <div class="team-info">
                    <h3>Marco Rossi</h3>
                    <p class="team-role">Oprichter & CEO</p>
                    <p>
                        Marco Rossi heeft meer dan 20 jaar ervaring in de technologie en development. Hij is de drijvende kracht achter CRUD APP en zorgt dat alles soepel en efficiënt werkt.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact & Location -->
        <section class="about-section about-contact">
            <h2>Locatie & Contact</h2>
            <div class="contact-details">
                <div>
                    <h4>Adres</h4>
                    <p>Kerkstraat 12, 1000 Brussel</p>
                </div>
                <div>
                    <h4>Openingstijden</h4>
                    <p>Maandag - Vrijdag: 09:00 - 18:00</p>
                </div>
                <div>
                    <h4>Contact</h4>
                    <p>Telefoon: <a href="tel:021234567">02 123 45 67</a></p>
                    <p>E-mail: <a href="mailto:info@crudapp.be">info@crudapp.be</a></p>
                </div>
            </div>
        </section>

    </main>


    <!-- Footer -->
    <footer class="site-footer">
        <p>© 2025 CRUD APP. Alle rechten voorbehouden.</p>
    </footer>
    <script src="{{ asset('js/alerts.js') }}"></script>

</body>

</html>