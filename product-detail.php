<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - AuraLuxe</title>
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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <a href="#" class="cart-icon">Cart (0)</a>
            </div>
        </div>
    </header>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-content">
                <div class="product-images">
                    <img src="https://m.media-amazon.com/images/I/81MyEudgSwL._AC_UY1000_.jpg" alt="Floral Summer Dress" class="main-image">
                    <div class="thumbnail-images">
                        <img src="https://www.shopamericanthreads.com/cdn/shop/files/cordelia-blue-floral-ruffle-satin-maxi-dress-with-keyhole-cutout-4.jpg?v=1735361206&width=1200" alt="Floral Summer Dress Front">
                        <img src="https://m.media-amazon.com/images/I/71KVfHeBlbL._AC_UY1000_.jpg" alt="Floral Summer Dress Back">
                    </div>
                </div>
                <div class="product-info">
                    <h1>Floral Summer Dress</h1>
                    <p class="price">$49.99</p>
                    <p class="description">This beautiful floral summer dress is perfect for warm days and special occasions. Made from lightweight, breathable fabric with a comfortable fit.</p>
                    
                    <div class="product-options">
                        <div class="option">
                            <label for="size">Size:</label>
                            <select id="size">
                                <option value="xs">XS</option>
                                <option value="s">S</option>
                                <option value="m" selected>M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                            </select>
                        </div>
                        <div class="option">
                            <label for="color">Color:</label>
                            <select id="color">
                                <option value="blue">Blue Floral</option>
                                <option value="pink">Pink Floral</option>
                                <option value="yellow">Yellow Floral</option>
                            </select>
                        </div>
                        <div class="option">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" value="1" min="1">
                        </div>
                    </div>
                    
                    <button class="btn add-to-cart">Add to Cart</button>
                    
                    <div class="product-details">
                        <h3>Product Details</h3>
                        <ul>
                            <li>Material: 100% Cotton</li>
                            <li>Care: Machine wash cold, tumble dry low</li>
                            <li>Length: Knee-length</li>
                            <li>Style: A-line</li>
                            <li>Neckline: V-neck</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Related Products -->
            <div class="related-products">
                <h2>You Might Also Like</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <img src="https://www.ladyblacktie.com/cdn/shop/files/Jillian_black__32587.1711633891.1280.1280__79617.1717609660.1280.1280.jpg?v=1718336819&width=1024" alt="Elegant Evening Gown">
                        <h3>Elegant Evening Gown</h3>
                        <p class="price">$89.99</p>
                        <a href="product-detail.php" class="btn">View Details</a>
                    </div>
                    <div class="product-card">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjhJ7HWRKpY6VotyQdtgt1kmMtfcUIbrpqiR3J4qLKqjRD20DQtz0Yj_0n9NmwiiGE9w7kDQR8pogGlj8s3CVEyUjgrCe0mq9DPPpLf9aQ8s63KGlDwFjyANncio0Am8Yxox-4Do5oWHUDjIh58Oa-busR6ZPKxCMp9QospK2rWTX7nw2xNOYQQcoGOKQ/s1600/forevervanny-Pink%20Solid&Striped%20CDMX-4521.png" alt="Casual Day Dress">
                        <h3>Casual Day Dress</h3>
                        <p class="price">$59.99</p>
                        <a href="product-detail.php" class="btn">View Details</a>
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