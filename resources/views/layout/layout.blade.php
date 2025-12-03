<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>SEREMAD — Service de nettoyage</title>
    
    <!-- Balises Meta SEO -->
    <meta name="description" content="SEREMAD - Service professionnel de nettoyage pour entreprises et particuliers. Nettoyage écologique, fiable et de qualité. Devis gratuit.">
    <meta name="keywords" content="nettoyage, service nettoyage, nettoyage professionnel, entreprise nettoyage, nettoyage bureaux, nettoyage particuliers, SEREMAD">
    <meta name="author" content="SEREMAD">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="SEREMAD — Service de nettoyage professionnel">
    <meta property="og:description" content="Service professionnel de nettoyage pour entreprises et particuliers. Équipements écologiques, service 24h/24.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:site_name" content="SEREMAD">
    <meta property="og:locale" content="fr_FR">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="SEREMAD — Service de nettoyage professionnel">
    <meta property="twitter:description" content="Service professionnel de nettoyage pour entreprises et particuliers. Équipements écologiques, service 24h/24.">
    <meta property="twitter:image" content="{{ asset('images/logo.png') }}">
    
    <!-- Balises techniques -->
    <meta name="theme-color" content="#2563eb">
    <meta name="msapplication-TileColor" content="#2563eb">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- carousel slider -->
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Tailwind CDN (vite pour prototype) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body class="bg-gray-50 text-gray-800 antialiased scroll-smooth">
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    
    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

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
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                        Accueil
                        <span class="absolute bottom-0 left-0 {{ request()->routeIs('home') ? 'w-full' : 'w-0' }} h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                        Nos services
                        <span class="absolute bottom-0 left-0 {{ request()->routeIs('services') ? 'w-full' : 'w-0' }} h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('user.allpublications')}}" class="{{ request()->routeIs('user.allpublications') || request()->routeIs('user.publication') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                        Blog
                        <span class="absolute bottom-0 left-0 {{ request()->routeIs('user.allpublications') || request()->routeIs('user.publication') ? 'w-full' : 'w-0' }} h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                        A propos
                        <span class="absolute bottom-0 left-0 {{ request()->routeIs('about') ? 'w-full' : 'w-0' }} h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 font-medium transition-colors duration-300 relative group">
                        Contacts
                        <span class="absolute bottom-0 left-0 {{ request()->routeIs('contacts') ? 'w-full' : 'w-0' }} h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
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
                            <a href="{{ route('contacts') }}#contact" 
                            class="border-2 border-blue-500 text-blue-600 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-semibold transition-all duration-300">
                                Devis Gratuit
                            </a>
                        </div>
                    @endif

                    <!-- Bouton menu mobile -->
                    <button id="mobile-menu-button" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-lg border border-gray-200 hover:border-gray-300 transition-colors duration-300 group">
                        <span class="w-5 h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-all duration-300"></span>
                        <span class="w-5 h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-all duration-300"></span>
                        <span class="w-5 h-0.5 bg-gray-600 group-hover:bg-blue-600 transition-all duration-300"></span>
                    </button>
                </div>
            </div>

            <!-- Navigation mobile -->
            <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100 py-4 px-4 shadow-lg">
                <nav class="flex flex-col gap-4">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : 'text-gray-700' }} hover:text-blue-600 font-medium py-2 px-3 rounded transition-colors duration-300 border-b border-gray-100">
                        Accueil
                    </a>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-blue-600 bg-blue-50' : 'text-gray-700' }} hover:text-blue-600 font-medium py-2 px-3 rounded transition-colors duration-300 border-b border-gray-100">
                        Nos services
                    </a>
                    <a href="{{ route('user.allpublications') }}" class="{{ request()->routeIs('user.allpublications') || request()->routeIs('user.publication') ? 'text-blue-600 bg-blue-50' : 'text-gray-700' }} hover:text-blue-600 font-medium py-2 px-3 rounded transition-colors duration-300 border-b border-gray-100">
                        Blog
                    </a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-600 bg-blue-50' : 'text-gray-700' }} hover:text-blue-600 font-medium py-2 px-3 rounded transition-colors duration-300 border-b border-gray-100">
                        À propos
                    </a>
                    <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'text-blue-600 bg-blue-50' : 'text-gray-700' }} hover:text-blue-600 font-medium py-2 px-3 rounded transition-colors duration-300 border-b border-gray-100">
                        Contacts
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
                            <a href="{{ route('contacts') }}#contact" 
                            class="w-full border-2 border-blue-500 text-blue-600 hover:bg-blue-50 py-3 rounded-xl font-semibold transition-colors duration-300 text-center">
                                Devis Gratuit
                            </a>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-800 text-gray-200 py-16 px-6 overflow-hidden">
        <!-- Éléments décoratifs -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
        
        <!-- Motif de points -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-400/5 via-transparent to-transparent"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section principale -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Colonne 1 : Présentation -->
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <img src="images/logo.png" alt="Logo SEREMAD" class="w-16 h-16 mr-3 transform hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-blue-500 rounded-full opacity-0 hover:opacity-10 transition-opacity duration-300"></div>
                        </div>
                        <h2 class="text-3xl font-bold text-white bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">SEREMAD</h2>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6 text-lg">
                        Prestation de nettoyage professionnel pour entreprises et particuliers. 
                        Nous garantissons propreté, fiabilité et satisfaction.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 text-gray-300 bg-white/5 backdrop-blur-sm rounded-lg p-3">
                            <div class="w-8 h-8 bg-green-500/20 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Service 24h/24</span>
                        </div>
                        <div class="flex items-center space-x-3 text-gray-300 bg-white/5 backdrop-blur-sm rounded-lg p-3">
                            <div class="w-8 h-8 bg-green-500/20 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium">Équipements écologiques</span>
                        </div>
                    </div>
                </div>

                <!-- Colonne 2 : Liens rapides -->
                <div>
                    <h3 class="text-xl font-semibold mb-6 text-white relative pb-3">
                        Liens rapides
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-4 text-gray-300">
                        <li>
                            <a href="{{ route('services') }}" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">Nos services</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">À propos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}#contact" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">Contactez-nous</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Colonne 3 : Contacts -->
                <div>
                    <h3 class="text-xl font-semibold mb-6 text-white relative pb-3">
                        Contacts
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-start group bg-white/5 hover:bg-white/10 rounded-lg p-4 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 mt-0.5 flex-shrink-0 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="font-medium">193 avenue de la Maréchale, 94420 Le Plessis Trévise, France</span>
                        </li>
                        <li class="flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-4 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+33640507658" class="font-medium hover:text-white transition-colors duration-300">+33 6 40 50 76 58</a>
                        </li>
                        <li class="flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-4 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:seremad48@gmail.com" class="font-medium hover:text-white transition-colors duration-300">seremad4@gmail.com</a>
                        </li>
                    </ul>
                    
                    
                </div>

                <!-- Colonne 4 : Suivez-nous -->
                <div>
                    <h3 class="text-xl font-semibold mb-6 text-white relative pb-3">
                        Suivez-nous
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full"></span>
                    </h3>
                    <p class="text-gray-300 mb-6 text-lg">
                        Restez informé de nos actualités et promotions.
                    </p>
                    
                    <!-- Réseaux sociaux -->
                    <div class="flex space-x-3 mb-8">
                        <a href="#" class="bg-white/10 hover:bg-blue-600 text-white p-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm border border-white/10">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="bg-white/10 hover:bg-pink-600 text-white p-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm border border-white/10">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="bg-white/10 hover:bg-red-600 text-white p-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm border border-white/10">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                        <a href="#" class="bg-white/10 hover:bg-blue-400 text-white p-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm border border-white/10">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                    

                    <!-- Horaires d'ouverture -->
                    <div class="mt-6 bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                        <h4 class="font-semibold text-white mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            Horaires d'ouverture
                        </h4>
                        <div class="text-sm text-gray-300 space-y-2">
                            <div class="flex justify-between items-center">
                                <span>Lun - Ven:</span>
                                <span class="font-medium text-white">8h00 - 18h00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Samedi:</span>
                                <span class="font-medium text-white">9h00 - 17h00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Dimanche:</span>
                                <span class="font-medium text-amber-400">Urgences uniquement</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bas de page -->
            <div class="border-t border-white/20 mt-12 pt-8">
                <div class="flex flex-col md:flex-row items-center justify-center space-y-3 md:space-y-0 md:space-x-6 text-sm text-gray-300">
                    <span class="text-white font-medium">Copyright © SEREMAD <span id="year"></span> - Tous droits réservés</span>

                </div>
            </div>
        </div>
    </footer>

    <script>
    // Mise à jour automatique de l'année du copyright
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Lien du cdn javascript -->
    <script src="js/swiper.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/homeslide.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/home-carousel.js') }}"></script>
    <script src="{{ asset('js/hero-slider.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/lucide-init.js') }}"></script>
    <script src="{{ asset('js/mobile-menu.js') }}"></script>

    <!--     
     Lien du cdn personnalisé -->
    <script src="js/slider.js"></script>
</body>



</html>
