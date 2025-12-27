@extends('layouts.app')

@section('title', 'Skills | Hendri Paturaya')

@section('content')

<!-- ================= HERO ================= -->
<section
  class="bg-blue-50 dark:bg-slate-800/60
         py-16 mb-16 rounded-2xl
         transition-colors">

  <div class="max-w-5xl mx-auto text-center px-6">
    <h1 class="text-4xl font-bold text-blue-600 dark:text-blue-400">
      Skills
    </h1>
    <p class="mt-3 text-slate-600 dark:text-slate-300">
      Teknologi dan tools yang saya gunakan dalam pengembangan aplikasi.
    </p>
  </div>
</section>

<!-- ================= SKILLS GRID ================= -->
<section class="max-w-5xl mx-auto px-6">

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    @forelse($skills as $skill)
      <div
        class="
          bg-white dark:bg-slate-800
          border border-gray-200 dark:border-slate-700
          p-6 rounded-xl text-center
          shadow-md dark:shadow-none
          transition-colors
        ">

        <h3 class="font-semibold text-lg text-blue-600 dark:text-blue-400">
          {{ $skill->name }}
        </h3>

        <p class="text-slate-600 dark:text-slate-300 mt-2">
          {{ $skill->level }}
        </p>

      </div>
    @empty
      <div class="col-span-3 text-center text-slate-500 dark:text-slate-400">
        Belum ada skill untuk ditampilkan.
      </div>
    @endforelse

  </div>

</section>

@endsection
