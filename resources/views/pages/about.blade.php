@extends('layouts.app')
@section('title', 'About Me | Hendri Paturaya')

@section('content')
<div class="max-w-3xl mx-auto">
  <h1 class="text-3xl font-bold mb-4">Tentang Saya</h1>
  <p class="text-gray-700 leading-relaxed mb-6">
    Halo! Nama saya <strong>Hendri Paturaya</strong>, seorang pengembang web yang bersemangat dalam membangun aplikasi
    yang bermanfaat dan efisien. Saya memiliki pengalaman dalam mengembangkan sistem berbasis
    <span class="text-indigo-600">Laravel</span> dan aplikasi mobile menggunakan <span class="text-indigo-600">Flutter</span>.
  </p>

  <p class="text-gray-700 leading-relaxed mb-6">
    Saya tertarik pada pengembangan sistem informasi, integrasi API, dan desain arsitektur perangkat lunak
    dengan pendekatan <em>clean code</em> dan <strong>design pattern</strong> seperti Observer dan Strategy.
  </p>

  <div class="mt-8">
    <h2 class="text-2xl font-semibold mb-3">Pendidikan</h2>
    <ul class="list-disc pl-6 text-gray-700">
      <li>Mahasiswa Politeknik Negeri Indramayu — Jurusan Teknologi Informasi</li>
      <li>Aktif di FORMADIKSI POLINDRA dan proyek kolaborasi pengembangan aplikasi</li>
    </ul>
  </div>
</div>
@endsection
