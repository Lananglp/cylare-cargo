<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stok Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/main.css">

  </head>
  <body class="">

<div class="bg-gadang px-5 py-2">
    <div class="px-5 mx-5 d-flex justify-content-between align-items-center">
        <a href="/" class="navbar-brand fw-bold fs-5 fst-italic text-light">Stok<span class="text-ijo">Barang</span></a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="m-2 text-decoration-none text-putih3 fw-medium" href="/">Home</a></li>
            <li class="nav-item"><a class="m-2 text-decoration-none text-putih3 fw-medium" href="/barangs">Barang</a></li>
            <li class="nav-item"><a class="m-2 text-decoration-none text-putih3 fw-medium" href="#">Pengaturan</a></li>
        </ul>
        <div>
            <a class="btn btn-sm bg-ijo3 fw-semibold rounded-5" href="/home">Admin Login</a>
        </div>

    </div>
</div>

<div class="container">
    @if (session('peringatan'))
        <div class="alert alert-success fw-semibold" role="alert">
            {{ (session('peringatan')) }}
      </div>
    @endif
</div>

@yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>