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
    const setDarkClass = () => {
      const isDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches);
      document.documentElement.classList.toggle('dark', isDark);
    };
    setDarkClass();
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass);
  </script>
 {{-- <script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('collapse', () => ({
      open: false,
      toggle() {
        this.open = !this.open;
      },
      autoHeight(ref) {
          ref.style.height = this.open ? `${ref.scrollHeight}px` : '0px';
        },
    }));
  });
</script> --}}


  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-50 dark:bg-gray-900">
  @include('partials.sidebar')

  <!-- Page Content -->
  {{-- <main>
      @yield('content')
    </main> --}}

    
</body>

</html>
