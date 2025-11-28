@extends('admin.layout')
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="max-w-6xl mx-auto p-6">
    <!-- Header -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">
                    <i class="fas fa-newspaper text-blue-600 mr-3"></i>{{ $publication->titre }}
                </h1>
                <div class="flex items-center gap-6 text-sm text-gray-500 mb-4">
                    <span><i class="fas fa-calendar mr-2"></i>{{ $publication->created_at->format('d/m/Y à H:i') }}</span>
                    <span><i class="fas fa-eye mr-2"></i>{{ $publication->views ?? 0 }} vues</span>
                    <span><i class="fas fa-heart mr-2 text-red-500"></i>{{ $publication->likes_count ?? 0 }} likes</span>
                    <span><i class="fas fa-images mr-2 text-blue-500"></i>{{ $publication->images->count() }} images</span>
                </div>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('admin.publications.edit', $publication) }}" 
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-edit mr-2"></i>Modifier
                </a>
                <a href="{{ route('admin.publications.index') }}" 
                   class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-arrow-left mr-2"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Contenu principal -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">
                    <i class="fas fa-align-left mr-2 text-blue-600"></i>Contenu
                </h2>
                <div class="prose max-w-none text-gray-700 leading-relaxed">
                    {!! nl2br(e($publication->contenu)) !!}
                </div>
            </div>
        </div>

        <!-- Galerie d'images -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">
                    <i class="fas fa-images mr-2 text-blue-600"></i>Images ({{ $publication->images->count() }})
                </h2>
                
                @if($publication->images->count() > 0)
                    <div class="space-y-4">
                        @foreach($publication->images as $index => $image)
                        <div class="relative group">
                            <img src="{{ asset('images/' . $image->fichier) }}" 
                                 alt="{{ $image->nom }}" 
                                 class="w-full h-48 object-cover rounded-lg shadow cursor-pointer hover:shadow-lg transition"
                                 onclick="openModal('{{ asset('images/' . $image->fichier) }}', '{{ $image->nom }}')">
                            <div class="absolute top-2 left-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">
                                {{ $index + 1 }}/{{ $publication->images->count() }}
                            </div>
                            <div class="absolute bottom-2 left-2 right-2 bg-black bg-opacity-70 text-white p-2 rounded text-xs opacity-0 group-hover:opacity-100 transition">
                                <p class="font-semibold">{{ $image->nom }}</p>
                                <p>{{ number_format($image->taille / 1024, 1) }} KB - {{ strtoupper($image->format) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-image text-4xl mb-4 text-gray-300"></i>
                        <p>Aucune image associée</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal pour affichage plein écran -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-white bg-black bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 transition">
            <i class="fas fa-times text-xl"></i>
        </button>
        <div id="modalCaption" class="absolute bottom-4 left-4 right-4 text-white bg-black bg-opacity-50 p-3 rounded"></div>
    </div>
</div>

<script>
function openModal(src, caption) {
    document.getElementById('imageModal').classList.remove('hidden');
    document.getElementById('modalImage').src = src;
    document.getElementById('modalCaption').textContent = caption;
}

function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
}

// Fermer avec Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeModal();
});
</script>
@endsection