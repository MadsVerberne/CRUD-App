<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - CRUD App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-background-light">

    <!-- Header / Nav -->
    @include('partials.header')

    <!-- Main -->
    <main class="contact-container" style="padding: 4rem 1rem; max-width: 1000px; margin: auto;">

        <!-- Title -->
        <section style="text-align: center; margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; font-weight: 900; color: #221910;">Contact Us</h1>
            <p style="max-width: 600px; margin: 1rem auto; color: #6b7280;">
                Do you have any questions, feedback, or want to get in touch with our team?
                Fill in the form below or reach us using the contact details.
            </p>
        </section>

        <!-- Contact Form + Info -->
        <section class="contact-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">

            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#" method="POST" class="login-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Your email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your message..." rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn-primary full">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Our Office</h2>
                <p><strong>Address:</strong> Main Street 12, 1000 Brussels</p>
                <p><strong>Phone:</strong> <a href="tel:021234567" style="color: #ec7f13;">02 123 45 67</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@crudapp.be" style="color: #ec7f13;">info@crudapp.be</a></p>
                <p><strong>Opening Hours:</strong> Monday – Friday, 09:00 – 18:00</p>

                <div style="margin-top: 1.5rem; border-radius: 0.75rem; overflow: hidden;">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgOTom_y0z3LFE4US3ONzEtza3kXz2lXLIP189pctF1aBRT5XFptcVhsyO53Csvjs6RyEcA0rkE_lux5gMaO-PbUtnYjnjqNeogy1w15d3kwAY3jEqLn_v6d3EmuKVGNoeAjDbG3RCXry3BYZStokgQmsh0n5XQAxa1y77wA65NvREW5LfNtvzkBc-2Lxep-mfvkHqvOAODHUJrEqmnML2mTuUaE9PbpGgrfmniG7ALR5NKOEK9inu-slPE0onNf3WrFKHZDAlOq4"
                        alt="Office location" style="width: 100%; object-fit: cover; height: 250px;">
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>

</html>
