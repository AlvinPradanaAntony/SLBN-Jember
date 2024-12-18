<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <title>@yield('title', config('app.name'))</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script>
    const theme = localStorage.getItem("theme");
    theme ? document.documentElement.setAttribute("data-theme", theme) : null;
  </script>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans antialiased dark:bg-gray-900">
  @include('partials.sidebar')

  <!-- Page Content -->
  {{-- <main>
      @yield('content')
    </main> --}}


</body>

</html>
