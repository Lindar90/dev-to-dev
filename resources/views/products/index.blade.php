<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Products</span>
  </nav>

  <div id="app" class="container">
    <product-list></product-list>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
