// Script pour les modals de commentaires
document.addEventListener('DOMContentLoaded', function() {
    const openModal = document.getElementById('openModal');
    const closeModal = document.getElementById('closeModal');
    const modalOverlay = document.getElementById('modalOverlay');

    if (!openModal || !modalOverlay) return; // Exit if elements not found

    // Ouvrir le popup
    openModal.addEventListener('click', (e) => {
        e.preventDefault();
        modalOverlay.classList.remove('hidden');
        modalOverlay.classList.add('flex');
    });

    // Fermer en cliquant à l'extérieur du popup
    document.addEventListener('click', (e) => {
        if (e.target === modalOverlay) {
            modalOverlay.classList.add('hidden');
            modalOverlay.classList.remove('flex');
        }
    });

    // Fermer avec le bouton close si présent
    if (closeModal) {
        closeModal.addEventListener('click', (e) => {
            e.preventDefault();
            modalOverlay.classList.add('hidden');
            modalOverlay.classList.remove('flex');
        });
    }
});