@extends('layouts.app')

@section('title', 'Hendri Paturaya | Portfolio')

@section('content')
<div class="text-center mb-10">
  <h1 class="text-4xl font-bold mb-3">Halo, saya <span class="text-indigo-600">Hendri Paturaya</span></h1>
  <p class="text-gray-600 max-w-2xl mx-auto">
    Saya seorang <b>Web Developer</b> yang berfokus pada Laravel & Flutter.
    Portofolio ini menampilkan karya, keterampilan, dan perjalanan saya di dunia pengembangan perangkat lunak.
  </p>
</div>

<h2 class="text-2xl font-semibold mb-4 text-center">Proyek Terbaru</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  @foreach($projects as $project)
    @include('components.project-card', ['project' => $project])
  @endforeach
</div>

<div class="text-center mt-6">
  <a href="{{ route('projects.index') }}" class="text-indigo-600 hover:underline">Lihat Semua Project →</a>
</div>
@endsection
