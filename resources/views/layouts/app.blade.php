<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Hendri Paturaya | Portfolio')</title>

  {{-- Tailwind & JS --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-slate-900
             text-gray-800 dark:text-slate-200
             antialiased min-h-screen flex flex-col">

  {{-- Header --}}
  @include('layouts.header')

  {{-- Main Content --}}
    <main class="flex-grow pt-20">
    <div class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </div>
    </main>


  {{-- Footer --}}
  @include('layouts.footer')

</body>
</html>
