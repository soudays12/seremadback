<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tableau de bord | Seremad</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

  <!-- HEADER -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
      <div class="flex items-center space-x-3">
        <button class="p-2 rounded-md hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <h1 class="text-xl font-bold text-gray-700">Dashboard <span class="text-indigo-600">Seremad</span></h1>
      </div>
      <p class="text-sm text-gray-500">Bienvenue 👋</p>
    </div>
  </header>

  <!-- MAIN -->
  <main class="max-w-7xl mx-auto px-6 py-10">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- UTILISATEURS -->
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
        <div class="flex flex-col items-center">
          <div class="bg-indigo-50 p-4 rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-700" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 7a3 3 0 11-6 0 3 3 0 016 0z" />
              <path fill-rule="evenodd" d="M4 14s1-1 6-1 6 1 6 1v1H4v-1z" clip-rule="evenodd" />
            </svg>
          </div>
          <h2 class="text-lg font-semibold mb-3">Utilisateurs</h2>
          <p class="text-sm text-gray-500 mb-3">{{ $users }} inscrits</p>
          <a href="{{ route('admin.users.index') }}" class="bg-blue-100 text-blue-700 px-4 py-1 rounded-lg hover:bg-blue-200 transition">Voir</a>
        </div>
      </div>

      <!-- PUBLICATIONS -->
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
        <div class="flex flex-col items-center">
          <div class="bg-indigo-50 p-4 rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h7l2 2h5a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
          </div>
          <h2 class="text-lg font-semibold mb-3">Publications</h2>
          <p class="text-sm text-gray-500 mb-3">{{ $publications }} publications</p>
          <div class="flex gap-2">
            <a href="{{ route('admin.publications.index') }}" class="bg-blue-100 text-blue-700 px-4 py-1 rounded-lg hover:bg-blue-200 transition">Voir</a>
            <a href="{{ route('admin.publications.create') }}" class="bg-green-100 text-green-700 px-4 py-1 rounded-lg hover:bg-green-200 transition">Ajouter</a>
          </div>
        </div>
      </div>

      <!-- MODULE LIBRE (ex: statistiques) -->
      <div class="bg-gradient-to-br from-indigo-600 to-blue-500 text-white p-6 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
        <div class="flex flex-col items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V3a1 1 0 011-1h9a1 1 0 011 1v8M4 21v-8m4 8V10m4 11V4" />
          </svg>
          <h2 class="text-lg font-semibold mb-2">Statistiques</h2>
          <p class="text-sm text-indigo-100 mb-3">Analysez vos données clés</p>
          <button class="bg-white text-indigo-700 px-4 py-1 rounded-lg hover:bg-indigo-100 transition">Voir</button>
        </div>
      </div>

    </div>

    <!-- Bouton de déconnexion -->
    <div class="text-center mt-12">
      <form method="POST" action="{{ route('adminauth.logout') }}">
        @csrf
        <button type="submit" class="bg-red-600 text-white px-8 py-3 rounded-xl font-semibold shadow hover:bg-red-700 transition">
          Déconnexion
        </button>
      </form>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="mt-16 bg-gray-800   sticky bottom-0   text-gray-200 py-6">
    <div class="max-w-6xl mx-auto text-center">
      <p class="text-sm">&copy; 2025 Seremad. Tous droits réservés.</p>
      <p class="text-xs text-gray-400 mt-1">Conçu avec ❤️ par l’équipe Seremad</p>
    </div>
  </footer>

</body>
</html>
