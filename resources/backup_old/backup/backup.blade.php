<!-- btn users.index -->
<a href="/users" class="btn btn-sm bg-ijo2 fw-semibold">Ubah</a>

@extends('layouts.main2')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="d-flex justify-content-center align-items-center bg-silver rounded-3 px-5 py-5">
        <form action="/authenticate"method="POST" class="">
            <div class="mb-5">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/10195/10195227.png" alt="" width="50" height="50">
                    <h1 class="text-light fs-2 fst-italic fw-bold pt-2 px-2">Stok<span class="text-ijo">Barang</span></h1>
                </div>
            </div>

            <h1 class="fw-normal text-light text-center mb-3 fs-4">Login Form</h1>
            @csrf
            
            <div class="mb-3">
                <input type="email" name="email" class="form-control shadow rounded-5" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control shadow rounded-5" placeholder="Password">
            </div>
            <button class="btn bg-ijo text-putih8 w-100 rounded-5 mb-3">Login</button>
            <p class="text-light fw-light text-center">Form register saat ini belum tersedia.</p>
        </form>
    </div>
</div>

    <div class="">
        <div class="text-center">
            <p class="text-secondary fw-light">Copyright &copy; Lananglp 2023</p>
        </div>
    </div>



@endsection

@extends('layouts.main')

@section('content')

<div class="container px-5 py-5">
    <div class="row px-5 pt-5">
        <div class="col-8">
            <h1 class="fw-bold fst-italic display-3 text-light animasi2">Stok<span class="text-ijo">Barang</span></h1>
            <p class="fs-5 px-5 fw-light text-light">" Stok barang merupakan system berbasis website yang bertugas untuk melakukan pengelolaan barang "</p>
            <p class="fst-italic mt-5 text-light">Created by:</p>

            <table class="table table-sm fw-light">
                <thead>
                    <tr class="text-light border-bottom border-secondary">
                        <th>Nama</th>
                        <th>NIM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-light border-bottom border-secondary">
                        <td>Kadek Lanang Lanusa Putera</td>
                        <td>2201030015</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-5">
                <p class="text-light fw-light">Klik tombol dibawah untuk mulai mengelola barang</p>
                <a href="/barang" class="btn bg-ijo  rounded-5 w-25 fw-semibold">Kelola barang</a>
            </div>

        </div>
        <div class="col-4">

        <!-- GW NYURI DI YOUTUB SORRY GW TOLOL HEHE -->
        <section class="">
            <div class="bulat">
                <div class="circle1">
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                    <span style="--i:4;"></span>
                    <span style="--i:5;"></span>
                    <span style="--i:6;"></span>
                    <span style="--i:7;"></span>
                    <span style="--i:8;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                </div>
                <div class="circle1">
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                    <span style="--i:4;"></span>
                    <span style="--i:5;"></span>
                    <span style="--i:6;"></span>
                    <span style="--i:7;"></span>
                    <span style="--i:8;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                </div>
            </div>
        </section>

        <div class="d-flex justify-content-center align-items-center position-static text-end">
            <img class="animasi1" src="https://cdn-icons-png.flaticon.com/512/10195/10195227.png" alt="" width="300" height="300">
        </div>

        </div>
    </div>
</div>

<div class="">
    <div class="">
        <div class="text-center">
            <p class="text-secondary fw-light">Copyright &copy; Lananglp 2023</p>
        </div>
    </div>
</div>












<!-- create !!! -->
<div class="pt-5">
    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <img class="animasi3" src="https://cdn-icons-png.flaticon.com/512/10195/10195227.png" alt="" width="75" height="75">
                    <div class="animasi2">
                        <h1 class="text-light display-5 fst-italic fw-bold px-3">Stok<span class="text-ijo">Barang</span></h1>
                    </div>
            </div>
            <div class="col-6 pt-4">
                <div class="d-flex align-items-center justify-content-end">
                    <img src="https://cdn-icons-png.flaticon.com/512/1296/1296359.png" alt="" width="30" height="30">
                        <h1 class="text-light fw-light fs-4 px-2">High Quality Technology system.</h1>
                </div>
            </div>
        </div>

    <div class="bg-silver2 rounded-3 py-4 px-4 mt-5">
        <div class="mb-4">
            <h1 class="text-light fs-3 fst-italic fw-semibold">Tambah <span class="text-ijo">Barang</span></h1>
        </div>
        <form action="/users" method="POST">
            @csrf
            <div class="row">
                <div class="col-6 my-3">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control shadow-keren @error('name') is-invalid @enderror" placeholder="Nama barang">
                    <label class="px-3 pt-1 text-ijo fw-light" for="">Input nama barang !</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-6 my-3">
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control shadow-keren @error('email') is-invalid @enderror" placeholder="Jumlah barang">
                    <label class="px-3 pt-1 text-ijo fw-light" for="">Input Jumlah barang !</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-6 my-3">
                    <input type="text" name="password" value="{{ old('password') }}" class="form-control shadow-keren @error('password') is-invalid @enderror" placeholder="Jenis barang">
                    <label class="px-3 pt-1 text-ijo fw-light" for="">Input Jenis barang !</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-12 mb-3 d-flex justify-content-end align-items-center">
                    <div class="px-3">
                        <button class="btn btn-sm shadow-keren px-5 bg-ijo2">Simpan</button>
                    </div>
                    <div>
                        <a href="/users" class="btn btn-sm shadow-keren px-5 bg-barak text-putih5">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
        
    </div>

    </div>
</div>


@endsection