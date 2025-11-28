@extends('layout.layout')

@section('title', 'Nos services')

@section('content')

<!-- Hero Section avec illustration -->
<section class="relative bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <!-- Éléments décoratifs -->
    <div class="absolute top-10 right-10 w-32 h-32 bg-white/10 rounded-full animate-pulse"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 bg-cyan-300/20 rounded-full animate-bounce"></div>
    
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Nos Prestations
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Nos <span class="text-cyan-300">Services</span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8">
                    Solutions sur-mesure pour entreprises et particuliers
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services" class="bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Découvrir nos services
                    </a>
                    <a href="{{ route('contacts') }}#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-xl font-semibold transition-all duration-300">
                        Devis gratuit
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-2xl transform rotate-3"></div>
                <img src="/gallery/IMG-20251029-WA0031.jpg" alt="Services SEREMAD" 
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Services détaillés -->
<section id="services" class="py-24 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-blue-100 rounded-full opacity-30 animate-pulse"></div>
    <div class="absolute bottom-20 right-16 w-16 h-16 bg-cyan-100 rounded-full opacity-40 animate-bounce"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <!-- En-tête -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                Nos prestations
            </span>
            <h2 class="text-5xl md:text-6xl font-extrabold mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                    Services Professionnels
                </span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto mb-6 rounded-full"></div>
            <p class="text-gray-600 text-xl max-w-3xl mx-auto leading-relaxed">
                L'hygiène et la propreté <span class="text-blue-600 font-semibold">c'est notre métier !</span><br>
                Des solutions sur mesure pour tous vos besoins
            </p>
        </div>

        <!-- Grille des services -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1 - Nettoyage Professionnel -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                <div class="relative">
                    <img src="/gallery/IMG-20251029-WA0020.jpg" alt="Nettoyage professionnel" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">Populaire</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="p-3 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Nettoyage Professionnel</h3>
                    </div>
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
                    <a href="{{ route('contacts') }}#contact" class="w-full bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-blue-100 text-center block">
                        Demander un devis
                    </a>
                </div>
            </div>

            <!-- Service 2 - Nettoyage Chantier -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-amber-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                <div class="relative">
                    <img src="/gallery/IMG-20251029-WA0022.jpg" alt="Nettoyage chantier" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-orange-600 text-white text-xs font-semibold rounded-full">Spécialisé</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="p-3 bg-gradient-to-br from-orange-500 to-amber-500 rounded-xl shadow-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Nettoyage Chantier</h3>
                    </div>
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
                    <a href="{{ route('contacts') }}#contact" class="w-full bg-orange-50 hover:bg-orange-100 text-orange-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-orange-100 text-center block">
                        Demander un devis
                    </a>
                </div>
            </div>

            <!-- Service 3 - Désinfection -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-500 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                <div class="relative">
                    <img src="/images/plein-coup-homme-poussant-le-bouton-de-l-ascenseur.png" alt="Désinfection" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-green-600 text-white text-xs font-semibold rounded-full">Sécurité</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="p-3 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl shadow-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Désinfection COVID</h3>
                    </div>
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
                    <a href="tel:+33640507658" class="w-full bg-green-50 hover:bg-green-100 text-green-700 font-semibold py-3 px-4 rounded-xl transition-colors duration-300 group-hover:bg-green-100 text-center block">
                        Planifier une intervention
                    </a>
                </div>
            </div>
        </div>

        <!-- CTA en bas de section -->
        <div class="text-center mt-16">
            <p class="text-gray-600 mb-6 text-lg">Vous avez un projet spécifique ? Parlons-en !</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contacts') }}#contact" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Prendre rendez-vous
                </a>
                <a href="tel:+33640507658" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold py-4 px-8 rounded-xl transition-all duration-300 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Nous appeler
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
