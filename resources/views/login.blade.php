@extends('layouts.main')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="col-lg-3 shadow-nice-master rounded text-light text-center bg-nice-2">
        <form action="/authenticate" method="post">
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
                <h1 class="fs-5 mt-2 text-title L-js-1-center">Login as administrator</h1>
            </div>
            <div class="px-4 py-4">
                <div class="L-js-2-center">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input name="email" type="email" class="form-control form-control-login" placeholder="email" required>
                    </div>
                </div>
                <div class="L-js-3-center">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="bi bi-key"></i></span>
                        <input name="password" type="password" class="form-control form-control-login" placeholder="password" required>
                    </div>
                </div>
                <div class="L-js-4-center">
                    <button class="btn btn-sm btn-login w-100" type="submit">Login as administrator</button>
                    <div class="mt-1">
                        <span class="fw-light">Don't have an account? <a class="text-red text-decoration-none" href="/register">register here</a></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection