<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">  
    <title>{{ config('app.name', 'Laravel') }}</title>  
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">  
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans antialiased">
    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    </script>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-500">
      @include('layouts.navigation')  
      <!-- Page Heading -->
      @if (isset($header))
        <header class="bg-white dark:bg-gray-700 shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
              {{ $header }}
            </h2>
          </div>
        </header>
      @endif  
      <!-- Page Content -->
      <main>
        {{ $slot }}
      </main>
    </div>
  </body>
</html>
