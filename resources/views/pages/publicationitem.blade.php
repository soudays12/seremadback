@extends('layout.layout')
@section('content')


<div class="min-h-screen  border border-amber-200  bg-gradient-to-br from-gray-50 to-blue-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Bouton retour -->
        <div class="mb-6">
            <a href="{{ route('user.allpublications')}}" 
               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium transition-colors duration-300">
                <svg class="w-7 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux publications
            </a>
        </div>

        <!-- Carte de la publication -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-8">
            <!-- Galerie d'images -->
            @if($publication_infos->images->count() > 0)
            <div class="relative">
                @if($publication_infos->images->count() == 1)
                    <!-- Une seule image -->
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('images/' . $publication_infos->images->first()->fichier) }}" 
                             alt="{{ $publication_infos->titre }}" 
                             class="w-full h-full object-cover cursor-pointer hover:scale-105 transition-transform duration-500"
                             onclick="openImageModal('{{ asset('images/' . $publication_infos->images->first()->fichier) }}', '{{ $publication_infos->titre }}')">
                    </div>
                @else
                    <!-- Plusieurs images - Carrousel -->
                    <div class="relative h-80 overflow-hidden" id="imageCarousel">
                        @foreach($publication_infos->images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }} absolute inset-0 transition-opacity duration-500">
                            <img src="{{ asset('images/' . $image->fichier) }}" 
                                 alt="{{ $publication_infos->titre }}" 
                                 class="w-full h-full object-cover cursor-pointer"
                                 onclick="openImageModal('{{ asset('images/' . $image->fichier) }}', '{{ $publication_infos->titre }}')">
                        </div>
                        @endforeach
                        
                        <!-- Navigation carrousel -->
                        <button onclick="prevImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-full transition">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-full transition">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Indicateurs -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
                            @foreach($publication_infos->images as $index => $image)
                            <button onclick="goToImage({{ $index }})" class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition indicator {{ $index == 0 ? 'active' : '' }}"></button>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                <!-- Badge nombre d'images -->
                @if($publication_infos->images->count() > 1)
                <div class="absolute top-4 left-4">
                    <span class="px-3 py-1 bg-black bg-opacity-70 text-white text-sm font-semibold rounded-full">
                        <i class="fas fa-images mr-1"></i>{{ $publication_infos->images->count() }} photos
                    </span>
                </div>
                @endif
                
                <div class="absolute top-4 right-4">
                    <span class="px-3 py-1 bg-blue-600 text-white text-sm font-semibold rounded-full backdrop-blur-sm">
                       Nettoyage
                    </span>
                </div>
            </div>
            @else
            <!-- Pas d'image -->
            <div class="h-80 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                <div class="text-center text-gray-500">
                    <i class="fas fa-image text-6xl mb-4"></i>
                    <p class="text-lg font-semibold">Aucune image disponible</p>
                </div>
            </div>
            @endif

            <!-- Contenu de la publication -->
            <div class="p-8">
                <!-- En-tête avec métadonnées -->
                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 mb-6">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        {{ $publication_infos->created_at->format('d/m/Y à H:i') }}
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        Par SEREMAD
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                        {{ $publication_infos->views ?? 0 }} vues
                    </div>
                </div>

                <!-- Titre -->
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 leading-tight">
                    {{ $publication_infos->titre }}
                </h1>

                <!-- Contenu -->
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed mb-8">
                    {!! nl2br(e($publication_infos->contenu)) !!}
                </div>

                <!-- Actions (Likes, Commentaires, Partage) -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <!-- Likes -->
                    <div class="flex items-center gap-4">
                        @auth
                            <a href="{{ route('user.like', $publication_infos->id) }}" class="flex items-center gap-2 text-gray-600 hover:text-red-500 transition-colors duration-300 group">
                                <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-red-50 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </div>
                                <span class="font-medium">{{ $publication_infos->likes_count ?? 0 }} likes</span>
                            </a>
                        @else
                            <a href="{{ route('auth.login') }}" class="flex items-center gap-2 text-gray-600 hover:text-red-500 transition-colors duration-300 group">
                                <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-red-50 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </div>
                                <span class="font-medium">{{ $publication_infos->likes_count ?? 0 }} likes</span>
                            </a>
                        @endauth

                        <!-- Commentaires -->
                        <div class="flex items-center gap-2 text-gray-600">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <span class="font-medium">{{ $publication_infos->comments->count() ?? 0 }} commentaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section des commentaires -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Commentaires ({{ $publication_infos->comments->count() }})
            </h2>

            @auth
            <!-- Formulaire d'ajout de commentaire -->
            <div class="mb-8 p-6 bg-gray-50 rounded-xl border border-gray-200">
                <form action="{{ route('user.comment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="publication_id" value="{{ $publication_infos->id }}">
                    <div class="flex gap-4">
                        <!-- Avatar utilisateur -->
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full flex items-center justify-center text-white font-semibold text-lg">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                        </div>
                        
                        <!-- Champ de commentaire -->
                        <div class="flex-1">
                            <textarea name="message" 
                                      rows="3"
                                      placeholder="Laissez un commentaire..."
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none transition-colors duration-300"
                                      required></textarea>
                            <div class="mt-3 flex justify-end">
                                <button type="submit"
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-300 transform hover:scale-105">
                                    Publier
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="mb-8 p-6 bg-blue-50 rounded-xl border border-blue-200 text-center">
                <p class="text-blue-700 mb-3">
                    Connectez-vous pour laisser un commentaire
                </p>
                <a href="{{ route('auth.login') }}"
                   class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Se connecter
                </a>
            </div>
            @endauth

            <!-- Liste des commentaires -->
            <div class="space-y-6">
                @forelse($publication_infos->comments as $comment)
                <div class="flex gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors duration-300">
                    <!-- Avatar de l'utilisateur -->
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full flex items-center justify-center text-white font-semibold p-2">
                            <i class="fas fa-user text-lg"></i>
                        </div>
                    </div>
                    
                    <!-- Contenu du commentaire -->
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="font-semibold text-gray-800">{{ $comment->user->name ?? 'Utilisateur' }}</span>
                            <span class="text-sm text-gray-500">•</span>
                            <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $comment->message }}
                        </p>
                        
                        <!-- Actions du commentaire -->
                        @auth
                        @if(Auth::id() === $comment->user_id)
                        <div class="flex items-center gap-4 mt-3">
                            <form action="{{ route('user.comment.destroy', $comment->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-sm text-red-500 hover:text-red-700 transition-colors duration-300"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')">
                                    <i class="fas fa-trash mr-1"></i>Supprimer
                                </button>
                            </form>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
                @empty
                <div class="text-center py-8">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <p class="text-gray-500 text-lg">Aucun commentaire pour le moment</p>
                    <p class="text-gray-400 text-sm mt-1">Soyez le premier à commenter cette publication !</p>
                </div>
                @endforelse
            </div>
        </div>

    </div>
</div>

<!-- Modal pour affichage plein écran des images -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-6xl max-h-full">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white bg-black bg-opacity-50 hover:bg-opacity-75 rounded-full p-3 transition">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
</div>

<script>
// Variables globales pour le carrousel
let currentImageIndex = 0;
const totalImages = {{ $publication_infos->images->count() }};

// Fonction pour ouvrir le modal d'image
function openImageModal(src, alt) {
    document.getElementById('imageModal').classList.remove('hidden');
    document.getElementById('modalImage').src = src;
    document.getElementById('modalImage').alt = alt;
}

// Fonction pour fermer le modal
function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
}

// Navigation du carrousel
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % totalImages;
    updateCarousel();
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
    updateCarousel();
}

function goToImage(index) {
    currentImageIndex = index;
    updateCarousel();
}

function updateCarousel() {
    const items = document.querySelectorAll('.carousel-item');
    const indicators = document.querySelectorAll('.indicator');
    
    items.forEach((item, index) => {
        if (index === currentImageIndex) {
            item.classList.add('active');
            item.style.opacity = '1';
        } else {
            item.classList.remove('active');
            item.style.opacity = '0';
        }
    });
    
    indicators.forEach((indicator, index) => {
        if (index === currentImageIndex) {
            indicator.classList.add('active');
            indicator.style.backgroundColor = 'white';
        } else {
            indicator.classList.remove('active');
            indicator.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        }
    });
}

// Fermer le modal avec Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeImageModal();
});

// Auto-play du carrousel (optionnel)
if (totalImages > 1) {
    setInterval(() => {
        nextImage();
    }, 5000); // Change d'image toutes les 5 secondes
}
</script>

@endsection