@extends('layouts.app')

@section('title', 'Hubungi Saya')

@section('content')
<div class="container mx-auto mt-10 max-w-lg">
  <h1 class="text-3xl font-bold mb-6 text-center text-indigo-600">Hubungi Saya</h1>

  @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label class="block text-gray-700 font-semibold">Nama</label>
      <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name') }}">
      @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
      <label class="block text-gray-700 font-semibold">Email</label>
      <input type="email" name="email" class="w-full border rounded p-2" value="{{ old('email') }}">
      @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
      <label class="block text-gray-700 font-semibold">Pesan</label>
      <textarea name="message" class="w-full border rounded p-2" rows="5">{{ old('message') }}</textarea>
      @error('message') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
      Kirim Pesan
    </button>
  </form>
</div>
@endsection
