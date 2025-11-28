@extends('layout.layout')

@section('title', 'Contacts')

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
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    Contactez-nous
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Parlons de votre <span class="text-cyan-300">projet</span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8">
                    Devis gratuit et intervention rapide partout en Île-de-France
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Formulaire de contact
                    </a>
                    <a href="tel:+33640507658" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Appeler maintenant
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-2xl transform rotate-3"></div>
                <img src="/images/plein-coup-homme-poussant-le-bouton-de-l-ascenseur.png" alt="Contact SEREMAD" 
                     class="relative w-full h-96 object-cover rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Section Contact -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-cyan-50 relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-10 right-10 w-32 h-32 bg-blue-200 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 bg-cyan-200 rounded-full opacity-30"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
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
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
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
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
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
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
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
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
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

                <!-- contact anchor -->
                <div id="contact">
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
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

                        <!-- Nom complet -->
                        <div class="space-y-2">
                            <label class="text-gray-700 font-semibold">Nom complet <span class="text-red-500">*</span></label>
                            <input name="name" required 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                placeholder="Votre nom complet" />
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label class="text-gray-700 font-semibold">Email <span class="text-red-500">*</span></label>
                            <input name="email" type="email" required 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                placeholder="email@exemple.com" />
                        </div>

                        <!-- Téléphone -->
                        <div class="space-y-2">
                            <label class="text-gray-700 font-semibold">Téléphone</label>
                            <input name="phone" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400"
                                placeholder="Votre numéro de téléphone" />
                        </div>

                        <!-- Message -->
                        <div class="space-y-2">
                            <label class="text-gray-700 font-semibold">Message <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5" required 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 placeholder-gray-400 resize-none"
                                    placeholder="Décrivez votre besoin en détail..."></textarea>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button type="submit"
                                    class="flex-1 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Envoyer la demande
                            </button>
                            <a href="tel:+33640507658" 
                               class="flex-1 border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold py-4 px-6 rounded-xl transition-all duration-300 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                Appeler
                            </a>
                        </div>

                        <!-- Note de confidentialité -->
                        <p class="text-center text-gray-500 text-sm">
                            Vos informations sont confidentielles et ne seront jamais partagées avec des tiers
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Navigation rapide -->
        <div class="mt-16 text-center">
            <div class="inline-flex flex-wrap gap-4 justify-center">
                <a href="{{ route('home') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    Retour accueil
                </a>
                <a href="{{ route('services') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    Nos services
                </a>
                <a href="{{ route('about') }}" class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    À propos
                </a>
            </div>
        </div>
    </div>
</section>
@endsection