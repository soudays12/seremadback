
// Tableau des images du carousel
const images = [
    "gallery/IMG-20251029-WA0019.jpg",
    "gallery/IMG-20251029-WA0020.jpg",
    "gallery/IMG-20251029-WA0021.jpg",
    "gallery/IMG-20251029-WA0022.jpg",
    "gallery/IMG-20251029-WA0028.jpg",
    "gallery/IMG-20251029-WA0029.jpg",
    "gallery/IMG-20251029-WA0031.jpg",
    "gallery/IMG-20251029-WA0032.jpg",
    "gallery/IMG-20251029-WA0033.jpg",
    "gallery/IMG-20251029-WA0034.jpg",
    "gallery/IMG-20251029-WA0035.jpg",
    "gallery/IMG-20251029-WA0036.jpg",
    "gallery/IMG-20251029-WA0037.jpg",
    "gallery/IMG-20251029-WA0038.jpg",
    "gallery/IMG-20251029-WA0039.jpg",
    "gallery/IMG-20251029-WA0040.jpg",
    "gallery/IMG-20251029-WA0041.jpg",
    "gallery/IMG-20251029-WA0042.jpg",
    "gallery/IMG-20251029-WA0043.jpg",
    "gallery/IMG-20251029-WA0044.jpg",
    "gallery/IMG-20251029-WA0045.jpg",
    "gallery/IMG-20251029-WA0046.jpg",
    "gallery/IMG-20251029-WA0047.jpg",
    "gallery/IMG-20251029-WA0048.jpg"
];


let currentIndex = 0;
const carouselImage = document.getElementById("carousel-image");
const indicators = document.getElementById("indicators");

// Création des indicateurs dynamiquement
images.forEach((_, i) => {
    const dot = document.createElement("div");
    dot.classList.add("w-3", "h-3", "rounded-full", "cursor-pointer", "transition", i === 0 ? "bg-blue-600" : "bg-gray-300");
    dot.addEventListener("click", () => goToSlide(i));
    indicators.appendChild(dot);
});

const updateIndicators = () => {
    [...indicators.children].forEach((dot, i) => {
        dot.classList.toggle("bg-gray-500", i === currentIndex);
        dot.classList.toggle("bg-gray-300", i !== currentIndex);
    });
};

const goToSlide = (index) => {
    currentIndex = index;
    carouselImage.src = images[currentIndex];
    updateIndicators();
};

document.getElementById("prev-btn").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    goToSlide(currentIndex);
});

document.getElementById("next-btn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % images.length;
    goToSlide(currentIndex);
});

// Auto-défilement
setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    goToSlide(currentIndex);
}, 5000);
