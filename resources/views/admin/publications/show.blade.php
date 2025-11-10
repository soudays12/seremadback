@extends('admin.layout')
@endsection('content')
  <title>{{ $publication->title }}</title>


  <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-2">{{ $publication->title }}</h1>
    <p class="text-sm text-gray-500 mb-4">Publié le {{ $publication->created_at->format('d/m/Y') }}</p>

    <div class="prose">
      {!! nl2br(e($publication->body)) !!}
    </div>

    <div class="mt-6">
      <a href="{{ route('admin.publications.edit', $publication) }}" class="mr-3 text-yellow-600">Modifier</a>
      <a href="{{ route('admin.publications.index') }}" class="text-gray-600">Retour</a>
    </div>
  </div>
@endsection