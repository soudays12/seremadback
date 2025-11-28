@extends('layout.layout')

@section('title', 'A propos')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-700 text-white py-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            À propos de <span class="text-cyan-300">SEREMAD</span>
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
            Votre partenaire de confiance pour un nettoyage professionnel d'excellence
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-6 py-16">
    <!-- Notre Histoire -->
    <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
        <div class="space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-semibold">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Notre Histoire
            </div>
            <h2 class="text-4xl font-bold text-gray-800">Qui sommes-nous ?</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                SEREMAD est une entreprise spécialisée dans les services de nettoyage professionnel et la désinfection. 
                Nous accompagnons les entreprises et les particuliers avec des solutions sur mesure, un personnel formé 
                et des produits respectueux de l'environnement.
            </p>
            
            <div class="space-y-4">
                <div class="flex items-start gap-4">
                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Équipe qualifiée et assurée</h4>
                        <p class="text-gray-600">Personnel formé aux dernières techniques de nettoyage</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Protocoles respectant les normes sanitaires</h4>
                        <p class="text-gray-600">Conformité aux standards les plus exigeants</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Interventions rapides et flexibles</h4>
                        <p class="text-gray-600">Adaptation à vos horaires et contraintes</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4 pt-6">
                <a href="{{ route('services') }}" 
                   class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    Voir nos services
                </a>
                <a href="{{ route('contacts') }}#contact" 
                   class="border-2 border-blue-500 text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-xl font-semibold transition-all duration-300">
                    Demander un devis
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-2xl transform rotate-3"></div>
            <img src="/gallery/IMG-20251029-WA0031.jpg" alt="À propos SEREMAD" 
                 class="relative w-full h-96 object-cover rounded-2xl shadow-2xl">
            <!-- Badge flottant -->
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-sm font-semibold text-gray-800">Certifié</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Notre Mission -->
    <section class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-xl border border-gray-100 relative overflow-hidden">
        <!-- Éléments décoratifs -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full -mt-16 -mr-16 opacity-30"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-cyan-100 rounded-full -mb-12 -ml-12 opacity-40"></div>
        
        <div class="text-center mb-12 relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-50 text-cyan-600 rounded-full text-sm font-semibold mb-4">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                </svg>
                Notre Mission
            </div>
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Ce qui nous anime</h3>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Fiabilité</h4>
                <p class="text-gray-600">Des prestations constantes et de qualité, respectant vos exigences</p>
            </div>
            
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Respect de l'environnement</h4>
                <p class="text-gray-600">Produits écologiques et méthodes durables pour préserver notre planète</p>
            </div>
            
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Satisfaction client</h4>
                <p class="text-gray-600">Votre satisfaction est notre priorité absolue</p>
            </div>
        </div>
        
        <div class="text-center mt-12 relative z-10">
            <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed mb-8">
                Offrir des prestations fiables et durables, en alliant efficacité et respect de l'environnement. 
                Nous priorisons la satisfaction client et la sécurité de vos espaces.
            </p>
            
            <!-- Image illustrative -->
            <div class="relative max-w-2xl mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-xl transform -rotate-1"></div>
                <img src="/gallery/IMG-20251029-WA0022.jpg" alt="Équipe SEREMAD" 
                     class="relative w-full h-64 object-cover rounded-xl shadow-lg">
                <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg shadow-md">
                    <p class="text-sm font-semibold text-gray-800">Équipe professionnelle certifiée</p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
