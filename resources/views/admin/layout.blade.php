<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tableau de bord | Seremad</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
      
<body class="bg-gray-100 font-sans text-gray-800 scroll-smooth">
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
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-6 py-4">
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

    @yield('content')

  <!-- FOOTER -->
  <footer class="mt-16 bg-gray-800 sticky bottom-0 text-gray-200 py-6">
    <div class="max-w-6xl mx-auto text-center">
      <p class="text-sm">&copy; 2025 Seremad. Tous droits réservés.</p>
      <p class="text-xs text-gray-400 mt-1">Conçu avec ❤️ par l’équipe Seremad</p>
    </div>
  </footer>

</body>
</html>
