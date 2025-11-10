
// const slides = document.querySelectorAll('#heroSlider > div');
// let currentSlide = 0;

// function nextSlide() {
//     slides[currentSlide].classList.remove('opacity-100');
//     slides[currentSlide].classList.add('opacity-0');

//     currentSlide = (currentSlide + 1) % slides.length;

//     slides[currentSlide].classList.remove('opacity-0');
//     slides[currentSlide].classList.add('opacity-100');
// }

// setInterval(nextSlide, 5000); // change toutes les 5 secondes



document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('#heroSlider > div');
    const indicators = document.querySelectorAll('.slide-indicator');
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');
    let currentSlide = 0;
    let slideInterval;

    // Fonction pour afficher un slide spécifique
    function showSlide(index) {
        // Masquer toutes les slides
        slides.forEach((slide, i) => {
            slide.classList.remove('opacity-100', 'translate-x-0');
            slide.classList.add('opacity-0', 'translate-x-full');
            indicators[i].classList.remove('opacity-100', 'w-3');
            indicators[i].classList.add('opacity-50', 'w-2');
        });

        // Afficher la slide actuelle
        slides[index].classList.remove('opacity-0', 'translate-x-full');
        slides[index].classList.add('opacity-100', 'translate-x-0');
        indicators[index].classList.remove('opacity-50', 'w-2');
        indicators[index].classList.add('opacity-100', 'w-3');
        
        currentSlide = index;
    }

    // Slide suivant
    function nextSlide() {
        let next = currentSlide + 1;
        if (next >= slides.length) next = 0;
        showSlide(next);
    }

    // Slide précédent
    function prevSlide() {
        let prev = currentSlide - 1;
        if (prev < 0) prev = slides.length - 1;
        showSlide(prev);
    }

    // Événements des boutons
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Événements des indicateurs
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => showSlide(index));
    });

    // Auto-slide
    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }

    // Démarrer l'auto-slide
    startAutoSlide();

    // Arrêter l'auto-slide au survol
    const slider = document.getElementById('heroSlider');
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);

    // Navigation au clavier
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') prevSlide();
        if (e.key === 'ArrowRight') nextSlide();
    });

    // Initialisation
    showSlide(0);





    // 2 --- Animation au scroll pour les cartes de publications
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);
    
    // Appliquer l'animation aux cartes
    document.querySelectorAll('#publications .group').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });




});





document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Appliquer l'animation aux cartes de services
    document.querySelectorAll('#services .group').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });
});





