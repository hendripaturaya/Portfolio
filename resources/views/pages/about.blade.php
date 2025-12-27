@extends('layouts.app')

@section('title', 'Tentang Saya | Hendri Paturaya')

@section('content')

<!-- ================= HERO / PROFILE ================= -->
<section
  class="bg-blue-50 dark:bg-slate-800/60
         py-16 mb-16 rounded-2xl
         transition-colors">

  <div class="flex flex-col items-center text-center">
    <!-- Foto Profil -->
    <div class="w-40 h-40 mb-4">
      <img
        src="{{ asset('img/hendri.jpg') }}"
        alt="Foto Hendri Paturaya"
        class="w-full h-full object-cover rounded-full
               border-4 border-blue-600 dark:border-blue-400
               shadow-lg hover:scale-105 transition"
      >
    </div>

    <!-- Nama -->
    <h1 class="text-4xl font-bold text-slate-800 dark:text-white">
      Hendri <span class="text-blue-600 dark:text-blue-400">Paturaya</span>
    </h1>

    <!-- Role -->
    <p class="mt-2 text-lg text-slate-600 dark:text-slate-300">
      Web Developer • Laravel & Flutter Enthusiast
    </p>

    <!-- Lokasi -->
    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
      Indramayu, Jawa Barat
    </p>
  </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="max-w-5xl mx-auto px-6 space-y-16">

  <!-- Tentang Saya -->
  <div class="text-center">
    <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-4">
      Tentang Saya
    </h2>
    <p class="text-slate-700 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
      Mahasiswa <b>D4 Rekayasa Perangkat Lunak</b> di
      <b>Politeknik Negeri Indramayu</b> dengan minat besar pada
      pengembangan aplikasi web dan mobile.
      Berpengalaman menggunakan <b>Laravel</b> dan <b>Flutter</b>,
      serta terbiasa menyusun dokumentasi sistem dan bekerja dalam tim.
    </p>
  </div>

  <!-- ================= INFO & SKILLS ================= -->
  <div class="grid md:grid-cols-2 gap-8">

    <!-- Informasi Pribadi -->
    <div
      class="bg-white dark:bg-slate-800
             border border-gray-200 dark:border-slate-700
             p-6 rounded-xl
             shadow-md dark:shadow-none
             transition-colors">

      <h3 class="text-xl font-semibold text-blue-600 dark:text-blue-400 mb-4">
        Informasi Pribadi
      </h3>

      <ul class="space-y-2 text-slate-700 dark:text-slate-300">
        <li><b>Nama:</b> Hendri Paturaya</li>
        <li><b>Lokasi:</b> Indramayu, Jawa Barat</li>
        <li>
          <b>Email:</b>
          <a href="mailto:hendripaturaya23@student.polindra.ac.id"
             class="text-blue-600 dark:text-blue-400 hover:underline">
            hendripaturaya23@student.polindra.ac.id
          </a>
        </li>
        <li>
          <b>Telepon:</b>
          <a href="tel:+6283195754705"
             class="text-blue-600 dark:text-blue-400 hover:underline">
            +62 831 9575 4705
          </a>
        </li>
        <li>
          <b>GitHub:</b>
          <a href="https://github.com/hendripaturaya"
             target="_blank"
             class="text-blue-600 dark:text-blue-400 hover:underline">
            github.com/hendripaturaya
          </a>
        </li>
      </ul>
    </div>

    <!-- Keahlian -->
    <div
      class="bg-white dark:bg-slate-800
             border border-gray-200 dark:border-slate-700
             p-6 rounded-xl
             shadow-md dark:shadow-none
             transition-colors">

      <h3 class="text-xl font-semibold text-blue-600 dark:text-blue-400 mb-4">
        Keahlian Utama
      </h3>

      <ul class="grid grid-cols-2 gap-2 text-slate-700 dark:text-slate-300">
        <li>Laravel</li>
        <li>Flutter</li>
        <li>HTML / CSS</li>
        <li>JavaScript (Basic)</li>
        <li>Bootstrap</li>
        <li>MySQL</li>
        <li>Figma</li>
        <li>Git & GitHub</li>
      </ul>
    </div>
  </div>

  <!-- ================= EXPERIENCE ================= -->
  <div>
    <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-6">
      Pengalaman Kerja
    </h2>

    <div
      class="bg-white dark:bg-slate-800
             border border-gray-200 dark:border-slate-700
             p-6 rounded-xl
             shadow-md dark:shadow-none
             transition-colors">

      <h3 class="text-xl font-bold text-slate-800 dark:text-white">
        Teknisi Jaringan Internet — LILIK.NET
      </h3>

      <p class="text-sm text-slate-500 dark:text-slate-400 mb-2">
        Jul 2024 – Sekarang | Indramayu, Jawa Barat
      </p>

      <p class="text-slate-700 dark:text-slate-300 mb-3">
        LILIK.NET merupakan penyedia layanan internet berbasis desa
        yang berfokus pada akses internet terjangkau dan andal.
      </p>

      <ul class="list-disc ml-6 text-slate-700 dark:text-slate-300">
        <li>Instalasi, konfigurasi, dan pemeliharaan jaringan.</li>
        <li>Troubleshooting router dan perangkat jaringan.</li>
        <li>Dukungan teknis dan pelayanan pelanggan.</li>
      </ul>
    </div>
  </div>

  <!-- ================= EDUCATION ================= -->
  <div>
    <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-6">
      Pendidikan
    </h2>

    <div class="space-y-4">
      <div
        class="bg-white dark:bg-slate-800
               border border-gray-200 dark:border-slate-700
               p-6 rounded-xl
               shadow-md dark:shadow-none
               transition-colors">

        <h3 class="text-xl font-bold text-slate-800 dark:text-white">
          Politeknik Negeri Indramayu
        </h3>

        <p class="text-sm text-slate-500 dark:text-slate-400">
          Sep 2023 – Okt 2027 (Expected)
        </p>

        <p class="text-slate-700 dark:text-slate-300">
          D4 Rekayasa Perangkat Lunak — IPK 3.63 / 4.00
        </p>
      </div>

      <div
        class="bg-white dark:bg-slate-800
               border border-gray-200 dark:border-slate-700
               p-6 rounded-xl
               shadow-md dark:shadow-none
               transition-colors">

        <h3 class="text-xl font-bold text-slate-800 dark:text-white">
          SMA Negeri 1 Juntinyuat
        </h3>

        <p class="text-sm text-slate-500 dark:text-slate-400">
          Jul 2020 – Mei 2023
        </p>

        <p class="text-slate-700 dark:text-slate-300">
          Jurusan IPS — fokus analisis dan komunikasi.
        </p>
      </div>
    </div>
  </div>

  <!-- ================= ORGANIZATION ================= -->
  <div>
    <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-6">
      Pengalaman Organisasi
    </h2>

    <div
      class="bg-white dark:bg-slate-800
             border border-gray-200 dark:border-slate-700
             p-6 rounded-xl
             shadow-md dark:shadow-none
             transition-colors">

      <h3 class="text-xl font-bold text-slate-800 dark:text-white">
        FORMADIKSI POLINDRA
      </h3>

      <p class="text-sm text-slate-500 dark:text-slate-400">
        Sep 2024 – Jun 2025
      </p>

      <p class="text-slate-700 dark:text-slate-300 mb-2">
        Ketua Divisi Dana Usaha
      </p>

      <ul class="list-disc ml-6 text-slate-700 dark:text-slate-300">
        <li>Memimpin kegiatan kewirausahaan organisasi.</li>
        <li>Mengelola unit usaha internal.</li>
        <li>Menyusun strategi bisnis event kampus.</li>
      </ul>
    </div>
  </div>

</section>

@endsection
