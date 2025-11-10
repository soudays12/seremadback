@extends('admin.layout')


@section('content')
<br>
<div class="max-w-5xl mx-auto">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Utilisateurs</h1>
    <a href="{{ route('admin.users')}}">
        
        <button class="bg-green-500 px-3 py-2 text-white rounded-md">Retour</button>
    </a>

  </div>

  <div class="bg-white shadow rounded overflow-x-auto">
    <table class="w-full text-left">
      <thead class="bg-gray-50">
        <tr>
          <th class="p-3">Nom</th>
          <th class="p-3">Email</th>
          <th class="p-3">Inscrit le</th>
        </tr>
      </thead>
      <tbody>
        @forelse($users as $user)
        <tr class="border-t">
          <td class="p-3">{{ $user->name }}</td>
          <td class="p-3">{{ $user->email }}</td>
          <td class="p-3 text-sm text-gray-500">{{ $user->created_at->format('d/m/Y H:i') }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="3" class="p-4 text-center text-gray-500">Aucun utilisateur trouvé.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="mt-4">
    {{ $users->links() }}
  </div>
</div>
@endsection