<header class="bg-white shadow-sm">
  <div class="container mx-auto flex justify-between items-center p-4">
    <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600">
      Hendri<span class="text-gray-800">Paturaya</span>
    </a>
    <nav class="space-x-6 text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-indigo-600">Home</a>
      <a href="{{ route('about') }}" class="hover:text-indigo-600">About</a>
      <a href="{{ route('skills') }}" class="hover:text-indigo-600">Skills</a>
      <a href="{{ route('projects.index') }}" class="hover:text-indigo-600">Projects</a>
      <a href="{{ route('contact.create') }}" class="hover:text-indigo-600">Contact</a>
    </nav>
  </div>
</header>
