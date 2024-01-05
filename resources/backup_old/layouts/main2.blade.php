<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stok Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/main2.css">

  </head>
  <body class="">

<div class="container">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ (session('success')) }}
      </div>
    @endif
</div>

<div class="container">
    @if (session('success2'))
        <div class="alert alert-danger" role="alert">
            {{ (session('success2')) }}
      </div>
    @endif
</div>

<div class="container">
    @if (session('success3'))
        <div class="alert alert-primary" role="alert">
            {{ (session('success3')) }}
      </div>
    @endif
</div>

@yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>