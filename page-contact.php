<?php get_header(); ?>

<!-- HERO -->
<section class="contact-hero">
    <div class="container">
        <h1>📞 Get in Touch</h1>
        <p>We're here to guide you on your journey</p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="container contact-section">
    <div class="contact-grid">

        <!-- LEFT: INFO -->
        <div class="contact-info">
            <h2>Contact Information</h2>

            <p>📍 Location: Delhi, India</p>
            <p>📧 Email: support@kareenaastrology.com</p>
            <p>📱 Phone: +91 9876543210</p>

            <p class="contact-note">
                Feel free to reach out for any queries related to astrology,
                consultations, or guidance.
            </p>
        </div>

        <!-- RIGHT: FORM -->
        <div class="contact-form">
            <h2>Send a Message</h2>

            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" rows="5" required></textarea>

                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>

    </div>
</section>

<?php get_footer(); ?>