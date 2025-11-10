@extends('admin.layout')
@section('content')


    <form action="{{ route('admin.publications.update', $publication) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label class="block text-sm font-medium mb-1">Titre</label>
        <input type="text" name="title" value="{{ old('title', $publication->title) }}" class="w-full border p-2 rounded" required>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium mb-1">Contenu</label>
        <textarea name="body" rows="8" class="w-full border p-2 rounded" required>{{ old('body', $publication->body) }}</textarea>
      </div>

      <div class="flex gap-2">
        <button class="bg-blue-600 text-white px-4 py-2 rounded" type="submit">Mettre à jour</button>
        <a href="{{ route('admin.publications.index') }}" class="px-4 py-2 border rounded">Annuler</a>
      </div>
    </form>

@endsection()