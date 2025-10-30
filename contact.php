<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - AuraLuxe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>AuraLuxe</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <a href="#" class="cart-icon">Cart (0)</a>
            </div>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="contact-page">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>We'd love to hear from you! Whether you have a question about our products, need assistance with an order, or just want to share your thoughts, please don't hesitate to reach out.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <h3>Address</h3>
                            <p>123 Fashion Avenue<br>New York, NY 10001</p>
                        </div>
                        <div class="contact-item">
                            <h3>Phone</h3>
                            <p>(555) 123-4567</p>
                        </div>
                        <div class="contact-item">
                            <h3>Email</h3>
                            <p>info@AuraLuxe.com</p>
                        </div>
                        <div class="contact-item">
                            <h3>Store Hours</h3>
                            <p>Monday - Friday: 10am - 8pm<br>Saturday: 10am - 6pm<br>Sunday: 12pm - 5pm</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>AuraLuxe</h3>
                    <p>Your destination for stylish women's fashion</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="return-policy.php">Return Policy</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <p>Email: info@AuraLuxe.com</p>
                    <p>Phone: (555) 123-4567</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 AuraLuxe. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>