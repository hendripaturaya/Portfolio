@extends('layouts.app')

@section('title', 'Contact | Hendri Paturaya')

@section('content')

<!-- ================= HERO ================= -->
<section
  class="bg-blue-50 dark:bg-slate-800/60
         py-16 mb-16 rounded-2xl
         transition-colors">

  <div class="max-w-lg mx-auto text-center px-6">
    <h1 class="text-4xl font-bold text-blue-600 dark:text-blue-400">
      Hubungi Saya
    </h1>
    <p class="mt-3 text-slate-600 dark:text-slate-300">
      Silakan kirim pesan, saya akan membalas secepat mungkin.
    </p>
  </div>
</section>

<!-- ================= FORM ================= -->
<section class="max-w-lg mx-auto px-6">

  {{-- Success Message --}}
  @if(session('success'))
    <div
      class="bg-green-100 dark:bg-green-900/30
             text-green-700 dark:text-green-300
             border border-green-300 dark:border-green-700
             p-3 rounded-lg mb-4 text-sm">
      {{ session('success') }}
    </div>
  @endif

  <form
    action="{{ route('contact.store') }}"
    method="POST"
    class="
      bg-white dark:bg-slate-800
      border border-gray-200 dark:border-slate-700
      p-6 rounded-xl
      shadow-md dark:shadow-none
      space-y-4
      transition-colors
    ">
    @csrf

    <!-- Nama -->
    <div>
      <label class="font-semibold text-slate-700 dark:text-slate-300">
        Nama
      </label>
      <input
        type="text"
        name="name"
        value="{{ old('name') }}"
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">
      @error('name')
        <p class="text-red-600 dark:text-red-400 text-sm mt-1">
          {{ $message }}
        </p>
      @enderror
    </div>

    <!-- Email -->
    <div>
      <label class="font-semibold text-slate-700 dark:text-slate-300">
        Email
      </label>
      <input
        type="email"
        name="email"
        value="{{ old('email') }}"
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">
      @error('email')
        <p class="text-red-600 dark:text-red-400 text-sm mt-1">
          {{ $message }}
        </p>
      @enderror
    </div>

    <!-- Pesan -->
    <div>
      <label class="font-semibold text-slate-700 dark:text-slate-300">
        Pesan
      </label>
      <textarea
        name="message"
        rows="4"
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">{{ old('message') }}</textarea>
      @error('message')
        <p class="text-red-600 dark:text-red-400 text-sm mt-1">
          {{ $message }}
        </p>
      @enderror
    </div>

    <!-- Submit -->
    <button
      type="submit"
      class="
        w-full bg-blue-600 hover:bg-blue-700
        dark:bg-blue-500 dark:hover:bg-blue-600
        text-white py-2 rounded-lg
        transition font-semibold
      ">
      Kirim Pesan
    </button>

  </form>
</section>

@endsection
