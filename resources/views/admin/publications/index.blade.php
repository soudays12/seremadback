
@extends('admin.layout')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-newspaper mr-2"></i>Publications</h1>
        <div class="flex gap-3">
            <a href="{{ route('admin.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                <i class="fas fa-arrow-left mr-2"></i>Retour
            </a>
            <a href="{{ route('admin.publications.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                <i class="fas fa-plus mr-2"></i>Nouvelle
            </a>
        </div>
    </div>

    <!-- Toggle View Mode -->
    <div class="mb-6 flex justify-between items-center">
        <div class="bg-white rounded-lg shadow p-1 flex">
            <button onclick="toggleView('table')" id="tableBtn" class="px-4 py-2 rounded-md transition bg-blue-500 text-white">
                <i class="fas fa-table mr-2"></i>Tableau
            </button>
            <button onclick="toggleView('grid')" id="gridBtn" class="px-4 py-2 rounded-md transition text-gray-600">
                <i class="fas fa-th-large mr-2"></i>Grille
            </button>
        </div>
        <div class="text-sm text-gray-500">
            <i class="fas fa-chart-bar mr-1"></i>{{ $publications->total() }} publications
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200">
            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
        </div>
    @endif

    <!-- Table View -->
    <div id="tableView" class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left font-semibold text-gray-700">Image</th>
                    <th class="p-4 text-left font-semibold text-gray-700">Titre</th>
                    <th class="p-4 text-left font-semibold text-gray-700">Contenu</th>
                    <th class="p-4 text-left font-semibold text-gray-700">Stats</th>
                    <th class="p-4 text-left font-semibold text-gray-700">Date</th>
                    <th class="p-4 text-left font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($publications as $pub)
                <tr class="border-t hover:bg-gray-50 transition">
                    <td class="p-4">
                        @if($pub->images->count() > 0)
                            <img src="{{ asset('images/' . $pub->images->first()->fichier) }}" 
                                 class="w-16 h-16 object-cover rounded-lg shadow" alt="{{ $pub->titre }}">
                        @else
                            <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                        @endif
                    </td>
                    <td class="p-4">
                        <a href="{{ route('admin.publications.show', $pub) }}" class="text-blue-600 font-semibold hover:text-blue-800">
                            {{ Str::limit($pub->titre, 40) }}
                        </a>
                    </td>
                    <td class="p-4 text-gray-600">{{ Str::limit($pub->contenu, 60) }}</td>
                    <td class="p-4">
                        <div class="flex gap-3 text-sm">
                            <span class="text-red-500"><i class="fas fa-heart mr-1"></i>{{ $pub->likes_count ?? 0 }}</span>
                            <span class="text-blue-500"><i class="fas fa-images mr-1"></i>{{ $pub->images->count() }}</span>
                        </div>
                    </td>
                    <td class="p-4 text-gray-500 text-sm">{{ $pub->created_at->format('d/m/Y') }}</td>
                    <td class="p-4">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.publications.show', $pub) }}" class="text-green-600 hover:text-green-800" title="Voir">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.publications.edit', $pub) }}" class="text-yellow-600 hover:text-yellow-800" title="Modifier">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.publications.destroy', $pub) }}" method="POST" class="inline" 
                                  onsubmit="return confirm('Supprimer cette publication ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-8 text-center text-gray-500">
                        <i class="fas fa-inbox text-4xl mb-4 text-gray-300"></i>
                        <p>Aucune publication trouvée</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Grid View -->
    <div id="gridView" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($publications as $pub)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
            <div class="relative">
                @if($pub->images->count() > 0)
                    <img src="{{ asset('images/' . $pub->images->first()->fichier) }}" 
                         class="w-full h-48 object-cover" alt="{{ $pub->titre }}">
                    @if($pub->images->count() > 1)
                        <span class="absolute top-2 right-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded text-xs">
                            <i class="fas fa-images mr-1"></i>{{ $pub->images->count() }}
                        </span>
                    @endif
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-image text-4xl text-gray-400"></i>
                    </div>
                @endif
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">{{ Str::limit($pub->titre, 50) }}</h3>
                <p class="text-gray-600 text-sm mb-3">{{ Str::limit($pub->contenu, 100) }}</p>
                <div class="flex justify-between items-center text-sm text-gray-500 mb-3">
                    <span><i class="fas fa-calendar mr-1"></i>{{ $pub->created_at->format('d/m/Y') }}</span>
                    <span class="text-red-500"><i class="fas fa-heart mr-1"></i>{{ $pub->likes_count ?? 0 }}</span>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('admin.publications.show', $pub) }}" class="flex-1 bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded transition">
                        <i class="fas fa-eye mr-1"></i>Voir
                    </a>
                    <a href="{{ route('admin.publications.edit', $pub) }}" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white text-center py-2 rounded transition">
                        <i class="fas fa-edit mr-1"></i>Modifier
                    </a>
                    <form action="{{ route('admin.publications.destroy', $pub) }}" method="POST" class="flex-1" 
                          onsubmit="return confirm('Supprimer ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded transition">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12">
            <i class="fas fa-inbox text-6xl text-gray-300 mb-4"></i>
            <p class="text-gray-500">Aucune publication trouvée</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $publications->links() }}
    </div>
</div>

<script>
function toggleView(view) {
    const tableView = document.getElementById('tableView');
    const gridView = document.getElementById('gridView');
    const tableBtn = document.getElementById('tableBtn');
    const gridBtn = document.getElementById('gridBtn');
    
    if (view === 'table') {
        tableView.classList.remove('hidden');
        gridView.classList.add('hidden');
        tableBtn.classList.add('bg-blue-500', 'text-white');
        tableBtn.classList.remove('text-gray-600');
        gridBtn.classList.remove('bg-blue-500', 'text-white');
        gridBtn.classList.add('text-gray-600');
    } else {
        tableView.classList.add('hidden');
        gridView.classList.remove('hidden');
        gridBtn.classList.add('bg-blue-500', 'text-white');
        gridBtn.classList.remove('text-gray-600');
        tableBtn.classList.remove('bg-blue-500', 'text-white');
        tableBtn.classList.add('text-gray-600');
    }
}
</script>
@endsection