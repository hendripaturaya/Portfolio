<header
  id="site-header"
  class="sticky top-0 z-50
         bg-blue-600/80 backdrop-blur-md
         transition-all duration-300">

  <div class="container mx-auto flex justify-between items-center px-6 py-4">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="text-2xl font-bold text-white">
      Hendri<span class="text-blue-200">Paturaya</span>
    </a>

    <!-- Navigation -->
    <nav class="space-x-6 font-medium">

      <a href="{{ route('home') }}"
         class="transition
         {{ request()->routeIs('home')
            ? 'text-white border-b-2 border-white pb-1'
            : 'text-blue-100 hover:text-white' }}">
        Home
      </a>

      <a href="{{ route('about') }}"
         class="transition
         {{ request()->routeIs('about')
            ? 'text-white border-b-2 border-white pb-1'
            : 'text-blue-100 hover:text-white' }}">
        About
      </a>

      <a href="{{ route('skills') }}"
         class="transition
         {{ request()->routeIs('skills')
            ? 'text-white border-b-2 border-white pb-1'
            : 'text-blue-100 hover:text-white' }}">
        Skills
      </a>

      <a href="{{ route('projects.index') }}"
         class="transition
         {{ request()->routeIs('projects.*')
            ? 'text-white border-b-2 border-white pb-1'
            : 'text-blue-100 hover:text-white' }}">
        Projects
      </a>

      <a href="{{ route('contact.create') }}"
         class="transition
         {{ request()->routeIs('contact.*')
            ? 'text-white border-b-2 border-white pb-1'
            : 'text-blue-100 hover:text-white' }}">
        Contact
      </a>

      <!-- Dark Mode Toggle -->
        <button id="theme-toggle"
                class="ml-6 text-blue-100 hover:text-white transition">

        <!-- Sun Icon -->
        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 hidden" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 4.75a.75.75 0 01.75-.75h.5a.75.75 0 010 1.5h-.5A.75.75 0 0112 4.75zM6.22 6.22a.75.75 0 011.06 0l.35.35a.75.75 0 11-1.06 1.06l-.35-.35a.75.75 0 010-1.06zM4.75 12a.75.75 0 01-.75-.75v-.5a.75.75 0 011.5 0v.5a.75.75 0 01-.75.75zM6.22 17.78a.75.75 0 010-1.06l.35-.35a.75.75 0 111.06 1.06l-.35.35a.75.75 0 01-1.06 0zM12 19.25a.75.75 0 01.75.75v.5a.75.75 0 01-1.5 0v-.5a.75.75 0 01.75-.75zM17.78 17.78a.75.75 0 011.06 0l.35.35a.75.75 0 11-1.06 1.06l-.35-.35a.75.75 0 010-1.06zM19.25 12a.75.75 0 01.75-.75h.5a.75.75 0 010 1.5h-.5a.75.75 0 01-.75-.75zM17.78 6.22a.75.75 0 010 1.06l-.35.35a.75.75 0 11-1.06-1.06l.35-.35a.75.75 0 011.06 0zM12 7.25A4.75 4.75 0 1016.75 12 4.75 4.75 0 0012 7.25z"/>
        </svg>

        <!-- Moon Icon -->
        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 hidden" fill="currentColor" viewBox="0 0 24 24">
            <path d="M21.75 15.5A9.72 9.72 0 0112.5 22 9.75 9.75 0 0111 2.07a.75.75 0 01.94.94A8.25 8.25 0 0020.8 14.56a.75.75 0 01.95.94z"/>
        </svg>
        </button>


    </nav>

    <script>
    if (
        localStorage.theme === 'dark' ||
        (!('theme' in localStorage) &&
        window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
    </script>

  </div>
</header>
