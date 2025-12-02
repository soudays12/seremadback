// Script pour le carousel de la section "À propos de nous"
document.addEventListener('DOMContentLoaded', function() {
    const images = [
        {
            src: "gallery/IMG-20251029-WA0019.jpg",
            alt: "Services SEREMAD",
            title: "Nettoyage professionnel",
            subtitle: "Équipe experte en action"
        },
        {
            src: "gallery/IMG-20251029-WA0020.jpg",
            alt: "Équipements SEREMAD",
            title: "Matériel professionnel",
            subtitle: "Outils haute performance"
        },
        {
            src: "gallery/IMG-20251029-WA0021.jpg",
            alt: "Intervention SEREMAD",
            title: "Intervention sur site",
            subtitle: "Service de qualité"
        },
        {
            src: "gallery/IMG-20251029-WA0022.jpg",
            alt: "Nettoyage bureaux",
            title: "Espaces professionnels",
            subtitle: "Environnements propres"
        },
        {
            src: "gallery/IMG-20251029-WA0023.jpg",
            alt: "Équipe SEREMAD",
            title: "Notre équipe",
            subtitle: "Professionnels qualifiés"
        },
        {
            src: "gallery/IMG-20251029-WA0031.jpg",
            alt: "Services spécialisés",
            title: "Services spécialisés",
            subtitle: "Solutions sur mesure"
        }
    ];

    const carouselImage = document.getElementById('carousel-image');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const indicatorsContainer = document.getElementById('indicators');
    const overlayTitle = document.querySelector('.absolute.bottom-0 h3');
    const overlaySubtitle = document.querySelector('.absolute.bottom-0 p');

    if (!carouselImage) return; // Exit if carousel not found

    let currentIndex = 0;

    // Créer les indicateurs
    images.forEach((_, index) => {
        const indicator = document.createElement('div');
        indicator.classList.add('h-2', 'w-2', 'rounded-full', 'cursor-pointer', 'transition-all', 'duration-300');
        indicator.classList.add(index === 0 ? 'bg-white' : 'bg-white/50');
        indicator.addEventListener('click', () => goToSlide(index));
        indicatorsContainer.appendChild(indicator);
    });

    const indicators = document.querySelectorAll('#indicators > div');

    function updateCarousel() {
        carouselImage.src = images[currentIndex].src;
        carouselImage.alt = images[currentIndex].alt;
        if (overlayTitle) overlayTitle.textContent = images[currentIndex].title;
        if (overlaySubtitle) overlaySubtitle.textContent = images[currentIndex].subtitle;
        
        // Mettre à jour les indicateurs
        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.remove('bg-white/50', 'w-2');
                indicator.classList.add('bg-white', 'w-6');
            } else {
                indicator.classList.remove('bg-white', 'w-6');
                indicator.classList.add('bg-white/50', 'w-2');
            }
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateCarousel();
    }

    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);

    // Défilement automatique
    let autoSlide = setInterval(nextSlide, 5000);

    // Arrêter le défilement automatique au survol
    const carousel = document.querySelector('.relative.rounded-3xl');
    if (carousel) {
        carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
        carousel.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextSlide, 5000);
        });
    }

    // Initialiser le carousel
    updateCarousel();
});