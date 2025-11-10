@extends('layout.layout')
@section('content')

<!-- HEADER -->
<header class="bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-3">
            <!-- Logo et nom -->
            <div class="flex items-center gap-4 group cursor-pointer">
                <div class="relative">
                    <img src="images/logo.png" alt="Logo SEREMAD" class="w-14 h-14 transform group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-blue-500 rounded-full opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                </div>
                <div>
                    <h1 class="text-xl font-bold bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">SEREMAD</h1>
                    <p class="text-xs text-gray-500 font-medium">Nettoyage Professionnel</p>
                </div>
            </div>

            <!-- Navigation desktop -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="#accueil" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                    Accueil
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                    Nos services
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#histoire" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                    Notre histoire
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#pourquoi" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                    Pourquoi nous
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </nav>

            <!-- Actions utilisateur -->
            <div class="flex items-center gap-4">
                @if(Auth::check())
                    <div class="hidden md:flex items-center gap-3">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-semibold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            </div>
                            <span class="text-gray-700 font-medium">Bonjour, {{ Auth::user()->name }}</span>
                        </div>
                        <a href="{{ route('auth.logout') }}" 
                        class="bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white px-5 py-2.5 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Déconnexion
                        </a>
                    </div>
                @else
                    <div class="hidden md:flex items-center gap-4">
                        <a href="{{ route('auth.login') }}" 
                        class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-2.5 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Espace Client
                        </a>
                        <a href="#contact" 
                        class="border-2 border-blue-500 text-blue-600 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-semibold transition-all duration-300">
                            Devis Gratuit
                        </a>
                    </div>
                @endif

                <!-- Bouton menu mobile -->
                <button class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-lg border border-gray-200 hover:border-gray-300 transition-colors duration-300 group">
                    <span class="w-5 h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-all duration-300 transform group-hover:rotate-45 group-hover:translate-y-1.5"></span>
                    <span class="w-5 h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-all duration-300 opacity-100 group-hover:opacity-0"></span>
                    <span class="w-5 h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-all duration-300 transform group-hover:-rotate-45 group-hover:-translate-y-1.5"></span>
                </button>
            </div>
        </div>

        <!-- Navigation mobile (à activer avec JavaScript) -->
        <div class="lg:hidden hidden bg-white border-t border-gray-100 py-4 px-4 shadow-lg">
            <nav class="flex flex-col gap-4">
                <a href="#accueil" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300 border-b border-gray-100">
                    Accueil
                </a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300 border-b border-gray-100">
                    Nos services
                </a>
                <a href="#histoire" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300 border-b border-gray-100">
                    Notre histoire
                </a>
                <a href="#pourquoi" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300 border-b border-gray-100">
                    Pourquoi nous
                </a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300 border-b border-gray-100">
                    Contact
                </a>
                
                @if(Auth::check())
                    <div class="pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            </div>
                            <div>
                                <p class="text-gray-700 font-medium">{{ Auth::user()->name }}</p>
                                <p class="text-sm text-gray-500">Connecté</p>
                            </div>
                        </div>
                        <a href="{{ route('auth.logout') }}" 
                        class="w-full bg-red-500 hover:bg-red-600 text-white py-3 rounded-xl font-semibold transition-colors duration-300 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Déconnexion
                        </a>
                    </div>
                @else
                    <div class="pt-4 border-t border-gray-200 flex flex-col gap-3">
                        <a href="{{ route('auth.login') }}" 
                        class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white py-3 rounded-xl font-semibold transition-colors duration-300 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Espace Client
                        </a>
                        <a href="#contact" 
                        class="w-full border-2 border-blue-500 text-blue-600 hover:bg-blue-50 py-3 rounded-xl font-semibold transition-colors duration-300 text-center">
                            Devis Gratuit
                        </a>
                    </div>
                @endif
            </nav>
        </div>
    </div>
</header>

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{ route('user.b')}}
        <!-- Bouton retour -->
        <div class="mb-6">
            <a href="{{ route('user.back') }}" 
               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux publications
            </a>
        </div>

        <!-- Carte de la publication -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-8">
            <!-- Image de la publication -->
            <div class="relative h-80 overflow-hidden">
                <div class="absolute top-4 right-4">
                    <span class="px-3 py-1 bg-blue-600 text-white text-sm font-semibold rounded-full backdrop-blur-sm">
                       category
                    </span>
                </div>
            </div>

            <!-- Contenu de la publication -->
            <div class="p-8">
                <!-- En-tête avec métadonnées -->
                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 mb-6">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        date
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
                        55 vues
                    </div>
                </div>

                <!-- Titre -->
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 leading-tight">
                    titre
                </h1>

                <!-- Contenu -->
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed mb-8">
                    55
                </div>

                <!-- Actions (Likes, Commentaires, Partage) -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <!-- Likes -->
                    <div class="flex items-center gap-4">
                        <button class="flex items-center gap-2 text-gray-600 hover:text-red-500 transition-colors duration-300 group">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-red-50 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <span class="font-medium">20 likes</span>
                        </button>

                        <!-- Commentaires -->
                        <div class="flex items-center gap-2 text-gray-600">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <span class="font-medium">20 commentaire</span>
                        </div>
                    </div>

                    <!-- Partage -->
                    <div class="flex items-center gap-2">
                        <button class="flex items-center gap-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 group">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-blue-50 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                            </div>
                            <span class="font-medium">Partager</span>
                        </button>
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
                Commentaires 5
            </h2>

            <!-- Formulaire d'ajout de commentaire -->
            <div class="mb-8 p-6 bg-gray-50 rounded-xl border border-gray-200">
                <form action=" " method="POST">
                    @csrf
                    <div class="flex gap-4">
                        <!-- Avatar utilisateur -->
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full flex items-center justify-center text-white font-semibold text-lg">
                                Upodfsfds
                            </div>
                        </div>
                        
                        <!-- Champ de commentaire -->
                        <div class="flex-1">
                            <textarea name="contenu" 
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

            <!-- Liste des commentaires -->
            <div class="space-y-6">

            <div class="flex gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors duration-300">
                    <!-- Avatar de l'utilisateur -->
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-gradient-to-r from-gray-500 to-gray-600 rounded-full flex items-center justify-center text-white font-semibold">
                            dsdsjnjdns
                        </div>
                    </div>
                    
                    <!-- Contenu du commentaire -->
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="font-semibold text-gray-800"> 55 </span>
                            <span class="text-sm text-gray-500">•</span>
                            <span class="text-sm text-gray-500"> 555 </span>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            76454
                        </p>
                        
                        <!-- Actions du commentaire -->
                        <div class="flex items-center gap-4 mt-3">
                            <button class="flex items-center gap-1 text-sm text-gray-500 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                <span> 85</span>
                            </button>
                            
                            <form action="" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-sm text-red-500 hover:text-red-700 transition-colors duration-300"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center py-8">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <p class="text-gray-500 text-lg">Aucun commentaire pour le moment</p>
                    <p class="text-gray-400 text-sm mt-1">Soyez le premier à commenter cette publication !</p>
                </div>
            </div>
        </div>

        <!-- Publications similaires -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Publications similaires</h2>
            <div class="grid gap-6 md:grid-cols-2">

                <a href="" 
                   class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group">
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300 mb-2 line-clamp-2">
                            osojsqodj 
                        </h3>
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                            qskjndjsqnduinqs
                        </p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>8966</span>
                            <span>511 commentaires</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

         <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Publications similaires</h2>
            <div class="grid gap-6 md:grid-cols-2">

                <a href="" 
                   class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group">
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300 mb-2 line-clamp-2">
                            osojsqodj 
                        </h3>
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                            qskjndjsqnduinqs
                        </p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>8966</span>
                            <span>511 commentaires</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </div>
</div>

@endsection