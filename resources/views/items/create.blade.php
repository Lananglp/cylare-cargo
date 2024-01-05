@extends('layouts.main')

@section('content')

    <section>
        <div class="container">
            <div class="box bg-nice-2 shadow-nice-master rounded-1 my-5">
                <div class="shadow-nice px-4 py-2 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center js-animation-1">
                        <span class="text-light d-flex align-items-center"><i class="bi bi-box me-2"></i> / Items / create</span>
                    </div>
                    <div class="text-secondary js-animation-2">
                        <img class="rotate-icon opacity-75" src="/img/icon/setting.png" alt="" width="20" height="20">
                        <span>System is Running. . .</span>
                    </div>
                </div>
                <div class="">
                    <div class="px-4 py-3">
                        <h1 class="fs-6 text-light text-center js-animation-10">add items</h1>
                        <form class="mt-3" action="/items" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6 js-animation-4">
                                    <label class="text-light my-2" for="">Items name</label>
                                    <input class="form-control form-control-sm form-control-nice" type="text" name="name_items" value="{{ old('name_items') }}" placeholder="items name" required>
                                    @error('name_items')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 js-animation-9">
                                    <label class="text-light my-2" for="">Quantity</label>
                                    <input class="form-control form-control-sm form-control-nice" type="number" name="quantity" value="{{ old('quantity') }}" placeholder="number of items" required>
                                    @error('quantity')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-3 text-light text-end js-animation-6">
                                <button class="btn btn-sm btn-nice me-1" type="submit">Sumbit</button>
                                <a class="btn btn-sm btn-back me-1" href="/items">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="shadow-nice py-3">
                    <div class="row">
                        <div class="col-lg-4 text-process d-flex justify-content-center align-items-center text-light">
                            <img class="rotate-icon opacity-75 me-1" src="/img/icon/setting.png" alt="" width="20" height="20">
                            <span class="">Network : <span class="text-health">32ms</span></span>
                        </div>
                        <div class="col-lg-4 text-process d-flex justify-content-center align-items-center text-light">
                            <img class="rotate-icon opacity-75 me-1" src="/img/icon/setting.png" alt="" width="20" height="20">
                            <span class="">Database protection : <span class="text-red">none</span></span>
                        </div>
                        <div class="col-lg-4 text-process d-flex justify-content-center align-items-center text-light">
                            <img class="rotate-icon opacity-75 me-1" src="/img/icon/setting.png" alt="" width="20" height="20">
                            <span class="">CPU : <span class="text-alert">3.1Hz--</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection