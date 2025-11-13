@extends('layouts.app')

@section('title', 'Tentang Saya | Hendri Paturaya')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-6">
  <div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-indigo-600 mb-3">Tentang Saya</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">
      Mahasiswa D4 Rekayasa Perangkat Lunak di <b>Politeknik Negeri Indramayu</b> dengan minat besar dalam pengembangan web, mobile, dan desain antarmuka.
      Berpengalaman dalam membangun aplikasi berbasis <b>Laravel</b> dan <b>Flutter</b>, serta memiliki kemampuan dokumentasi sistem dan kolaborasi tim.
    </p>
  </div>

  <!-- Personal Info -->
  <div class="grid md:grid-cols-2 gap-8 mb-12">
    <div>
      <h2 class="text-2xl font-semibold mb-4 text-indigo-600">Informasi Pribadi</h2>
      <ul class="space-y-2 text-gray-700">
        <li><b>Nama:</b> Hendri Paturaya</li>
        <li><b>Lokasi:</b> Indramayu, Jawa Barat</li>
        <li><b>Email:</b> <a href="mailto:hendripaturaya23@student.polindra.ac.id" class="text-indigo-600 hover:underline">hendripaturaya23@student.polindra.ac.id</a></li>
        <li><b>Telepon:</b> <a href="tel:+6283195754705" class="text-indigo-600 hover:underline">+62 831 9575 4705</a></li>
        <li><b>GitHub:</b> <a href="https://github.com/hendripaturaya" target="_blank" class="text-indigo-600 hover:underline">github.com/hendripaturaya</a></li>
      </ul>
    </div>

    <div>
      <h2 class="text-2xl font-semibold mb-4 text-indigo-600">Keahlian Utama</h2>
      <ul class="grid grid-cols-2 gap-2 text-gray-700">
        <li>Laravel</li>
        <li>Flutter</li>
        <li>HTML / CSS / JS</li>
        <li>Bootstrap</li>
        <li>MySQL</li>
        <li>Figma</li>
        <li>Git & GitHub</li>
        <li>VS Code</li>
      </ul>
    </div>
  </div>

  <!-- Experience -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4 text-indigo-600">Pengalaman Kerja</h2>
    <div class="bg-white shadow-md rounded-lg p-6 mb-4 hover:shadow-lg transition">
      <h3 class="text-xl font-bold text-gray-800">Teknisi Jaringan Internet - LILIK.NET</h3>
      <p class="text-sm text-gray-500">Jul 2024 - Sekarang | Indramayu, Jawa Barat</p>
      <p class="mt-2 text-gray-700">
        LILIK.NET adalah usaha penyedia layanan internet berbasis desa yang berfokus pada akses internet terjangkau untuk masyarakat pedesaan.
      </p>
      <ul class="list-disc ml-6 mt-2 text-gray-700">
        <li>Melakukan instalasi, konfigurasi, dan pemeliharaan jaringan.</li>
        <li>Menangani pemasangan layanan baru dan troubleshooting perangkat.</li>
        <li>Memberikan dukungan teknis serta pelayanan optimal kepada pelanggan.</li>
      </ul>
    </div>
  </div>

  <!-- Education -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4 text-indigo-600">Pendidikan</h2>
    <div class="bg-white shadow-md rounded-lg p-6 mb-4">
      <h3 class="text-xl font-bold text-gray-800">Politeknik Negeri Indramayu</h3>
      <p class="text-sm text-gray-500">Sep 2023 - Okt 2027 (Perkiraan Lulus)</p>
      <p class="text-gray-700">
        D4 Rekayasa Perangkat Lunak — IPK 3.63/4.00
        Fokus: Software Engineering, Web & Mobile Development, Database Management, UI/UX Design.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-bold text-gray-800">SMA Negeri 1 Juntinyuat</h3>
      <p class="text-sm text-gray-500">Jul 2020 - Mei 2023</p>
      <p class="text-gray-700">
        Jurusan Ilmu Pengetahuan Sosial (IPS), fokus pada analisis, komunikasi, dan pemahaman sosial-ekonomi.
      </p>
    </div>
  </div>

  <!-- Organizational Experience -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4 text-indigo-600">Pengalaman Organisasi</h2>
    <div class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-bold text-gray-800">FORMADIKSI POLINDRA</h3>
      <p class="text-sm text-gray-500">Sep 2024 - Jun 2025</p>
      <p class="text-gray-700">
        Ketua Divisi Dana Usaha — Organisasi penerima beasiswa Bidikmisi/KIP Kuliah di Polindra.
      </p>
      <ul class="list-disc ml-6 mt-2 text-gray-700">
        <li>Memimpin tim pelaksana kegiatan kewirausahaan kampus.</li>
        <li>Mengelola dan mengembangkan unit usaha internal organisasi.</li>
        <li>Merancang strategi bisnis kecil untuk event kampus.</li>
      </ul>
    </div>
  </div>
</div>
@endsection
