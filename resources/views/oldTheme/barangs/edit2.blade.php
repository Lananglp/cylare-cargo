@extends('layouts.main')

@section('content')

<div class="container px-5 py-5">
    <h1>Edit User</h1>

    <form action="/barangs/{{ $barang->id }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-6 mb-3">
                <label for="">Nama barang</label>
                <input type="text" name="nama_barang" value="{{ old('nama_barang') ? old('nama_barang') : $barang->nama_barang }}" class="form-control @error('nama_barang') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-6 mb-3">
                <label for="">Jumlah barang</label>
                <input type="text" name="jumlah_barang" value="{{ old('jumlah_barang') ? old('jumlah_barang') : $barang->jumlah_barang }}" class="form-control @error('jumlah_barang') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 mb-3">
                <button class="btn btn-sm btn-success">Save</button>
                <a href="/barangs" class="btn btn-sm btn-danger">Back</a>
            </div>
        </div>
    </form>
</div>

@endsection