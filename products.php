<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections - AuraLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>AuraLuxe</h1>
                <span class="tagline">Elegance Redefined</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php" class="active">Collections</a></li>
                    <li><a href="about.php">Our Story</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <a href="#" class="search-icon">🔍</a>
                <a href="#" class="wishlist-icon">❤️</a>
                <a href="#" class="cart-icon">🛒 <span class="cart-count">0</span></a>
            </div>
        </div>
    </header>

    <!-- Products Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Collections</h1>
            <p>Discover timeless pieces crafted with exceptional attention to detail</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-page">
        <div class="container">
            <div class="products-controls">
                <div class="filters">
                    <select id="category-filter">
                        <option value="all">All Categories</option>
                        <option value="evening">Evening Wear</option>
                        <option value="daywear">Daywear</option>
                        <option value="accessories">Accessories</option>
                        <option value="new">New Arrivals</option>
                    </select>
                    <select id="price-filter">
                        <option value="all">All Prices</option>
                        <option value="0-100">$0 - $100</option>
                        <option value="100-200">$100 - $200</option>
                        <option value="200-300">$200 - $300</option>
                        <option value="300+">$300+</option>
                    </select>
                    <select id="sort-by">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest First</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                    </select>
                </div>
                <div class="products-count">
                    Showing <span id="shown-count">12</span> of <span id="total-count">24</span> products
                </div>
            </div>

            <div class="products-grid">
                <!-- Evening Wear -->
                <div class="product-card" data-category="evening" data-price="289">
                    <div class="product-image">
                        <div class="placeholder-image">Silk Evening Gown</div>
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-info">
                        <h3>Ethereal Silk Gown</h3>
                        <p class="product-description">Handcrafted silk gown with delicate embroidery</p>
                        <p class="price">$289.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <div class="product-card" data-category="evening" data-price="325">
                    <div class="product-image">
                        <div class="placeholder-image">Velvet Dress</div>
                    </div>
                    <div class="product-info">
                        <h3>Midnight Velvet Dress</h3>
                        <p class="product-description">Luxurious velvet with art deco detailing</p>
                        <p class="price">$325.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <!-- Daywear -->
                <div class="product-card" data-category="daywear" data-price="165">
                    <div class="product-image">
                        <div class="placeholder-image">Linen Dress</div>
                        <div class="product-badge">Bestseller</div>
                    </div>
                    <div class="product-info">
                        <h3>Organic Linen Dress</h3>
                        <p class="product-description">Sustainable linen in timeless cut</p>
                        <p class="price">$165.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <div class="product-card" data-category="daywear" data-price="145">
                    <div class="product-image">
                        <div class="placeholder-image">Cashmere Set</div>
                    </div>
                    <div class="product-info">
                        <h3>Cashmere Lounge Set</h3>
                        <p class="product-description">Ultra-soft cashmere for everyday luxury</p>
                        <p class="price">$145.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <!-- Accessories -->
                <div class="product-card" data-category="accessories" data-price="89">
                    <div class="product-image">
                        <div class="placeholder-image">Silk Scarf</div>
                    </div>
                    <div class="product-info">
                        <h3>Artisan Silk Scarf</h3>
                        <p class="product-description">Hand-painted silk with gold foil accents</p>
                        <p class="price">$89.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <div class="product-card" data-category="accessories" data-price="125">
                    <div class="product-image">
                        <div class="placeholder-image">Leather Bag</div>
                        <div class="product-badge">Limited</div>
                    </div>
                    <div class="product-info">
                        <h3>Signature Leather Bag</h3>
                        <p class="product-description">Italian leather with gold hardware</p>
                        <p class="price">$125.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <!-- New Arrivals -->
                <div class="product-card" data-category="new" data-price="245">
                    <div class="product-image">
                        <div class="placeholder-image">Cashmere Blazer</div>
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-info">
                        <h3>Premium Cashmere Blazer</h3>
                        <p class="product-description">Italian cashmere with tailored fit</p>
                        <p class="price">$245.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>

                <div class="product-card" data-category="new" data-price="195">
                    <div class="product-image">
                        <div class="placeholder-image">Silk Blouse</div>
                    </div>
                    <div class="product-info">
                        <h3>Signature Silk Blouse</h3>
                        <p class="product-description">Pure silk with French cuffs</p>
                        <p class="price">$195.00</p>
                        <a href="product-detail.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn next">Next →</button>
            </div>
        </div>
    </section>

    <!-- Quality Promise -->
    <section class="quality-promise">
        <div class="container">
            <div class="promise-content">
                <h2>Our Quality Promise</h2>
                <div class="promise-grid">
                    <div class="promise-item">
                        <div class="promise-icon">🎨</div>
                        <h3>Artisan Craftsmanship</h3>
                        <p>Each piece is meticulously crafted by skilled artisans with attention to every detail</p>
                    </div>
                    <div class="promise-item">
                        <div class="promise-icon">🌿</div>
                        <h3>Sustainable Materials</h3>
                        <p>We source only the finest sustainable and ethical materials for our collections</p>
                    </div>
                    <div class="promise-item">
                        <div class="promise-icon">✂️</div>
                        <h3>Perfect Fit Guarantee</h3>
                        <p>Every garment is designed to flatter and fit beautifully, with free alterations available</p>
                    </div>
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
                    <p class="footer-tagline">Elegance Redefined</p>
                    <p class="footer-desc">Premium women's fashion crafted with passion and precision since 2010.</p>
                    <div class="social-links">
                        <a href="#">📘</a>
                        <a href="#">📷</a>
                        <a href="#">🐦</a>
                        <a href="#">📽️</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Collections</h4>
                    <ul>
                        <li><a href="products.php?category=evening">Evening Wear</a></li>
                        <li><a href="products.php?category=daywear">Daywear</a></li>
                        <li><a href="products.php?category=accessories">Accessories</a></li>
                        <li><a href="products.php?category=new">New Arrivals</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="shipping.php">Shipping Information</a></li>
                        <li><a href="return-policy.php">Returns & Exchanges</a></li>
                        <li><a href="size-guide.php">Size Guide</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                        <li><a href="return-policy.php">Return Policy</a></li>
                        <li><a href="accessibility.php">Accessibility</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p>📧 hello@auraluxe.com</p>
                        <p>📞 +1 (555) 123-ALUXE</p>
                        <p>📍 123 Luxury Avenue, Fashion District, NY 10001</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 AuraLuxe. All rights reserved. Crafted with elegance.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>