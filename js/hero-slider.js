// Script pour le slider hero de la page d'accueil
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('#heroSlider > div');
    const indicators = document.querySelectorAll('.slide-indicator');
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');
    
    if (slides.length === 0) return; // Exit if no slides found
    
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0', 'translate-x-full', 'translate-x-[-100%]');
                slide.classList.add('opacity-100', 'translate-x-0');
            } else if (i < index) {
                slide.classList.remove('opacity-100', 'translate-x-0', 'translate-x-full');
                slide.classList.add('opacity-0', 'translate-x-[-100%]');
            } else {
                slide.classList.remove('opacity-100', 'translate-x-0', 'translate-x-[-100%]');
                slide.classList.add('opacity-0', 'translate-x-full');
            }
        });
        
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.remove('opacity-50');
                indicator.classList.add('opacity-100');
            } else {
                indicator.classList.remove('opacity-100');
                indicator.classList.add('opacity-50');
            }
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    // Event listeners
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });
    
    // Auto-slide
    setInterval(nextSlide, 8000);
});