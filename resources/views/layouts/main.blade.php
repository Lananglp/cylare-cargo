@php
    use Illuminate\Support\Facades\Request;
@endphp

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cylare Cargo</title>

    <link rel="shortcut icon" href="/img/icon/laravel.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/awesome.css">

</head>
<body>

@auth
<nav class="navbar navbar-expand-lg bg-nice-2 shadow-nice">
    <div class="container">
        <a class="text-decoration-none text-light fs-5 title-master" href="/home">
            <img class="me-1" src="/img/icon/laravel.png" alt="" width="35" height="35">
            Cylare Cargo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list text-light fs-1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item nav-master-1">
                    <a class="nav-link link-hover {{ Request::is('home') ? 'active' : '' }}" href="/home">
                        <i class="bi bi-award fs-5 me-1"></i>
                        Features
                        </a>
                </li>
                <li class="nav-item nav-master-2">
                    <a class="nav-link link-hover {{ Request::is('items') ? 'active' : '' }}" href="/items">
                        <i class="bi bi-box fs-5 me-1"></i>
                        Items
                    </a>
                </li>
                <li class="nav-item nav-master-3">
                    <a class="nav-link link-hover {{ Request::is('stocks') ? 'active' : '' }}" href="/stocks">
                        <i class="bi bi-truck fs-5 me-1"></i>
                        Returned
                    </a>
                </li>
                <li>
                    <a class="nav-link link-hover {{ Request::is('users') ? 'active' : '' }}" href="/users">
                        <i class="bi bi-person-circle fs-5 me-1"></i>
                        Administrator
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link-hover dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-stars fs-5 me-1"></i>
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/oldTheme/oldLogin">Old home theme</a></li>
                        <li><a class="dropdown-item" href="/portofolio">Portofolio</a></li>
                        <li><a class="dropdown-item" href="/arsitektur">Project Pak Tugangga</a></li>
                        <li><a class="dropdown-item" href="/history">History</a></li>
                    </ul>
                </li>

            </ul>
            <div class="nav-master-4">
                <a class="nav-link link-hover" href="/logout">
                    <i class="bi bi-box-arrow-right fs-5 me-1"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>
@endauth

{{-- <div class="container mt-5">
    @if (session('warning'))
        <div class="alert alert-nice fw-semibold" role="alert">
            {{ (session('warning')) }}
      </div>
    @endif
</div> --}}

@yield('content')

@auth
<footer>
    <div class="bg-nice-2 shadow-nice">
        <div class="container flex-wrap d-flex justify-content-between align-items-center text-light px-4 py-3">
            <div>
                <div class="text-light d-flex align-items-center title-master">
                    <img class="me-1" src="/img/icon/laravel.png" alt="" width="20" height="20">
                    <span>Cylare Cargo</span>
                </div>
            </div>
            <div class="footer-master-1">
                <span class="text-secondary">&copy; Design by Lanang Cylare</span>
            </div>
        </div>
    </div>
</footer>
@endauth

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>

    <script>
        @if(session('warning'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('warning') }}',
        })
        @endif
    </script>
</body>
</html>