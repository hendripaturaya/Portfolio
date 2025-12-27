@extends('layouts.app')

@section('title', 'Semua Project | Hendri Paturaya')

@section('content')

<!-- ================= HERO ================= -->
<section
  class="bg-blue-50 dark:bg-slate-800/60
         py-16 mb-16 rounded-2xl
         text-center transition-colors">

  <h1 class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-3">
    Daftar Semua Project
  </h1>

  <p class="text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">
    Berikut adalah semua proyek yang telah saya kerjakan,
    mencakup aplikasi web, mobile, dan sistem informasi.
  </p>
</section>

<!-- ================= PROJECT GRID ================= -->
<section class="max-w-6xl mx-auto px-6">

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    @forelse($projects as $project)
      @include('components.project-card', ['project' => $project])
    @empty
      <div class="col-span-3 text-center text-slate-500 dark:text-slate-400">
        Belum ada project untuk ditampilkan.
      </div>
    @endforelse

  </div>

  <!-- Back -->
  <div class="text-center mt-10">
    <a
      href="{{ route('home') }}"
      class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
      ← Kembali ke Beranda
    </a>
  </div>

</section>

@endsection
