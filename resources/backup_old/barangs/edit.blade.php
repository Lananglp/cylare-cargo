@extends('layouts.main')

@section('content')

<div class="pt-5">
        <div class="container my-5 pb-5">
            <div class="row rounded-3 bg-silver3">
                <div class="col-7 py-5 shadow-keren">
                    <div class="px-5">
                        <div class="col-6 pb-3 d-flex align-items-center">
                            <img class="animasi3" src="https://cdn-icons-png.flaticon.com/512/10195/10195227.png" alt="" width="75" height="75">
                            <div class="animasi2">
                                <h1 class="text-light display-5 fst-italic fw-bold px-3">Stok<span class="text-ijo">Barang</span></h1>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-light fs-3 fst-italic fw-semibold">Return <span class="text-ijo">Barang</span></h1>
                            <ul>
                                <li class="text-light fw-light">Isi form dibawah untuk mengembalikan barang.</li>
                            </ul>
                        </div>
                        <form action="/rusaks" method="POST">
                            @csrf
                            <div class="">
                                <div class="my-3">
                                    <input type="text" name="nama_barang" value="{{ old('nama_barang') ? old('nama_barang') : $barang->nama_barang }}" class="form-control shadow-keren fw-semibold @error('nama_barang') is-invalid @enderror">
                                    <label class="px-3 pt-1 text-ijo fw-light" for="">Edit nama barang !</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <input type="text" name="jumlah_barang" value="{{ old('jumlah_barang') ? old('jumlah_barang') : $barang->jumlah_barang }}" class="form-control shadow-keren fw-semibold @error('jumlah_barang') is-invalid @enderror">
                                    <label class="px-3 pt-1 text-ijo fw-light" for="">Edit Jumlah barang !</label>
                                    @error('email')
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
                                        <a href="/barangs" class="btn btn-sm shadow-keren px-5 bg-barak text-putih5">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-5 kotak">
                    <div class="kotak shadow-keren px-5 py-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1296/1296359.png" alt="" width="25" height="25">
                            <h1 class="text-light fw-light fs-5 px-2">High Quality Technology system.</h1>
                        </div>
                    </div>

                    <div class="kotak px-5 py-5">
                        <div>
                            <h1 class="text-ijo fs-3">Tips !</h1>
                            <ul class="text-light fw-light">
                                <li class="text-putih7">Form pengisian barang tidak boleh kosong.</li>
                                <li class="text-putih7">Proses penambahan barang tidak akan terganggu oleh mahluk halus.</li>
                                <li class="text-putih7">Menambah barang terlalu banyak tidak membuat dia mencintaimu kembali.</li>
                                <li class="text-putih7">Jangan khawatir dengan keamanan, data yang diinput dijamin hilang.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection