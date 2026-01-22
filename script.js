// DevProfile Pro - Main JavaScript File

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Cherry Blossom Effect
    initCherryBlossom();
    
    // Initialize Mobile Menu
    initMobileMenu();
    
    // Initialize Back to Top Button
    initBackToTop();
    
    // Initialize Section Transitions
    initSectionTransitions();
    
    // Copy to Clipboard functionality
    initCopyToClipboard();
    
    // Initialize Tooltips for FAB buttons
    initFABTooltips();
});

// Cherry Blossom Effect
function initCherryBlossom() {
    const container = document.getElementById('cherry-blossom-container');
    const blossomCount = 15; // Number of blossoms
    
    // Cherry blossom emojis
    const blossoms = ['🌸', '💮', '🏵️', '🌺', '🌼'];
    
    for (let i = 0; i < blossomCount; i++) {
        createBlossom(container, blossoms);
    }
}

function createBlossom(container, blossoms) {
    const blossom = document.createElement('div');
    blossom.classList.add('cherry-blossom');
    
    // Random blossom emoji
    const randomBlossom = blossoms[Math.floor(Math.random() * blossoms.length)];
    blossom.innerHTML = randomBlossom;
    
    // Random position
    const left = Math.random() * 100;
    blossom.style.left = `${left}vw`;
    
    // Random size
    const size = Math.random() * 20 + 15;
    blossom.style.fontSize = `${size}px`;
    
    // Random animation duration
    const duration = Math.random() * 10 + 10;
    blossom.style.animationDuration = `${duration}s`;
    
    // Random delay
    const delay = Math.random() * 5;
    blossom.style.animationDelay = `${delay}s`;
    
    container.appendChild(blossom);
    
    // Remove blossom after animation completes and create a new one
    setTimeout(() => {
        blossom.remove();
        createBlossom(container, blossoms);
    }, (duration + delay) * 1000);
}

// Mobile Menu Toggle
function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Toggle menu icon
            const icon = mobileMenuBtn.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        });
        
        // Close menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
            });
        });
    }
}

// Back to Top Button
function initBackToTop() {
    const backToTopBtn = document.getElementById('back-to-top');
    
    if (backToTopBtn) {
        // Show/hide button on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'visible');
                backToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });
        
        // Scroll to top when clicked
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// Section Transition Effects
function initSectionTransitions() {
    const sections = document.querySelectorAll('section');
    
    // Create Intersection Observer to detect when sections are in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
            }
        });
    }, {
        threshold: 0.1
    });
    
    // Observe each section
    sections.forEach(section => {
        section.classList.add('section-transition');
        observer.observe(section);
    });
}

// Copy to Clipboard Functionality
function initCopyToClipboard() {
    // This function is called from onclick attribute in the HTML
    window.copyToClipboard = function(text) {
        navigator.clipboard.writeText(text)
            .then(() => {
                // Show success message
                showNotification('Đã sao chép vào clipboard: ' + text);
            })
            .catch(err => {
                console.error('Failed to copy: ', err);
                showNotification('Không thể sao chép, vui lòng thử lại');
            });
    };
}

// Show Notification Function
function showNotification(message) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = 'fixed top-6 right-6 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full opacity-0 transition-all duration-300';
    notification.textContent = message;
    notification.id = 'copy-notification';
    
    // Add to body
    document.body.appendChild(notification);
    
    // Trigger animation
    setTimeout(() => {
        notification.classList.remove('translate-x-full', 'opacity-0');
        notification.classList.add('translate-x-0', 'opacity-100');
    }, 10);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.classList.remove('translate-x-0', 'opacity-100');
        notification.classList.add('translate-x-full', 'opacity-0');
        
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

// Floating Action Button Tooltips
function initFABTooltips() {
    const fabButtons = document.querySelectorAll('.fixed.right-6 a');
    
    fabButtons.forEach(button => {
        // Tooltips are already implemented with CSS group-hover
        // Add click effect
        button.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            // Remove ripple after animation
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

// Add ripple effect styles dynamically
const rippleStyles = document.createElement('style');
rippleStyles.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.7);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleStyles);

// Form validation for newsletter subscription (if added later)
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Utility function to format phone numbers
function formatPhoneNumber(phone) {
    // Simple formatting for Vietnamese phone numbers
    if (phone.length === 10) {
        return phone.replace(/(\d{3})(\d{3})(\d{4})/, '$1 $2 $3');
    } else if (phone.length === 11) {
        return phone.replace(/(\d{4})(\d{3})(\d{4})/, '$1 $2 $3');
    }
    return phone;
}