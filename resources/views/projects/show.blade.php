@extends('layouts.app')
@section('title', $project->title . ' | Hendri Paturaya')

@section('content')
<div class="max-w-3xl mx-auto">
  <img src="{{ asset('storage/'.$project->cover_image) }}" alt="{{ $project->title }}" class="rounded-lg shadow mb-6">
  <h1 class="text-3xl font-bold mb-3">{{ $project->title }}</h1>
  <p class="text-gray-600 mb-4">{{ $project->short_description }}</p>

  <div class="prose max-w-none text-gray-800">
    {!! nl2br(e($project->body)) !!}
  </div>

  <div class="mt-6">
    @if($project->repo_url)
      <a href="{{ $project->repo_url }}" class="text-indigo-600 hover:underline mr-4" target="_blank">Lihat Repository</a>
    @endif
    @if($project->live_url)
      <a href="{{ $project->live_url }}" class="text-indigo-600 hover:underline" target="_blank">Lihat Demo</a>
    @endif
  </div>
</div>
@endsection
