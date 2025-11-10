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
                    <span class="text-white">Contacts</span>
                </h1>
            </div>

        </div>
    </section>
    <main class=" mx-auto p-10 items-center">
        <!-- CONTACT FORM -->
        <section id="contact" class="mt-10  ">
            <div>
                <h2 class="text-blue-500 font-bold text-2xl mb-2">NOS INFORMATIONS</h2>
                <p class="text-base text-gray-300 mb-6">Pour un devis gratuit ou une intervention, contactez
                    notre équipe.</p>
    
            
            <!-- Informations -->
                <ul class=" grid sm:grid-cols-2 lg:grid-cols-3 gap-10   bg-blue-500   space-y-4 text-sm    ">
                    <li class="flex items-start gap-3">
                        <div>
                            <i class="fas fa-phone text-blue-500"></i>
                        </div>
                        <div>
                            <div class="text-white text-xl">Téléphone</div>
                            <div class="font-semibold text-lg text-gray-400">+33 6 40 50 76 58</div>
                        </div>
                    </li>
    
                    <li class="flex items-start gap-3">
                        <div>
                            <i class="fas fa-envelope text-blue-500"></i>
                        </div>
                        <div>
                            <div class="text-white text-xl">Email</div>
                            <div class="font-semibold text-lg text-gray-400">seremad4@gmail.com</div>
                        </div>
                    </li>
    
                    <li class="flex items-start gap-3">
                        <div>
                            <i class="fas fa-location text-blue-500"></i>
                        </div>
                        <div>
                            <div class="text-white text-xl">Adresse</div>
                            <div class="font-semibold text-lg text-gray-400">193 avenue de la Maréchale, 94420 Le
                                Plessis-Trévise</div>
                        </div>
                    </li>
    
                    <li class="flex items-start gap-3">
                        <div>
                            <i class="fas fa-envelope"></i>
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
            <div class="bg-gray-50 p-8 rounded-2xl shadow-md">
                <h3 class="text-2xl font-bold">Demander un devis gratuit</h3>
                <p class="mt-2 text-sm text-gray-500">Remplissez le formulaire et nous reviendrons vers vous
                    sous 24h.</p>
    
                <form class="mt-6 space-y-3"
                    onsubmit="event.preventDefault(); alert('Formulaire envoyé (demo)');">
                    <div>
                        <label class="text-base text-gray-600">Nom & prénom</label>
                        <input required class="w-full mt-1 px-3 py-2 border rounded-md"
                            placeholder="Votre nom" />
                    </div>
    
                    <div>
                        <label class="text-base text-gray-600">Email</label>
                        <input type="email" required class="w-full mt-1 px-3 py-2 border rounded-md"
                            placeholder="email@exemple.com" />
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
        </section>
    </main>


@endsection