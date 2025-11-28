@extends('layout.layout')

@section('content')

<!-- Hero Section avec illustration -->
<section class="relative bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <!-- Éléments décoratifs -->
    <div class="absolute top-10 right-10 w-32 h-32 bg-white/10 rounded-full animate-pulse"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 bg-cyan-300/20 rounded-full animate-bounce"></div>
    <div class="absolute top-1/3 right-1/4 w-16 h-16 bg-blue-200/30 rounded-full opacity-50"></div>
    
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Blog & Actualités
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Nos <span class="text-cyan-300">Publications</span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8">
                    Découvrez nos conseils, actualités et innovations dans le nettoyage professionnel
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#publications" class="bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Voir les articles
                    </a>
                    <a href="{{ route('home') }}" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-xl font-semibold transition-all duration-300">
                        Retour accueil
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-2xl transform rotate-3"></div>
                <img src="/images/plein-coup-homme-poussant-le-bouton-de-l-ascenseur.png" alt="Publications SEREMAD" 
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>
<!-- Section Publications -->
<section id="publications" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-blue-100 rounded-full opacity-30 animate-pulse"></div>
    <div class="absolute bottom-20 right-16 w-16 h-16 bg-cyan-100 rounded-full opacity-40 animate-bounce"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <!-- En-tête -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                Actualités & Conseils
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Toutes nos <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">Publications</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto mb-6 rounded-full"></div>
            <p class="text-gray-600 text-xl max-w-2xl mx-auto leading-relaxed">
                Restez informé de nos dernières actualités et découvrez nos conseils d'experts
            </p>
        </div>

        <!-- Bouton retour stylisé -->
        <div class="mb-12">
            <a href="{{ route('home') }}" 
               class="inline-flex items-center gap-3 bg-white hover:bg-gray-50 text-gray-700 hover:text-blue-600 font-semibold px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Retour à l'accueil</span>
            </a>
        </div>

        <!-- Grille des publications -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($publications as $publication)
                <!-- Publication Card -->
                <div class="group bg-white rounded-2xl shadow-2xl hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden flex flex-col h-full">
                    <!-- Image avec overlay -->
                    <div class="relative overflow-hidden">
                        @if($publication->images->count() > 0)
                            <img src="{{ asset('images/' . $publication->images->first()->fichier) }}" 
                                alt="{{ $publication->titre }}"
                                class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-500">
                        @else
                            <img src="gallery/IMG-20251029-WA0020.jpg" 
                                alt="{{ $publication->titre }}"
                                class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-500">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full backdrop-blur-sm">
                                categorie
                            </span>
                        </div>
                    </div>
                    
                    <!-- Contenu -->
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex-1">
                            <!-- Métadonnées -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <div class="flex items-center mr-4">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $publication->created_at->format('d M Y') ?? '29 Oct 2024' }}
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                    Par SEREMAD
                                </div>
                            </div>

                            <!-- Titre et contenu -->
                            <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $publication->titre }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                                {{ Str::limit($publication->contenu, 120) }}
                            </p>
                        </div>

                        <!-- Actions -->
                        <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                            <div class="flex space-x-4 text-gray-500 text-sm">
                                <a href="{{ route('user.publication', $publication) }}" 
                                    class="flex items-center gap-2 hover:text-blue-600 transition-colors duration-300 group/action">
                                    <div class="p-1 bg-blue-50 rounded-lg group-hover/action:bg-blue-100 transition-colors">
                                        <i class='bx bx-show text-lg'></i>
                                    </div>
                                    <span>Voir</span>
                                </a>
                                <a href="#" 
                                class="flex items-center gap-2 hover:text-green-600 transition-colors duration-300 group/action">
                                    <div class="p-1 bg-green-50 rounded-lg group-hover/action:bg-green-100 transition-colors">
                                        <i class='bx bx-message-square text-lg'></i>
                                    </div>
                                    <span>Commenter</span>
                                </a>
                                <a href="#" 
                                class="flex items-center gap-2 hover:text-purple-600 transition-colors duration-300 group/action">
                                    <div class="p-1 bg-purple-50 rounded-lg group-hover/action:bg-purple-100 transition-colors">
                                        <i class='bx bx-share-alt text-lg'></i>
                                    </div>
                                    <span>Partager</span>
                                </a>
                            </div>
                            
                            <!-- Indicateur de lecture -->
                            <div class="flex items-center text-xs text-gray-400">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ $publication->views ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>

        <!-- Statistiques -->
        <div class="mt-16 text-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="text-3xl font-bold text-blue-600 mb-2">{{ count($publications) }}+</div>
                    <div class="text-gray-600">Articles publiés</div>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="text-3xl font-bold text-cyan-600 mb-2">{{ $totalViews ?? '0' }}+</div>
                    <div class="text-gray-600">Lectures totales</div>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="text-3xl font-bold text-green-600 mb-2">{{ $totalComments ?? '0' }}+</div>
                    <div class="text-gray-600">Commentaires</div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="mt-16 text-center">
            <div class="inline-flex flex-wrap gap-4 justify-center">
                <a href="{{ route('home') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    Accueil
                </a>
                <a href="{{ route('services') }}" class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    Nos services
                </a>
                <a href="{{ route('contacts') }}#contact" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    Contact
                </a>
            </div>
        </div>
    </div>
</section>


@endsection