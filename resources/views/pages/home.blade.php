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



    <!-- section accueil -->
    <section class="relative overflow-hidden">
        <!-- Slider container -->
        <div id="heroSlider" class="relative w-full h-screen">
            <!-- Slide 1 - Accueil -->
            <div class="absolute inset-0 transition-all duration-1000 opacity-100 transform translate-x-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('images/plein-coup-homme-poussant-le-bouton-de-l-ascenseur.png');">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/60 to-transparent flex items-center">
                    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                        <div class="max-w-2xl">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                                <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                                <span class="text-white text-sm font-semibold">Service Professionnel</span>
                            </div>
                            
                            <!-- Titre principal -->
                            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                                Bienvenue sur 
                                <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                    SEREMAD
                                </span>
                            </h1>
                            
                            <!-- Sous-titre accrocheur -->
                            <p class="text-2xl md:text-4xl font-semibold text-white mb-6">
                                <span class="text-blue-400">La propreté</span>, 
                                <span class="text-cyan-300">Notre excellence</span>
                            </p>
                            
                            <!-- Description -->
                            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed max-w-3xl">
                                Prestation de nettoyage professionnelle pour entreprises et particuliers — 
                                solutions sur mesure, personnel qualifié et équipements haute performance.
                            </p>
                            
                            <!-- Boutons d'action -->
                            <div class="flex flex-col sm:flex-row gap-4 mb-12">
                                <a href="#en-savoir-plus"
                                    class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-semibold py-5 px-12 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-2xl flex items-center justify-center gap-3">
                                    <span>Découvrir nos services</span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                                <a href="{{ route('auth.login') }}"
                                    class="group bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white hover:text-gray-900 font-semibold py-5 px-12 rounded-xl transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <span>Devis Gratuit</span>
                                </a>
                            </div>
                            
                            <!-- Indicateurs de confiance -->
                            <div class="flex flex-wrap gap-8 text-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold">100% Satisfait</div>
                                        <div class="text-sm text-gray-300">Clients heureux</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold">24h/24</div>
                                        <div class="text-sm text-gray-300">Service urgent</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Services -->
            <div class="absolute inset-0 transition-all duration-1000 opacity-0 transform translate-x-full bg-cover bg-center bg-no-repeat"
                style="background-image: url('gallery/IMG-20251029-WA0031.jpg')">
                <div class="absolute inset-0 bg-gradient-to-l from-gray-900/80 via-gray-900/60 to-transparent flex items-center">
                    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full text-right">
                        <div class="ml-auto max-w-2xl">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-white text-sm font-semibold">Expertise Qualifiée</span>
                            </div>
                            
                            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                                Excellence en 
                                <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
                                    Nettoyage
                                </span>
                            </h1>
                            
                            <p class="text-2xl md:text-4xl font-semibold text-white mb-6">
                                <span class="text-green-400">Fiabilité</span> et 
                                <span class="text-emerald-300">Qualité Supérieure</span>
                            </p>
                            
                            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed">
                                Des solutions complètes adaptées aux besoins spécifiques des entreprises et particuliers, 
                                avec une équipe d'experts dédiée.
                            </p>
                            
                            <div class="flex justify-end gap-4 mb-12">
                                <a href="#services"
                                    class="group bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-700 hover:to-emerald-600 text-white font-semibold py-5 px-12 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-2xl flex items-center justify-center gap-3">
                                    <span>Voir nos services</span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Professionnalisme -->
            <div class="absolute inset-0 transition-all duration-1000 opacity-0 transform translate-x-full bg-cover bg-center bg-no-repeat"
                style="background-image: url('gallery/IMG-20251029-WA0022.jpg')">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 via-gray-900/50 to-gray-900/80 flex items-center">
                    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full text-center">
                        <div class="max-w-3xl mx-auto">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/20">
                                <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                                <span class="text-white text-sm font-semibold">Équipements Professionnels</span>
                            </div>
                            
                            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                                Matériel 
                                <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                                    Haut de Gamme
                                </span>
                            </h1>
                            
                            <p class="text-2xl md:text-4xl font-semibold text-white mb-6">
                                <span class="text-purple-400">Performance</span> et 
                                <span class="text-pink-300">Efficacité</span>
                            </p>
                            
                            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed">
                                Des équipements professionnels et des produits écologiques pour un résultat impeccable 
                                à chaque intervention.
                            </p>
                            
                            <div class="flex justify-center gap-4">
                                <a href="#contact"
                                    class="group bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-700 hover:to-pink-600 text-white font-semibold py-5 px-12 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-2xl flex items-center justify-center gap-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span>Contact Immédiat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contrôles du slider -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-3 z-20">
            <button id="prevSlide" class="w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            
            <!-- Indicateurs de slide -->
            <div class="flex items-center gap-2">
                <button class="slide-indicator w-3 h-3 bg-white rounded-full transition-all duration-300 opacity-100"></button>
                <button class="slide-indicator w-3 h-3 bg-white/50 rounded-full transition-all duration-300 opacity-50"></button>
                <button class="slide-indicator w-3 h-3 bg-white/50 rounded-full transition-all duration-300 opacity-50"></button>
            </div>
            
            <button id="nextSlide" class="w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
    </section>
    <style>
        /* Animation d'entrée pour le texte */
        #heroSlider > div > div > div {
            animation: slideInUp 1s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Amélioration des performances */
        #heroSlider > div {
            will-change: transform, opacity;
        }

        /* Support du réduit de mouvement */
        @media (prefers-reduced-motion: reduce) {
            #heroSlider > div,
            .slide-indicator {
                transition-duration: 0.1ms !important;
            }
            
            .animate-bounce {
                animation: none;
            }
        }
    </style>
    


    <main class="mx-auto  items-center">

        <!-- Section Qui sommes-nous -->
        <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-10 items-center">
            <!-- Texte à gauche -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-blue-600 font-semibold text-4xl flex items-center">
                        Qui sommes nous ?
                    </h1>
                    <br>
                    <p class="w-20 h-1 bg-linear-to-r from-blue-600 to-cyan-400  mr-2"></p>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    Venez découvrir<br>notre histoire
                </h2>
                <p class="text-gray-600 text-xl leading-relaxed">
                    <strong>SEREMAD</strong> est une entreprise qui offre des services d’hygiène et de propreté
                    aux professionnels mais aussi des prestations de nettoyage pour particuliers.
                </p>
                <button
                    class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-8 py-5 rounded-full shadow-md hover:shadow-lg transition flex items-center space-x-2">
                    <span>Lire plus</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Carousel à droite -->
            <div class="relative rounded-3xl overflow-hidden shadow-xl">
                <img id="carousel-image"
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1000&q=80"
                    alt="Image SEREMAD" class="w-full h-[400px] object-cover transition-all duration-700">

                <!-- Boutons de navigation -->
                <button id="prev-btn"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/70 hover:bg-white rounded-full p-2 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button id="next-btn"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/70 hover:bg-white rounded-full p-2 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Indicateurs -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2" id="indicators"></div>
            </div>
        </section>

        
        <!-- Logo Carousel animation - Design amélioré -->
        <div class="py-16 bg-gradient-to-br from-gray-50 to-white/80">
            <!-- En-tête -->
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4 border border-blue-200">
                    Partenaires & Clients
                </span>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Ils nous font <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">confiance</span>
                </h3>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Des entreprises et institutions de confiance qui nous font confiance pour leurs besoins en nettoyage professionnel
                </p>
            </div>

            <!-- Carrousel -->
            <div class="relative">
                <!-- Effets de dégradé sur les bords -->
                <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-gray-50 to-transparent z-10 pointer-events-none"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-gray-50 to-transparent z-10 pointer-events-none"></div>
                
                <div
                    x-data="{}"
                    x-init="$nextTick(() => {
                        let ul = $refs.logos;
                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                    })"
                    class="w-full inline-flex flex-nowrap overflow-hidden">
                    
                    <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <!-- Logo 1 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 1" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 2 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 2" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 3 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 3" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 4 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 4" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 5 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 5" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 6 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 6" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 7 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 7" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                        
                        <!-- Logo 8 -->
                        <li class="group">
                            <div class="w-32 h-20 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 flex items-center justify-center p-4 transform hover:scale-105">
                                <img src="images/logo.png" alt="Client 8" class="max-h-10 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Indicateur de confiance -->
            <div class="text-center mt-12">
                <div class="inline-flex items-center gap-3 bg-blue-50 border border-blue-200 rounded-full px-6 py-3">
                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-blue-700 text-sm font-semibold">+50 clients satisfaits cette année</span>
                </div>
            </div>
        </div>

        <style>
            @keyframes infinite-scroll {
                from {
                    transform: translateX(0);
                }
                to {
                    transform: translateX(calc(-100% - 2rem));
                }
            }

            .animate-infinite-scroll {
                animation: infinite-scroll 40s linear infinite;
            }

            /* Pause l'animation au survol */
            .group:hover .animate-infinite-scroll {
                animation-play-state: paused;
            }

            /* Support du réduit de mouvement */
            @media (prefers-reduced-motion: reduce) {
                .animate-infinite-scroll {
                    animation: none;
                }
            }
        </style>


        <!-- Nos services -->
        <section id="services" class="py-24 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
            <!-- Éléments décoratifs -->
            <div class="absolute top-10 left-10 w-20 h-20 bg-blue-100 rounded-full opacity-30 animate-pulse"></div>
            <div class="absolute bottom-20 right-16 w-16 h-16 bg-cyan-100 rounded-full opacity-40 animate-bounce"></div>
            <div class="absolute top-1/3 right-1/4 w-12 h-12 bg-blue-200 rounded-full opacity-50"></div>
            
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- En-tête -->
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                        Nos prestations
                    </span>
                    <h2 class="text-5xl md:text-6xl font-extrabold mb-6">
                        <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                            Nos services
                        </span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto mb-6 rounded-full"></div>
                    <p class="text-gray-600 text-xl max-w-3xl mx-auto leading-relaxed">
                        L'hygiène et la propreté <span class="text-blue-600 font-semibold">c'est notre métier !</span><br>
                        Des solutions sur mesure pour tous vos besoins en nettoyage professionnel
                    </p>
                </div>

                <!-- Grille des services -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Service 1 - Nettoyage -->
                    <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg">
                                    <i data-lucide="sparkles" class="w-8 h-8 text-white"></i>
                                </div>
                                <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Populaire</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Nettoyage Professionnel</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Bureaux, résidences et propriétés avec des produits écologiques et respectueux de l'environnement.</p>
                            <ul class="space-y-2 text-sm text-gray-500 mb-6">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Bureaux et espaces professionnels
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Résidences et appartements
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Produits écologiques
                                </li>
                            </ul>
                            <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-blue-100">
                                En savoir plus
                                <svg class="w-4 h-4 inline-block ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Service 2 - Nettoyage chantiers -->
                    <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-amber-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-gradient-to-br from-orange-500 to-amber-500 rounded-xl shadow-lg">
                                    <i data-lucide="hammer" class="w-8 h-8 text-white"></i>
                                </div>
                                <span class="text-xs font-semibold bg-orange-100 text-orange-700 px-3 py-1 rounded-full">Spécialisé</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Nettoyage Chantiers</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Remise en état complète après travaux pour une livraison impeccable de votre projet.</p>
                            <ul class="space-y-2 text-sm text-gray-500 mb-6">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Nettoyage post-construction
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Élimination des résidus
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Préparation à l'habitation
                                </li>
                            </ul>
                            <button class="w-full bg-orange-50 hover:bg-orange-100 text-orange-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-orange-100">
                                En savoir plus
                                <svg class="w-4 h-4 inline-block ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Service 3 - Entretien spécifique -->
                    <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl shadow-lg">
                                    <i data-lucide="building-2" class="w-8 h-8 text-white"></i>
                                </div>
                                <span class="text-xs font-semibold bg-purple-100 text-purple-700 px-3 py-1 rounded-full">Sur mesure</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Entretien Spécifique</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Solutions adaptées pour maisons, locaux commerciaux et lieux de réception.</p>
                            <ul class="space-y-2 text-sm text-gray-500 mb-6">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Locaux commerciaux
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Salles de réception
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Espaces événementiels
                                </li>
                            </ul>
                            <button class="w-full bg-purple-50 hover:bg-purple-100 text-purple-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-purple-100">
                                En savoir plus
                                <svg class="w-4 h-4 inline-block ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Service 4 - Désinfection COVID -->
                    <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl shadow-lg">
                                    <i data-lucide="shield-check" class="w-8 h-8 text-white"></i>
                                </div>
                                <span class="text-xs font-semibold bg-green-100 text-green-700 px-3 py-1 rounded-full">Sécurité</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Désinfection COVID</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Protocole complet de nettoyage et désinfection pour assurer la sécurité de vos espaces.</p>
                            <ul class="space-y-2 text-sm text-gray-500 mb-6">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Protocole certifié
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Produits virucides
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Espaces sécurisés
                                </li>
                            </ul>
                            <button class="w-full bg-green-50 hover:bg-green-100 text-green-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-green-100">
                                En savoir plus
                                <svg class="w-4 h-4 inline-block ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Service 5 - Devis gratuit -->
                    <div class="group relative bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mt-16 -mr-16"></div>
                        <div class="p-8 text-white">
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-white bg-opacity-20 rounded-xl shadow-lg">
                                    <i data-lucide="file-check" class="w-8 h-8 text-white"></i>
                                </div>
                                <span class="text-xs font-semibold bg-white bg-opacity-20 text-white px-3 py-1 rounded-full">Gratuit</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Devis Gratuit</h3>
                            <p class="text-blue-100 mb-4 leading-relaxed">Évaluation personnalisée pour maisons, locaux commerciaux et lieux de réception.</p>
                            <ul class="space-y-2 text-sm text-blue-100 mb-6">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Sans engagement
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Personnalisé
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Rapide et précis
                                </li>
                            </ul>
                            <button class="w-full bg-white hover:bg-blue-50 text-blue-600 font-semibold py-3 px-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Demander un devis
                                <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Service 6 - Entretien régulier -->
                    <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500 to-blue-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        <div class="p-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl shadow-lg">
                                    <i data-lucide="broom" class="w-8 h-8 text-white"></i>
                                </div>
                                <span class="text-xs font-semibold bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full">Abonnement</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Entretien Régulier</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">Interventions périodiques adaptées à vos besoins pour maintenir une propreté constante.</p>
                            <ul class="space-y-2 text-sm text-gray-500 mb-6">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Planning flexible
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Tarifs préférentiels
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Équipe dédiée
                                </li>
                            </ul>
                            <button class="w-full bg-cyan-50 hover:bg-cyan-100 text-cyan-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-cyan-100">
                                En savoir plus
                                <svg class="w-4 h-4 inline-block ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>

                <!-- CTA en bas de section -->
                <div class="text-center mt-16">
                    <p class="text-gray-600 mb-6">Vous avez un projet spécifique ? Parlons-en !</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Prendre rendez-vous
                        </button>
                        <button class="border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold py-3 px-8 rounded-xl transition-all duration-300">
                            <i data-lucide="phone" class="w-4 h-4 inline-block mr-2"></i>
                            Nous appeler
                        </button>
                    </div>
                </div>
            </div>
        </section>            


        <!-- Lucide Icons -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons();
        </script>

        <!-- Section Publications -->
        <section class="py-20 bg-gradient-to-br from-blue-900 via-blue-700 to-cyan-800 relative overflow-hidden">
            <!-- Éléments décoratifs -->
            <div class="absolute top-0 left-0 w-72 h-72 bg-blue-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-bounce"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- En-tête -->
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-white bg-opacity-20 text-white rounded-full text-sm font-semibold mb-4 backdrop-blur-sm">
                        Actualités & Conseils
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Nos <span class="bg-gradient-to-r from-cyan-300 to-blue-200 bg-clip-text text-transparent">Publications</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-cyan-400 to-blue-300 mx-auto mb-6 rounded-full"></div>
                    <p class="text-blue-100 text-xl max-w-2xl mx-auto leading-relaxed">
                        Découvrez nos derniers conseils, actualités et innovations dans le domaine du nettoyage professionnel
                    </p>
                </div>

                <!-- Grille des publications -->
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-12">
                    
                    @foreach ($publications as $publication)
                    <!-- Publication Card -->
                    <div class="group bg-white rounded-2xl shadow-2xl hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden flex flex-col h-full">
                        <!-- Image avec overlay -->
                        <div class="relative overflow-hidden">
                            <img src="gallery/IMG-20251029-WA0020.jpg" 
                                alt="{{ $publication->titre }}"
                                class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-500">
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

                <!-- Bouton Voir toutes les publications -->
                <div class="text-center">
                    <a href="{{ route('user.allpublications')}}"
                    class="group inline-flex items-center bg-white text-blue-600 font-semibold px-8 py-4 rounded-xl hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <span>Voir toutes les publications</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                    
                    <!-- Statistiques -->
                    <div class="mt-8 flex flex-wrap justify-center gap-8 text-white">
                        <div class="text-center">
                            <div class="text-2xl font-bold">{{ count($publications) }}+</div>
                            <div class="text-blue-200 text-sm">Publications</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold">{{ $totalViews ?? '500' }}+</div>
                            <div class="text-blue-200 text-sm">Lectures</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold">{{ $totalComments ?? '150' }}+</div>
                            <div class="text-blue-200 text-sm">Commentaires</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- CONTACT FORM -->
        <section id="contact" class="py-20 bg-gradient-to-br from-blue-50 via-white to-cyan-50 relative overflow-hidden">
            <!-- Éléments décoratifs -->
            <div class="absolute top-10 right-10 w-32 h-32 bg-blue-200 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute bottom-20 left-10 w-24 h-24 bg-cyan-200 rounded-full opacity-30"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-blue-100 rounded-full opacity-40 animate-bounce"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- En-tête -->
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                        Contact Rapide
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                        <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                            Contactez-nous
                        </span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto mb-6 rounded-full"></div>
                    <p class="text-gray-600 text-xl max-w-2xl mx-auto leading-relaxed">
                        Un devis gratuit, une question ou une intervention urgente ? Notre équipe est à votre écoute
                    </p>
                </div>

                <!-- Grille contact + formulaire -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Informations de contact -->
                    <div class="bg-gradient-to-br from-gray-900 to-blue-900 rounded-3xl p-8 lg:p-10 shadow-2xl relative overflow-hidden">
                        <!-- Élément décoratif -->
                        <div class="absolute top-0 right-0 w-40 h-40 bg-blue-600 rounded-full -mt-20 -mr-20 opacity-20"></div>
                        
                        <div class="relative z-10">
                            <h2 class="text-3xl font-bold text-white mb-4">Nos Informations</h2>
                            <p class="text-blue-100 text-lg mb-8 leading-relaxed">
                                Pour un devis gratuit ou une intervention rapide, contactez notre équipe d'experts
                            </p>

                            <ul class="space-y-6">
                                <!-- Téléphone -->
                                <li class="flex items-start gap-4 p-4 bg-white bg-opacity-5 rounded-2xl backdrop-blur-sm hover:bg-opacity-10 transition-all duration-300">
                                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-phone text-white text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-white font-semibold text-lg mb-1">Téléphone</div>
                                        <a href="tel:+33640507658" class="text-cyan-300 text-xl font-bold hover:text-cyan-200 transition-colors duration-300">
                                            +33 6 40 50 76 58
                                        </a>
                                        <div class="text-blue-200 text-sm mt-1">Appel direct</div>
                                    </div>
                                </li>

                                <!-- Email -->
                                <li class="flex items-start gap-4 p-4 bg-white bg-opacity-5 rounded-2xl backdrop-blur-sm hover:bg-opacity-10 transition-all duration-300">
                                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-envelope text-white text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-white font-semibold text-lg mb-1">Email</div>
                                        <a href="mailto:seremad48@gmail.com" class="text-cyan-300 text-lg font-medium hover:text-cyan-200 transition-colors duration-300 break-all">
                                            seremad48@gmail.com
                                        </a>
                                        <div class="text-blue-200 text-sm mt-1">Réponse sous 24h</div>
                                    </div>
                                </li>

                                <!-- Adresse -->
                                <li class="flex items-start gap-4 p-4 bg-white bg-opacity-5 rounded-2xl backdrop-blur-sm hover:bg-opacity-10 transition-all duration-300">
                                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-white font-semibold text-lg mb-1">Adresse</div>
                                        <div class="text-gray-300 text-base leading-relaxed">
                                            193 avenue de la Maréchale<br>
                                            94420 Le Plessis-Trévise, France
                                        </div>
                                        <div class="text-blue-200 text-sm mt-1">Zone d'intervention : Île-de-France</div>
                                    </div>
                                </li>

                                <!-- SIRET -->
                                <li class="flex items-start gap-4 p-4 bg-white bg-opacity-5 rounded-2xl backdrop-blur-sm hover:bg-opacity-10 transition-all duration-300">
                                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-id-card text-white text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-white font-semibold text-lg mb-1">SIRET</div>
                                        <div class="text-gray-300 text-lg font-mono">891 070 021 00011</div>
                                        <div class="text-blue-200 text-sm mt-1">Entreprise certifiée</div>
                                    </div>
                                </li>
                            </ul>

                            <!-- Boutons d'action rapide -->
                            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <a href="https://wa.me/33640507658" target="_blank"
                                class="group flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.188-3.549-8.447"/>
                                    </svg>
                                    <span class="font-semibold">WhatsApp</span>
                                </a>
                                
                                <a href="tel:+33640507658"
                                class="group flex items-center justify-center gap-3 bg-blue-500 hover:bg-blue-600 text-white py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    <i class="fas fa-phone text-white text-lg"></i>
                                    <span class="font-semibold">Appeler</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire de contact -->
                    <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-2xl border border-gray-100">
                        <div class="text-center mb-8">
                            <h3 class="text-3xl font-bold text-gray-800 mb-3">Demander un devis gratuit</h3>
                            <p class="text-gray-600 text-lg">
                                Remplissez le formulaire et nous vous recontacterons sous <span class="text-blue-600 font-semibold">24 heures</span>
                            </p>
                        </div>

                        <form class="space-y-6" action="/contact" method="POST">
                            @csrf

                            <!-- Messages d'alerte -->
                            @if(session('success'))
                                <div class="p-4 bg-green-50 border border-green-200 rounded-xl text-green-700">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ session('success') }}
                                    </div>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="p-4 bg-red-50 border border-red-200 rounded-xl text-red-700">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ session('error') }}
                                    </div>
                                </div>
                            @endif

                            <!-- Nom et prénom -->
                            <div class="space-y-2">
                                <label class="text-gray-700 font-semibold">Nom & prénom <span class="text-red-500">*</span></label>
                                <input required 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                    name="name"
                                    placeholder="Votre nom complet" />
                            </div>

                            <!-- Email -->
                            <div class="space-y-2">
                                <label class="text-gray-700 font-semibold">Email <span class="text-red-500">*</span></label>
                                <input type="email" 
                                    required 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                    name="email"
                                    placeholder="email@exemple.com" />
                            </div>

                            <!-- Ville et Code postal -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-gray-700 font-semibold">Ville <span class="text-red-500">*</span></label>
                                    <input required 
                                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                        name="ville"
                                        placeholder="Ex : Paris" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-gray-700 font-semibold">Code postal <span class="text-red-500">*</span></label>
                                    <input required 
                                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                        name="postal"
                                        placeholder="Ex : 75000" />
                                </div>
                            </div>

                            <!-- Type de service -->
                            <div class="space-y-2">
                                <label class="text-gray-700 font-semibold">Type de service souhaité</label>
                                <select name="option" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                                    <option value="">Sélectionnez un service</option>
                                    <option value="nettoyage">Nettoyage professionnel</option>
                                    <option value="chantier">Nettoyage chantier</option>
                                    <option value="entretien">Entretien régulier</option>
                                    <option value="desinfection">Désinfection COVID</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="space-y-2">
                                <label class="text-gray-700 font-semibold">Message <span class="text-red-500">*</span></label>
                                <textarea required 
                                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400 resize-none"
                                        rows="5"
                                        name="message"
                                        placeholder="Décrivez votre besoin en détail..."></textarea>
                            </div>

                            <!-- Bouton de soumission -->
                            <button type="submit"
                                    class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Envoyer la demande
                            </button>

                            <!-- Note de confidentialité -->
                            <p class="text-center text-gray-500 text-sm">
                                Vos informations sont confidentielles et ne seront jamais partagées avec des tiers
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection