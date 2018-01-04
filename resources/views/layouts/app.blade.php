<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="/css/app.css">

  <title>@yield('title') - The Void</title>
</head>
<body>
  <div class="grid-container">
    @include('partials.navigation')
    @yield('content')
  </div>
  
  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>