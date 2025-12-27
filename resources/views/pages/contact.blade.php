@extends('layouts.app')

@section('title', 'Contact | Hendri Paturaya')

@section('content')

<!-- ================= HERO ================= -->
<section
  class="bg-blue-50 dark:bg-slate-800/60
         py-14 mb-14 rounded-2xl
         transition-colors">

  <div class="max-w-xl mx-auto text-center px-6">
    <h1 class="text-4xl font-bold text-blue-600 dark:text-blue-400">
      Hubungi Saya
    </h1>
    <p class="mt-3 text-slate-600 dark:text-slate-300">
      Punya proyek, ide, atau kolaborasi menarik?
      Silakan kirim pesan melalui form di bawah ini.
    </p>
  </div>
</section>

<!-- ================= FORM ================= -->
<section class="max-w-xl mx-auto px-6">

  {{-- Success Message --}}
  @if(session('success'))
    <div
      class="mb-4 p-3 rounded-lg text-sm
             bg-green-100 dark:bg-green-900/30
             text-green-700 dark:text-green-300
             border border-green-300 dark:border-green-700">
      {{ session('success') }}
    </div>
  @endif

  <form
    method="POST"
    action="{{ route('contact.store') }}"
    class="
      bg-white dark:bg-slate-800
      border border-gray-200 dark:border-slate-700
      rounded-xl p-6 space-y-4
      shadow-md dark:shadow-none
      transition-colors
    ">
    @csrf

    <!-- Nama -->
    <div>
      <label class="block font-medium text-slate-700 dark:text-slate-300">
        Nama
      </label>
      <input
        type="text"
        name="name"
        value="{{ old('name') }}"
        required
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">
    </div>

    <!-- Email -->
    <div>
      <label class="block font-medium text-slate-700 dark:text-slate-300">
        Email
      </label>
      <input
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">
    </div>

    <!-- Subjek -->
    <div>
      <label class="block font-medium text-slate-700 dark:text-slate-300">
        Subjek
      </label>
      <input
        type="text"
        name="subject"
        value="{{ old('subject') }}"
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">
    </div>

    <!-- Pesan -->
    <div>
      <label class="block font-medium text-slate-700 dark:text-slate-300">
        Pesan
      </label>
      <textarea
        name="message"
        rows="4"
        required
        class="
          w-full mt-1 px-3 py-2 rounded-lg
          bg-white dark:bg-slate-900
          border border-gray-300 dark:border-slate-600
          text-slate-800 dark:text-slate-200
          focus:outline-none focus:ring-2 focus:ring-blue-500
          transition
        ">{{ old('message') }}</textarea>
    </div>

    <!-- Submit -->
    <button
      type="submit"
      class="
        w-full bg-blue-600 hover:bg-blue-700
        dark:bg-blue-500 dark:hover:bg-blue-600
        text-white py-2 rounded-lg
        font-semibold transition
      ">
      Kirim Pesan
    </button>

  </form>
</section>

@endsection
