<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Hendri Paturaya | Portfolio')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

  {{-- Header --}}
  @include('layouts.header')

  {{-- Konten utama --}}
  <main class="flex-1 container mx-auto p-6">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('layouts.footer')

</body>
</html>
