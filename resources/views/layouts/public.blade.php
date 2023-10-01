<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="icon"type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body class="position-relative">
  @include('partials.header')
  <main>
    @yield('content')
  </main>
  @include('partials.footer')
</body>
</html>