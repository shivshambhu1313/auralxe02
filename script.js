// AuraLuxe Enhanced JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Initialize cart count
    let cartCount = 0;
    const cartCountElement = document.querySelector('.cart-count');
    
    // Update cart count display
    function updateCartCount() {
        if (cartCountElement) {
            cartCountElement.textContent = cartCount;
        }
    }
    
    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart, .btn-outline');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.classList.contains('add-to-cart') || this.textContent.includes('View Details')) {
                if (this.classList.contains('add-to-cart')) {
                    e.preventDefault();
                    cartCount++;
                    updateCartCount();
                    
                    // Show added to cart message
                    const productName = this.closest('.product-info')?.querySelector('h3')?.textContent || 'Item';
                    showNotification(`${productName} added to cart`);
                }
            }
        });
    });
    
    // Notification system
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.innerHTML = `
            <div class="notification-content">
                <span>${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary-dark);
            color: white;
            padding: 15px 20px;
            border-radius: 2px;
            z-index: 10000;
            animation: slideIn 0.3s ease;
            max-width: 300px;
        `;
        
        const content = notification.querySelector('.notification-content');
        content.style.cssText = `
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        `;
        
        const closeBtn = notification.querySelector('.notification-close');
        closeBtn.style.cssText = `
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        `;
        
        closeBtn.addEventListener('click', () => {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        });
        
        document.body.appendChild(notification);
        
        // Auto remove after 3 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }
        }, 3000);
    }
    
    // Add CSS for animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
    
    // Newsletter form submission
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Simulate subscription
            showNotification('Thank you for subscribing to AuraLuxe!');
            this.reset();
        });
    });
    
    // Product filtering for products page
    const categoryFilter = document.getElementById('category-filter');
    const priceFilter = document.getElementById('price-filter');
    const productCards = document.querySelectorAll('.product-card');
    
    if (categoryFilter && priceFilter) {
        categoryFilter.addEventListener('change', filterProducts);
        priceFilter.addEventListener('change', filterProducts);
    }
    
    function filterProducts() {
        const selectedCategory = categoryFilter?.value || 'all';
        const selectedPrice = priceFilter?.value || 'all';
        
        productCards.forEach(card => {
            const category = card.getAttribute('data-category') || 'all';
            const price = parseFloat(card.getAttribute('data-price')) || 0;
            
            let categoryMatch = selectedCategory === 'all' || category === selectedCategory;
            let priceMatch = true;
            
            if (selectedPrice !== 'all') {
                switch(selectedPrice) {
                    case '0-100':
                        priceMatch = price <= 100;
                        break;
                    case '100-200':
                        priceMatch = price > 100 && price <= 200;
                        break;
                    case '200-300':
                        priceMatch = price > 200 && price <= 300;
                        break;
                    case '300+':
                        priceMatch = price > 300;
                        break;
                }
            }
            
            if (categoryMatch && priceMatch) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Header scroll effect
    let lastScrollY = window.scrollY;
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = 'var(--white)';
            header.style.backdropFilter = 'none';
        }
        
        lastScrollY = window.scrollY;
    });
    
    // Initialize any product image interactions
    initializeProductInteractions();
});

function initializeProductInteractions() {
    // Product image hover effects
    const productImages = document.querySelectorAll('.product-image');
    productImages.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        image.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Collection card interactions
    const collectionCards = document.querySelectorAll('.collection-card');
    collectionCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const link = this.querySelector('.collection-link');
            if (link) {
                link.style.color = 'var(--accent-gold)';
                link.style.transform = 'translateX(5px)';
                link.style.transition = 'all 0.3s ease';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const link = this.querySelector('.collection-link');
            if (link) {
                link.style.color = '';
                link.style.transform = '';
            }
        });
    });
}