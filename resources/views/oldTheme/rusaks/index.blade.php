@extends('layouts.oldThemeMain')

@section('content')

<div class="container pt-5">
    <div class="kotak rounded-2 bg-silver3">
        <div class="py-3 px-4 shadow-keren">
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
            <!--
            <div class="px-5">
                <p class="text-light fw-light fs-5 px-5">" Kelola barangmu dan jadilah legenda "</p>
            </div>
            -->
        </div>

        <div class="row kotak">
            <div class="col-8 p-4 kotak shadow-keren">
                <div class="row d-flex align-items-start">
                    <div class="col-6">
                        <ul class="text-light fw-light">
                            <li>Berikut data return barang anda</li>
                        </ul>
                    </div>
                    <div class="col-6 text-end">
                        <a href="/oldTheme/barangs/index" class="btn btn-sm bg-ijo3 fw-semibold">Kembali</a>
                    </div>
                </div>
                @if ($rusaks->count() > 0)
                <div class="bg-table">
                    <table class="table table-sm">
                        <thead>
                            <tr class="text-light border-bottom border-secondary bg-table2">
                                <th class="text-center">No</th>
                                <th class="">Nama Barang</th>
                                <th class="text-center">Jumlah barang</th>
                                <th class="text-center">Tanggal return</th>
                                <th class="">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rusaks as $key => $rusak)
                            <tr class="text-light fw-light border-bottom border-secondary">
                            @php
                                $total = $rusaks->currentPage() * $rusaks->perPage();
                                $number = $total - $rusaks->perPage() + 1 + $key;
                            @endphp
                                <td class="text-center">{{ $number  }}</td>
                                <td>{{ $rusak->name_stocks }}</td>
                                <td class="text-center">{{ $rusak->quantity }}</td>
                                <td class="text-center">{{ $rusak->created_at }}</td>
                                <td>
                                    <div class="">
                                    <button class="btn btn-sm bg-barak text-putih5 fw-semibold">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="bg-table">
                    <table class="table table-sm">
                        <thead>
                            <tr class="text-light border-bottom border-secondary bg-table2">
                                <th class="text-center">No</th>
                                <th class="">Nama Barang</th>
                                <th class="text-center">Jumlah barang</th>
                                <th class="text-center">Tanggal return</th>
                                <th class="">Opsi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <h1 class="text-white fs-4 px-5 pt-3">belum ada data return barang !</h1>
                @endif



                
                @if ($rusaks->hasPages())
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm justify-content-end">

                        {{-- Previous Page Link --}}
                        @if ($rusaks->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link border border-white fw-semibold">Previous</a>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link bg-ijo3 border border-white fw-semibold" href="{{ $rusaks->previousPageUrl() }}">Previous</a>
                        </li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($rusaks->hasMorePages())
                        <li class="page-item">
                        <a class="page-link bg-ijo3 border border-white fw-semibold" href="{{ $rusaks->nextPageUrl() }}">Next</a>
                        @else
                        <li class="page-item disabled">
                        <a class="page-link border border-white fw-semibold" href="#">Next</a>
                        @endif

                        </li>
                    </ul>
                </nav>
                @endif


                


            </div>
            <div class="col-4 pt-3">
                <h1 class="text-putih8 fs-2 text-center">Tips!</h1>
                <ul class="text-light fw-light">
                    <li class="text-putih7">Dekatkan cursor ke sini untuk memperbesar tampilan text.</li>
                    <li class="text-putih7">Barang yang anda Input akan terlihat pada tabel di samping.</li>
                    <li class="text-putih7">Jika tidak ada data barang yang terlihat, maka lakukan tambah barang.</li>
                    <li class="text-putih7">Barang yang sudah berusia 1 tahun akan masuk ke status Expired.</li>
                </ul>

                <!-- GW NYURI DI YOUTUB SORRY GW TOLOL HEHE -->
                <div class="pb-2">
                    <section class="px-5 section">
                        <div class="bulat">
                            <div class="circle1 circle2">
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
                            <div class="circle1 circle2">
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
                </div>

            </div>

        </div>
    </div>
    <div class="py-3">
        <div class="text-center">
            <p class="text-secondary fw-light">Copyright &copy; Lananglp 2023</p>
        </div>
    </div>
</div>

@endsection