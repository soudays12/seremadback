<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>SEREMAD — Service de nettoyage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- carousel slider -->
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Tailwind CDN (vite pour prototype) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">
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
                            <a href="#services" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">Nos services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#histoire" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">Notre histoire</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pourquoi" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-blue-400 group-hover:text-cyan-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="font-medium">Pourquoi nous</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="hover:text-white transition-all duration-300 flex items-center group bg-white/5 hover:bg-white/10 rounded-lg p-3">
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
                            <a href="mailto:seremad48@gmail.com" class="font-medium hover:text-white transition-colors duration-300">seremad48@gmail.com</a>
                        </li>
                    </ul>
                    
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
                    
                    <!-- Newsletter -->
                    <div class="bg-gradient-to-br from-blue-600/20 to-cyan-600/20 backdrop-blur-sm border border-white/10 rounded-xl p-5">
                        <h4 class="font-semibold text-white mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            Newsletter
                        </h4>
                        <p class="text-sm text-gray-300 mb-4">Recevez nos offres spéciales</p>
                        <form class="flex gap-2">
                            <input type="email" placeholder="Votre email" class="flex-1 bg-white/10 border border-white/20 text-white placeholder-gray-400 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent text-sm">
                            <button type="submit" class="bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white px-4 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bas de page -->
            <div class="border-t border-white/20 mt-12 pt-8">
                <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                    <div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-6 text-sm text-gray-300">
                        <span class="text-white font-medium">Copyright © SEREMAD <span id="year"></span> - Tous droits réservés</span>
                        <div class="flex items-center space-x-4">
                            <a href="#" class="hover:text-white transition-colors duration-300 hover:underline">Mentions légales</a>
                            <a href="#" class="hover:text-white transition-colors duration-300 hover:underline">Politique de confidentialité</a>
                            <a href="#" class="hover:text-white transition-colors duration-300 hover:underline">CGV</a>
                        </div>
                    </div>
                    
                    <!-- Méthodes de paiement -->
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-300">Paiements sécurisés:</span>
                        <div class="flex space-x-2">
                            <div class="bg-white/10 backdrop-blur-sm p-2 rounded-lg border border-white/10">
                                <svg class="w-6 h-4" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 7H1V9H9V7Z" fill="#1434CB"/>
                                    <path d="M23 1H1V3H23V1Z" fill="#1434CB"/>
                                    <path d="M23 13H15V15H23V13Z" fill="#1434CB"/>
                                    <path d="M13 13H1V15H13V13Z" fill="#1434CB"/>
                                </svg>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm p-2 rounded-lg border border-white/10">
                                <svg class="w-6 h-4" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1H1V15H10V1Z" fill="#FF5F00"/>
                                    <path d="M11 8C11 5.2 12.8 2.8 15.4 1.5C14.3 0.6 12.9 0 11.4 0C7.7 0 4.7 3 4.7 6.7C4.7 10.4 7.7 13.4 11.4 13.4C12.9 13.4 14.3 12.8 15.4 11.9C12.8 10.6 11 8.2 11 8Z" fill="#EB001B"/>
                                    <path d="M23 8C23 10.4 21.4 12.4 19.2 13.3C18.1 12.4 17.3 11.1 17.3 9.6C17.3 8.1 18.1 6.8 19.2 5.9C21.4 6.8 23 8.6 23 8Z" fill="#F79E1B"/>
                                </svg>
                            </div>
                        </div>
                    </div>
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
    <script src=" {{ asset('js/app.js') }}"></script>
    <script src=" {{ asset('js/carousel.js') }}"></script>
    <script src=" {{ asset('js/homeslide.js') }}"></script>
    <script src=" {{ asset('js/header.js') }}"></script>

    <!--     
     Lien du cdn personnalisé -->
    <script src="js/slider.js"></script>
</body>



</html>