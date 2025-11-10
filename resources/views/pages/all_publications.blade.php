@extends('layout.layout')

@section('content')

    <!-- HEADER -->
    <header class="bg-white border-b">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <img src="images/logo.png" alt="" class="w-16" srcset="">
                <div>
                    <h1 class="text-lg font-bold">SEREMAD</h1>
                    <p class="text-xs text-gray-500">Service de nettoyage</p>
                </div>
            </div>

            <nav class="hidden md:flex gap-6 items-center text-sm">
                <a href="#services" class="hover:underline text-lg">Nos services</a>
                <a href="#histoire" class="hover:underline text-lg">Notre histoire</a>
                <a href="#pourquoi" class="hover:underline text-lg">Pourquoi nous</a>
                <a href="#contact" class="bg-blue-500 text-white text-lg p-2 rounded-md shadow-sm">Contactez-nous</a>
            </nav>

            <button class="md:hidden px-3 py-2 border rounded-md">☰</button>
        </div>
    </header>

    <section class="relative bg-cover bg-center"
        style="background-image: url('images/plein-coup-homme-poussant-le-bouton-de-l-ascenseur.png');">
        <div class="relative flex bg-gray-700 bg-opacity-70 ">
            <div class="max-w-6xl mx-auto  p-20   text-white">
                <!-- Titre principal -->
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">Nos publications et actualités</span>
                </h1>
            </div>

        </div>
    </section>
    <main class=" mx-auto p-10 items-center">
            <!-- Bouton retour -->
            <a href="{{ route('user.back') }}" 
               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour
            </a>
            <br><br>

            <!-- Grille des publications -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
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

        </div>
    </main>


@endsection