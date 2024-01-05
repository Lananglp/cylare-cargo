<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cylare Cargo</title>

    <link rel="shortcut icon" href="img/icon/laravel.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/awesome.css">

</head>
<body class="bg-nice">

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-4 shadow-nice-master rounded text-light text-center bg-nice-2">
            <form action="{{ route('storeRegister') }}" method="post">
                @csrf
                <div class="shadow-nice px-4 pt-4 pb-2"> 
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-light d-flex align-items-center L-js-1-left">
                            <img class="me-1" src="img/icon/laravel.png" alt="" width="20" height="20">
                            <span>Cylare Cargo</span>
                        </div>
                        <div class="L-js-1-right">
                            <img class="me-1" src="img/icon/logo_white.png" alt="" width="20" height="20">
                        </div>
                    </div>
                    <h1 class="fs-5 mt-2 text-title L-js-1-center">Administrator register</h1>
                </div>
                <div class="px-4 py-4">
                    <div class="L-js-2-center">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input name="name" type="text" class="form-control form-control-login" placeholder="username">
                        </div>
                    </div>
                    <div class="L-js-3-center">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input name="email" type="email" class="form-control form-control-login" placeholder="email">
                        </div>
                    </div>
                    <div class="L-js-4-center">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text"><i class="bi bi-house"></i></span>
                            <input name="address" type="text" class="form-control form-control-login" placeholder="address">
                        </div>
                    </div>
                    <div class="L-js-5-center">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input name="phone" type="number" class="form-control form-control-login" placeholder="phone">
                        </div>
                    </div>
                    <div class="L-js-6-center">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text"><i class="bi bi-key"></i></span>
                            <input name="password" type="password" class="form-control form-control-login" placeholder="password">
                        </div>
                    </div>
                    <div class="L-js-7-center">
                        <button class="btn btn-sm btn-login w-100" type="submit">Register</button>
                        <div class="mt-1">
                            <span class="fw-light">Has have an account? <a class="text-red text-decoration-none" href="/">login now</a></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

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