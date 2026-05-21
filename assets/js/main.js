// Main JavaScript for متجر تيك بلس
document.addEventListener('DOMContentLoaded', () => {
    console.log('متجر تيك بلس loaded');
    
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
