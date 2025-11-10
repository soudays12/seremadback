// Script pour le menu mobile
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('button.lg\\:hidden');
    const mobileMenu = document.querySelector('.lg\\:hidden + .lg\\:hidden');
    
    menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        
        // Animation des lignes du bouton hamburger
        const spans = menuButton.querySelectorAll('span');
        if (mobileMenu.classList.contains('hidden')) {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        } else {
            spans[0].style.transform = 'rotate(45deg) translateY(6px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translateY(-6px)';
        }
    });
});