@extends('layouts.app')

@section('title', 'Home | Hendri Paturaya')

@section('content')
<div class="max-w-6xl mx-auto">

  <!-- ================= HERO ================= -->
  <section
    class="bg-blue-50 dark:bg-slate-800/60
           text-center py-20 mb-20 rounded-2xl
           transition-colors">

    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 dark:text-white">
      Halo, saya
      <span class="text-blue-600 dark:text-blue-400">
        Hendri Paturaya
      </span>
    </h1>

    <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">
      Web Developer yang berfokus pada Laravel & Flutter.
      Portofolio ini menampilkan karya dan pengalaman saya.
    </p>

  </section>

  <!-- ================= PROJECTS ================= -->
  <section>
    <h2 class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-8 text-center">
      Proyek Terbaru
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

      @foreach($projects as $project)
        <div
          class="
            bg-white dark:bg-slate-800
            border border-gray-200 dark:border-slate-700
            rounded-xl p-4
            shadow-md dark:shadow-none
            transition-colors
          ">

          {{-- Cover Image --}}
          @if(!empty($project->cover_image))
            <img
              src="{{ $project->cover_image }}"
              alt="{{ $project->name }}"
              class="rounded-lg mb-3
                     border border-gray-200 dark:border-slate-700">
          @else
            <div
              class="h-40 mb-3 rounded-lg
                     bg-gray-100 dark:bg-slate-700
                     flex items-center justify-center
                     text-slate-400 text-sm">
              No Image
            </div>
          @endif

          {{-- Title --}}
          <h3 class="font-semibold text-lg text-slate-800 dark:text-white">
            {{ $project->name }}
          </h3>

          {{-- Description --}}
          <p class="text-sm text-slate-600 dark:text-slate-300 mt-1">
            {{ $project->description }}
          </p>
        </div>
      @endforeach

    </div>

    <!-- More -->
    <div class="text-center mt-10">
      <a
        href="{{ route('projects.index') }}"
        class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
        Lihat Semua Project →
      </a>
    </div>
  </section>

</div>
@endsection
