@extends('layouts.app')
@section('title', 'Projects | Hendri Paturaya')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Semua Proyek Saya</h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  @foreach($projects as $project)
    @include('components.project-card', ['project' => $project])
  @endforeach
</div>
@endsection
