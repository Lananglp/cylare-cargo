@extends('layouts.main2')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="d-flex justify-content-center align-items-center bg-silver3 login-ne rounded-3 px-5 py-5">
        <form action="/authenticate"method="POST" class="">
            <div class="mb-5">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/10195/10195227.png" alt="" width="50" height="50">
                    <h1 class="text-light fs-2 fst-italic fw-bold pt-2 px-2">Stok<span class="text-ijo">Barang</span></h1>
                </div>
            </div>

            <h1 class="fw-normal text-light text-center mb-3 fs-4">Admin Login</h1>
            @csrf
            
            <div class="mb-3">
                <input type="email" name="email" class="form-control shadow rounded-5" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control shadow rounded-5" placeholder="Password">
            </div>
            <button class="btn bg-ijo text-putih8 w-100 rounded-5 mb-3">Login</button>
            <p class="text-light fw-light text-center">Login admin untuk melakukan perubahan tambahan pada data barang.</p>

            <div class="pt-4 text-end">
                <a href="/" class="text-ijo fw-semibold text-decoration-none rounded-5 mb-3">Kembali</a>
            </div>
        </form>
    </div>
</div>

    <div class="">
        <div class="text-center">
            <p class="text-secondary fw-light">Copyright &copy; Lananglp 2023</p>
        </div>
    </div>



@endsection