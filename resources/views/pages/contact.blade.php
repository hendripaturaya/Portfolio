@extends('layouts.app')
@section('title', 'Contact | Hendri Paturaya')

@section('content')
<div class="max-w-xl mx-auto">
  <h1 class="text-3xl font-bold mb-6">Hubungi Saya</h1>
  <p class="text-gray-600 mb-6">
    Punya proyek, ide, atau kolaborasi menarik? Silakan kirim pesan melalui form berikut.
  </p>

  <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
    @csrf
    <div>
      <label class="block text-gray-700 font-medium">Nama</label>
      <input type="text" name="name" required class="w-full border-gray-300 rounded-md mt-1 focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <div>
      <label class="block text-gray-700 font-medium">Email</label>
      <input type="email" name="email" required class="w-full border-gray-300 rounded-md mt-1 focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <div>
      <label class="block text-gray-700 font-medium">Subjek</label>
      <input type="text" name="subject" class="w-full border-gray-300 rounded-md mt-1 focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <div>
      <label class="block text-gray-700 font-medium">Pesan</label>
      <textarea name="message" rows="4" required class="w-full border-gray-300 rounded-md mt-1 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
    </div>

    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
      Kirim Pesan
    </button>
  </form>
</div>
@endsection
