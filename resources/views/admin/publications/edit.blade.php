@extends('admin.layout')
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="max-w-6xl mx-auto p-6">
    <!-- Header -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            <i class="fas fa-edit text-yellow-600 mr-3"></i>Modifier la publication
        </h1>
        <p class="text-gray-600 mt-2">Modifiez les informations de votre publication</p>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200">
            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Formulaire principal -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <form action="{{ route('admin.publications.update', $publication) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-heading mr-2 text-blue-600"></i>Titre
                        </label>
                        <input type="text" name="titre" value="{{ old('titre', $publication->titre) }}" 
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                               required>
                        @error('titre')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-align-left mr-2 text-blue-600"></i>Contenu
                        </label>
                        <textarea name="contenu" rows="10" 
                                  class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                  required>{{ old('contenu', $publication->contenu) }}</textarea>
                        @error('contenu')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nouvelles images -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-plus mr-2 text-green-600"></i>Ajouter de nouvelles images
                        </label>
                        <input type="file" name="images[]" multiple accept="image/*" 
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Vous pouvez sélectionner plusieurs images (max 2MB chacune)</p>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                            <i class="fas fa-save mr-2"></i>Mettre à jour
                        </button>
                        <a href="{{ route('admin.publications.show', $publication) }}" 
                           class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold transition">
                            <i class="fas fa-eye mr-2"></i>Voir
                        </a>
                        <a href="{{ route('admin.publications.index') }}" 
                           class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-6 py-3 rounded-lg font-semibold transition">
                            <i class="fas fa-arrow-left mr-2"></i>Retour
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Images existantes -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">
                    <i class="fas fa-images mr-2 text-blue-600"></i>Images actuelles ({{ $publication->images->count() }})
                </h2>
                
                @if($publication->images->count() > 0)
                    <div class="space-y-4">
                        @foreach($publication->images as $image)
                        <div class="relative group">
                            <img src="{{ asset('images/' . $image->fichier) }}" 
                                 alt="{{ $image->nom }}" 
                                 class="w-full h-32 object-cover rounded-lg shadow">
                            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center rounded-lg">
                                <form action="{{ route('admin.images.destroy', $image->id) }}" method="POST" class="inline" 
                                      onsubmit="return confirm('Supprimer cette image ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-full transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="mt-2 text-xs text-gray-600">
                                <p class="font-semibold truncate">{{ $image->nom }}</p>
                                <p>{{ number_format($image->taille / 1024, 1) }} KB</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-image text-4xl mb-4 text-gray-300"></i>
                        <p>Aucune image</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection