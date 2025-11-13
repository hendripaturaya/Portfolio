@extends('layouts.app')

@section('title', 'Semua Project | Hendri Paturaya')

@section('content')
<div class="text-center mb-10">
  <h1 class="text-3xl font-bold mb-3">Daftar Semua Project</h1>
  <p class="text-gray-600">Berikut adalah semua proyek yang telah saya kerjakan.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  @foreach($projects as $project)
    @include('components.project-card', ['project' => $project])
  @endforeach
</div>

<div class="text-center mt-8">
  <a href="{{ route('home') }}" class="text-indigo-600 hover:underline">← Kembali ke Beranda</a>
</div>
@endsection
