
@extends('admin.layout')

@section('content')
<br>
  <div class="max-w-5xl mx-auto">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold">Publications</h1>

      <div>
        <a href="{{ route('dashboard.index')}}">
          <button class="bg-green-500 px-3 py-2 text-white rounded-md">Retour</button>
        </a>
        <a href="{{ route('admin.publications.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Nouvelle</a>
      </div>
    </div>

    @if(session('success'))
      <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <div class="bg-white shadow rounded">
      <table class="w-full text-left">
        <thead class="bg-gray-50">
          <tr>
            <th class="p-3">Titre</th>
            <th class="p-3">Créée</th>
            <th class="p-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($publications as $pub)
          <tr class="border-t">
            <td class="p-3">
              <a href="{{ route('admin.publications.show', $pub) }}" class="text-indigo-600 font-medium">{{ $pub->title }}</a>
            </td>
            <td class="p-3 text-sm text-gray-500">{{ $pub->created_at->format('d/m/Y') }}</td>
            <td class="p-3">
              <a href="{{ route('admin.publications.edit', $pub) }}" class="text-yellow-600 mr-3">Modifier</a>

              <form action="{{ route('admin.publications.destroy', $pub) }}" method="POST" class="inline" onsubmit="return confirm('Supprimer cette publication ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600">Supprimer</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="3" class="p-4 text-center text-gray-500">Aucune publication.</td>
          </tr>
          @endforelse
        </tbody>
      </table>

      <div class="p-4">
        {{ $publications->links() }}
      </div>
    </div>
  </div>
@endsection