
   
<x-layout>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>We are provided best courier services.</h1>
                <p>We offer a wide range of courier solutions to meet your every need.</p>
                <a href="#" class="btn-primary">Get Started</a>
            </div>
            <div class="hero-image">
                <img src="/images/hero-img.png" alt="Courier Service">
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="feature-box">🚚 On-time delivery</div>
        <div class="feature-box">📦 Secure delivery</div>
        <div class="feature-box">🕒 24/7 Service</div>
    </section>

    <!-- Services -->
    <section class="services">
        <h2>Our services for you</h2>
        <div class="service-cards">
            <div class="card">
                <h3>For Business</h3>
                <ul>
                    <li>Bulk shipping</li>
                    <li>Corporate accounts</li>
                    <li>Custom invoicing</li>
                </ul>
                <a href="#" class="btn-secondary">Learn More</a>
            </div>
            <div class="card">
                <h3>For Household</h3>
                <ul>
                    <li>Affordable rates</li>
                    <li>Local delivery</li>
                    <li>Safe handling</li>
                </ul>
                <a href="#" class="btn-secondary">Learn More</a>
            </div>
            <div class="card">
                <h3>For Personal</h3>
                <ul>
                    <li>Gift delivery</li>
                    <li>Same-day service</li>
                    <li>Flexible slots</li>
                </ul>
                <a href="#" class="btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <h2>What our clients say</h2>
        <div class="testimonial">
            <p>"Fantastic service! Delivered my parcel within hours. Highly recommended."</p>
            <p>- Sarah Doe, ⭐⭐⭐⭐⭐</p>
        </div>
    </section>

    <!-- App Download -->
    <section class="download-app">
        <h2>Download Our App</h2>
        <div class="store-icons">
            <img src="/images/playstore.png" alt="Play Store">
            <img src="/images/appstore.png" alt="App Store">
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div>
                <h4>About</h4>
                <ul>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Track Order</a></li>
                </ul>
            </div>
            <div>
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p>
    </footer>
</x-layout>
