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


    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Tailwind CDN (vite pour prototype) -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css','resources/js/app.js','resources/fontawesome/css/all.min.css')

    <style>
        /* petites personnalisations non fournies par Tailwind CDN */
        .accent-orange {
            background: linear-gradient(90deg, #f59e0b, #fb923c);
        }

        .card-shadow {
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
        }
    </style>
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
                <a href="#pourquoi" class="hover:underline text-lg">Contacts</a>

                
                @if(Auth::check())
                <p class="text-blue-500">Bienvenue M.{{ Auth::user()->nom }} !</p>
                <a href="{{ route('logout') }}" class="bg-gradient-to-b from-blue-400 to-purple-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                    logout
                </a>
                @else
                <a href="{{ route('login') }}" class="bg-blue-500 text-white text-lg p-2 rounded-md shadow-sm">Nous rejoindre</a>
               
                @endif

            </nav>

            <button class="md:hidden px-3 py-2 border rounded-md">☰</button>
        </div>
    </header>

    <!-- section accueil -->
    <section class="relative overflow-hidden">
        <!-- Slider container -->
        <div id="heroSlider" class="relative w-full h-screen">
            <!-- Chaque slide -->
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 bg-cover bg-center"
                style="background-image: url('images/plein-coup-homme-poussant-le-bouton-de-l-ascenseur.png');">
                <div class="absolute inset-0 bg-gray-700 bg-opacity-70 flex items-center justify-center">
                    <div class="text-center text-white max-w-6xl p-6">
                        <h1 class="text-5xl md:text-6xl font-bold mb-6">
                            Bienvenue sur <span class="text-blue-500">SEREMAD</span>
                        </h1>
                        <p class="text-3xl md:text-5xl font-semibold mb-6">
                            <span class="text-blue-500">La propreté</span>, Notre priorité
                        </p>
                        <p class="text-xl md:text-2xl mb-10 max-w-4xl mx-auto leading-relaxed">
                            Prestation de nettoyage professionnelle pour entreprises et particuliers — solutions sur
                            mesure,
                            personnel qualifié et matériel adapté.
                        </p>
                        <div class="flex flex-col md:flex-row justify-center gap-4">
                            <a href="#en-savoir-plus"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-4 px-10 rounded-lg transition">
                                En savoir plus →
                            </a>
                            <a href="contact.html"
                                class="backdrop-blur-sm border border-gray-200 text-white hover:bg-white hover:text-black font-semibold py-4 px-10 rounded-lg transition">
                                Recevoir un devis
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 bg-cover bg-center"
                style="background-image: url('gallery/IMG-20251029-WA0031.jpg')">
                <div class="absolute inset-0 bg-gray-700 bg-opacity-70 flex items-center justify-center">
                    <div class="text-center text-white max-w-6xl p-6">
                        <h1 class="text-5xl md:text-6xl font-bold mb-6">
                            Nos services <span class="text-blue-500">Professionnels</span>
                        </h1>
                        <p class="text-3xl md:text-5xl font-semibold mb-6">
                            Fiabilité et qualité
                        </p>
                        <p class="text-xl md:text-2xl mb-10 max-w-4xl mx-auto leading-relaxed">
                            Un service complet pour entreprises et particuliers, adapté à vos besoins spécifiques.
                        </p>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 bg-cover bg-center"
                style="background-image: url('gallery/IMG-20251029-WA0022.jpg')">
                <div class="absolute inset-0 bg-gray-700 bg-opacity-70 flex items-center justify-center">
                    <div class="text-center text-white max-w-6xl p-6">
                        <h1 class="text-5xl md:text-6xl font-bold mb-6">
                            Nos services <span class="text-blue-500">Professionnels</span>
                        </h1>
                        <p class="text-3xl md:text-5xl font-semibold mb-6">
                            Fiabilité et qualité
                        </p>
                        <p class="text-xl md:text-2xl mb-10 max-w-4xl mx-auto leading-relaxed">
                            Un service complet pour entreprises et particuliers, adapté à vos besoins spécifiques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const slides = document.querySelectorAll('#heroSlider > div');
        let currentSlide = 0;

        function nextSlide() {
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');

            currentSlide = (currentSlide + 1) % slides.length;

            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
        }

        setInterval(nextSlide, 5000); // change toutes les 5 secondes
    </script>


    <main class=" mx-auto py-10 items-center">


        <!-- Section Qui sommes-nous -->
        <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-10 items-center">
            <!-- Texte à gauche -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-blue-600 font-semibold text-4xl flex items-center">
                        Qui sommes nous ?
                    </h1>
                    <br>
                    <p class="w-20 h-1 bg-gradient-to-r from-blue-600 to-cyan-400  mr-2"></p>
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

        <script>
            // Tableau des images du carousel
            const images = [
                "gallery/IMG-20251029-WA0019.jpg",
                "gallery/IMG-20251029-WA0020.jpg",
                "gallery/IMG-20251029-WA0021.jpg",
                "gallery/IMG-20251029-WA0022.jpg",
                "gallery/IMG-20251029-WA0028.jpg",
                "gallery/IMG-20251029-WA0029.jpg",
                "gallery/IMG-20251029-WA0031.jpg",
                "gallery/IMG-20251029-WA0032.jpg",
                "gallery/IMG-20251029-WA0033.jpg",
                "gallery/IMG-20251029-WA0034.jpg",
                "gallery/IMG-20251029-WA0035.jpg",
                "gallery/IMG-20251029-WA0036.jpg",
                "gallery/IMG-20251029-WA0037.jpg",
                "gallery/IMG-20251029-WA0038.jpg",
                "gallery/IMG-20251029-WA0039.jpg",
                "gallery/IMG-20251029-WA0040.jpg",
                "gallery/IMG-20251029-WA0041.jpg",
                "gallery/IMG-20251029-WA0042.jpg",
                "gallery/IMG-20251029-WA0043.jpg",
                "gallery/IMG-20251029-WA0044.jpg",
                "gallery/IMG-20251029-WA0045.jpg",
                "gallery/IMG-20251029-WA0046.jpg",
                "gallery/IMG-20251029-WA0047.jpg",
                "gallery/IMG-20251029-WA0048.jpg"
            ];


            let currentIndex = 0;
            const carouselImage = document.getElementById("carousel-image");
            const indicators = document.getElementById("indicators");

            // Création des indicateurs dynamiquement
            images.forEach((_, i) => {
                const dot = document.createElement("div");
                dot.classList.add("w-3", "h-3", "rounded-full", "cursor-pointer", "transition", i === 0 ? "bg-blue-600" : "bg-gray-300");
                dot.addEventListener("click", () => goToSlide(i));
                indicators.appendChild(dot);
            });

            const updateIndicators = () => {
                [...indicators.children].forEach((dot, i) => {
                    dot.classList.toggle("bg-gray-500", i === currentIndex);
                    dot.classList.toggle("bg-gray-300", i !== currentIndex);
                });
            };

            const goToSlide = (index) => {
                currentIndex = index;
                carouselImage.src = images[currentIndex];
                updateIndicators();
            };

            document.getElementById("prev-btn").addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                goToSlide(currentIndex);
            });

            document.getElementById("next-btn").addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % images.length;
                goToSlide(currentIndex);
            });

            // Auto-défilement
            setInterval(() => {
                currentIndex = (currentIndex + 1) % images.length;
                goToSlide(currentIndex);
            }, 5000);
        </script>

        <!-- Logo Carousel animation -->
    <div
        x-data="{}"
        x-init="$nextTick(() => {
            let ul = $refs.logos;
            ul.insertAdjacentHTML('afterend', ul.outerHTML);
            ul.nextSibling.setAttribute('aria-hidden', 'true');
        })"
        class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]"
    >
        <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
            <li>
                <img src="images/logo.png" alt="Facebook" />
            </li>
            <li>
                <img src="images/logo.png" alt="Disney" />
            </li>
            <li>
                <img src="images/logo.png" alt="Airbnb" />
            </li>
            <li>
                <img src="images/logo.png" alt="Apple" />
            </li>
            <li>
                <img src="images/logo.png" alt="Spark" />
            </li>
            <li>
                <img src="images/logo.png" alt="Samsung" />
            </li>
            <li>
                <img src="images/logo.png" alt="Quora" />
            </li>
            <li>
                <img src="images/logo.png" alt="Sass" />
            </li>
        </ul>                
    </div>
    <!-- End: Logo Carousel animation -->

        <!-- Nos services -->
        <section id="services" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <!-- Titre -->
                <h2 class="text-5xl font-extrabold mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-400 bg-clip-text text-transparent">
                        Nos services
                    </span>
                </h2>
                <p class="text-gray-600 text-lg font-medium mb-16">
                    L'hygiène et la propreté<br>
                    <span class="text-gray-800 font-semibold">C'est notre métier !</span>
                </p>

                <!-- Grille des services -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

                    <!-- Service 1 -->
                    <div
                        class="flex items-start space-x-6 p-8 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="p-4 bg-blue-100 rounded-full">
                            <i data-lucide="sparkles" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-blue-800">Nettoyage</h3>
                            <p class="text-gray-600 text-base mt-1">Bureaux, résidences et propriétés</p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div
                        class="flex items-start space-x-6 p-8 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="p-4 bg-blue-100 rounded-full">
                            <i data-lucide="hammer" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-blue-800">Nettoyage chantiers</h3>
                            <p class="text-gray-600 text-base mt-1">Remise en état</p>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div
                        class="flex items-start space-x-6 p-8 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="p-4 bg-blue-100 rounded-full">
                            <i data-lucide="building-2" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-blue-800">Nettoyage et entretien spécifique</h3>
                            <p class="text-gray-600 text-base mt-1">Maisons, locaux, lieux de réception</p>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div
                        class="flex items-start space-x-6 p-8 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="p-4 bg-blue-100 rounded-full">
                            <i data-lucide="shield-check" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-blue-800">Désinfection COVID</h3>
                            <p class="text-gray-600 text-base mt-1">Mise en place d’un dispositif de nettoyage et
                                désinfection</p>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div
                        class="flex items-start space-x-6 p-8 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="p-4 bg-blue-100 rounded-full">
                            <i data-lucide="file-check" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-blue-800">Devis gratuit</h3>
                            <p class="text-gray-600 text-base mt-1">Maisons, locaux, commerciaux, lieux de réception</p>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div
                        class="flex items-start space-x-6 p-8 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="p-4 bg-blue-100 rounded-full">
                            <i data-lucide="broom" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-blue-800">Entretien régulier</h3>
                            <p class="text-gray-600 text-base mt-1">Interventions périodiques selon vos besoins</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Lucide Icons -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons();
        </script>


        <!-- Lucide Icons Script -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons();
        </script>






       



        <!-- CONTACT FORM -->
        <section id="contact" class="mt-10 flex justify-center items-center">
            <div class="w-full max-w-6xl px-4">
                <!-- Titre -->
                <div class="border items-center">
                    <h2 class="text-blue-500 text-center text-4xl font-bold mb-2
                        bg-gradient-to-r from-blue-600 to-cyan-400 bg-clip-text text-transparent">Contactez-nous</h2>
                    <div class="flex justify-center">
                        <p class="w-20 h-1 bg-gradient-to-r from-blue-600 to-cyan-400"></p>
                    </div>
                </div>

                <br>
                <p class="text-gray-600 text-center mb-8">Soyez en contact pour tous vos problèmes de nettoyage</p>

                <!-- Grille contact + formulaire -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Informations -->
                    <div
                        class="bg-gradient-to-tr from-gray-800 to-gray-700 rounded-2xl p-8 card-shadow flex flex-col justify-center">
                        <h2 class="text-blue-500 font-bold text-2xl mb-2">NOS INFORMATIONS</h2>
                        <p class="text-base text-gray-300 mb-6">Pour un devis gratuit ou une intervention, contactez
                            notre équipe.</p>

                        <ul class="space-y-4 text-sm">
                            <li class="flex items-center gap-3 p-4">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full">
                                    <i class="fas fa-phone text-white text-2xl"></i>
                                </div>
                                <div>
                                    <div class="text-white text-xl">Téléphone</div>
                                    <div class="font-semibold text-lg text-gray-400">+33 6 40 50 76 58</div>
                                </div>
                            </li>

                            <li class="flex items-center gap-3 p-4 ">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full">
                                    <i class="fas fa-envelope text-white text-2xl"></i>
                                </div>
                                <div>
                                    <div class="text-white text-xl">Email</div>
                                    <div class="font-semibold text-lg text-gray-400">seremad4@gmail.com</div>
                                </div>
                            </li>

                            <li class="flex items-center gap-3 p-4">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full">
                                    <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                                </div>
                                <div>
                                    <div class="text-white text-xl">Adresse</div>
                                    <div class="font-semibold text-lg text-gray-400">193 avenue de la Maréchale, 94420
                                        Le Plessis-Trévise</div>
                                </div>
                            </li>

                            <li class="flex items-center gap-3 p-4">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full">
                                    <i class="fas fa-id-card text-white text-2xl"></i>
                                </div>
                                <div>
                                    <div class="text-white text-xl">SIRET</div>
                                    <div class="font-semibold text-lg text-gray-400">891 070 021 00011</div>
                                </div>
                            </li>
                        </ul>

                        <div class="mt-6">
                            <a href="https://wa.me/33640507658" target="_blank"
                                class="inline-flex items-center gap-3 bg-green-500 text-white py-3 px-6 rounded-lg hover:bg-green-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-message-circle" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>
                                Discutons sur WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Formulaire -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-lg bg-white">
                        <h3 class="text-2xl font-bold">Demander un devis gratuit</h3>
                        <p class="mt-2 text-sm text-gray-500">Remplissez le formulaire et nous reviendrons vers vous
                            sous 24h.</p>

                        <form class="mt-6 space-y-3 " action="/contact" method="POST">
                            @csrf
                            <div>
                                <label class="text-base text-gray-600">Nom & prénom</label>
                                <input required class="w-full mt-1 px-3 py-2 border rounded-md" name="name"
                                    placeholder="Votre nom" />
                            </div>

                            <div>
                                <label class="text-base text-gray-600">Email</label>
                                <input type="email" required class="w-full mt-1 px-3 py-2 border rounded-md" name="email"
                                    placeholder="email@exemple.com" />
                            </div>

                            <div>
                                <div>
                                    <label class="text-base text-gray-600">Ville</label>
                                    <input required class="w-full mt-1 px-3 py-2 border rounded-md" name="ville"
                                        placeholder="Ex : Marseille" />
                                </div>
                                <div>
                                    <label class="text-base text-gray-600">Code postal</label>
                                    <input required class="w-full mt-1 px-3 py-2 border rounded-md" name="postal"
                                        placeholder="Ex : Bordeaux : 33000" />
                                </div>
                            </div>

                            <div>
                                <label class="text-base text-gray-600">Message</label>
                                <textarea required class="w-full mt-1 px-3 py-2 border rounded-md" rows="4"
                                    placeholder="Décrivez votre besoin"></textarea>
                            </div>

                            <button type="submit"
                                class="bg-blue-500 text-white px-5 py-3 rounded-md hover:bg-orange-600 transition">
                                Envoyer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer class="bg-[#465070] text-gray-200 py-10 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">

            <div>
                <h2 class="text-3xl font-bold mb-3">SEREMAD</h2>
                <p class=" leading-relaxed mb-4 text-gray-300">
                    Prestation de nettoyage professionnelle pour entreprises et particuliers.
                </p>
                <img src="images/logo.png" alt="Logo SEREMAD" class="w-20">
            </div>

            <!-- Colonne 2 : Liens rapides -->
            <div>
                <h3 class="text-3xl font-semibold mb-3">Liens rapides</h3>
                <ul class="space-y-2 text-gray-300">
                    <li>
                        <a href="#services" class="hover:underline">Nos services</a>
                    </li>
                    <li>
                        <a href="#histoire" class="hover:underline">Notre histoire</a>
                    </li>
                    <li>
                        <a href="#pourquoi" class="hover:underline">Pourquoi nous</a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 3 : Contacts -->
            <div>
                <h3 class="text-3xl font-semibold mb-3">Contacts</h3>
                <ul class="space-y-2 text-gray-300">
                    <li>193 avenue de la Maréchale, 94420 Le Plessis Trévise </li>
                    <li>France, Cameroun</li>
                    <li>
                        <a href="mailto:seremad48@gmail.com" class="hover:underline">seremad48@gmail.com</a>
                    </li>
                    <li>
                        <a href="tel:+237123456789" class="hover:underline">+33 6 40 50 76 58</a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 4 : Suivez-nous -->
            <div>
                <h3 class="text-3xl font-semibold mb-3">Suivez-nous</h3>
                <div class="flex items-center space-x-4 mb-3">
                    <a href="#" class="hover:text-white text-4xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-white text-4xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white text-4xl"><i class="fab fa-youtube"></i></a>
                </div>
                <hr class="border-gray-400 w-16 mb-2">
                <a href="#" class="hover:underline text-sm">seremad.com</a>
            </div>
        </div>

        <!-- Bas de page -->
        <div class="text-center mt-10 border-t border-gray-500 pt-4">
            <div class="flex flex-col md:flex-row justify-center items-center gap-2">
                <a href="#" class="hover:underline">Mentions légales</a>
                <span>|</span>
                <a href="#" class="hover:underline">Politique de confidentialité</a>
            </div>

            <p class="mt-3 font-semibold">
                Copyright © SEREMAD <span id="year"></span>
            </p>
        </div>
    </footer>

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Script JS pour année automatique -->
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>




    <!-- Lien du cdn javascript -->
    <script src="js/swiper.js"></script>

    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
     Lien du cdn personnalisé -->
    <script src="js/slider.js"></script>
</body>



</html>