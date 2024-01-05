@extends('layouts.main')

@section('content')

<div class="container pt-3">
    <div class="row kotak rounded-3 bg-silver3 mt-5">
        <div class="col-6 shadow-keren px-5 py-5">
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
                <a href="/barangs" class="btn bg-ijo  rounded-5 fw-semibold">Kelola barang</a>
            </div>

        </div>
        <div class="col-6 kotak">
            <div class="shadow-keren">
                <div class="d-flex justify-content-between align-items-center px-5 pt-3 mx-1">
                    <!-- GW NYURI DI YOUTUB SORRY GW TOLOL HEHE -->
                    <div class="section section-jarak1">
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
                    </div>

                    <div class="d-flex justify-content-center align-items-center position-static pt-3 text-end">
                        <img class="animasi1" src="https://cdn-icons-png.flaticon.com/512/10195/10195227.png" alt="" width="175" height="175">
                    </div>
                </div>

                <div class="d-flex align-items-center px-5 pb-5">
                    <h1 class="fw-light fst-italic fs-5 text-light px-3">System is running. . .</h1>
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

<div class="">
    <div class="">
        <div class="mt-4 text-center">
            <p class="text-secondary fw-light">Copyright &copy; Lananglp 2023</p>
        </div>
    </div>
</div>



@endsection