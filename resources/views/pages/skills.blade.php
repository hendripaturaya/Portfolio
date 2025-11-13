@extends('layouts.app')

@section('title', 'Keterampilan | Hendri Paturaya')

@section('content')
<div class="text-center mb-10">
  <h1 class="text-3xl font-bold mb-3">Keterampilan Saya</h1>
  <p class="text-gray-600 max-w-2xl mx-auto">
    Berikut beberapa keterampilan yang saya kuasai dalam pengembangan web dan mobile.
  </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  @foreach($skills as $skill)
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-2 text-indigo-600">{{ $skill->name }}</h3>
      <p class="text-gray-500 mb-2"><b>Tingkat:</b> {{ $skill->level }}</p>
      <p class="text-gray-600">{{ $skill->description }}</p>
    </div>
  @endforeach
</div>
@endsection
