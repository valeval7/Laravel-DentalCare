<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Aplicación - @yield('title')</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4">
  </script>
  <link rel="stylesheet" href="style.css" />
  @stack('styles')
</head>

<body class="bg-[#EAEDF3]">
  @include('partials.nav')

  <main>
    @yield('content')
  </main>
  @stack('scripts')

</body>

</html>