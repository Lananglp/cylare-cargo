@extends('layouts.main')

@section('content')

    <section>
        <div class="container">
            <div class="box bg-nice-2 shadow-nice-master rounded-1 my-5">
                <div class="shadow-nice px-4 py-2 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center I-js-1-left">
                        <span class="text-light d-flex align-items-center"><i class="bi bi-truck me-2"></i> / Returned</span>
                    </div>
                    <div class="text-secondary I-js-1-right">
                        <img class="rotate-icon opacity-75" src="img/icon/setting.png" alt="" width="20" height="20">
                        <span>System is Running. . .</span>
                    </div>
                </div>
                @if ($stocks->count() > 0)
                <div class="">
                    <div class="px-4 py-3">
                        <table class="table table-sm I-js-1-center">
                            <thead>
                                <tr class="text-light border-secondary">
                                    <th class="fw-light text-center">ID</th>
                                    <th class="fw-light">Name stocks</th>
                                    <th class="fw-light text-center">Quantity</th>
                                    <th class="fw-light text-center">Date returned</th>
                                    <th class="fw-light text-center">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stocks as $key => $ganteng)
                                <tr class="text-light border-secondary">
                                @php
                                    $total = $stocks->currentPage() * $stocks->perPage();
                                    $number = $total - $stocks->perPage() + 1 + $key;
                                @endphp
                                    <td class="fw-light text-center">{{ $number }}</td>
                                    <td class="fw-light">{{ $ganteng->name_stocks }}</td>
                                    <td class="fw-light text-center">{{ $ganteng->quantity }}</td>
                                    <td class="fw-light text-center">{{ $ganteng->created_at }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="btn btn-sm btn-nice-2 btn-small me-2" href="/stocks/{{ $ganteng->id }}/edit">
                                                <span class="bi bi-wrench"></span>
                                            </a>
                                            <form action="{{ route('destroy', $ganteng->id ) }}" method="post" id="hapus-form{{ $ganteng->id }}">
                                            @csrf 
                                            @method('delete')
                                                <button class="btn btn-sm btn-nice-1 btn-small me-1" type="button" onclick="konfirmasiHapus({{ $ganteng->id }})">
                                                    <span class="bi bi-trash-fill"><span class=""></span></span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                    {{-- <td class="text-center">
                                        <a class="btn btn-sm btn-nice-1 me-1" type="button" href="/stocks/{{ $ganteng->id }}/delete" onclick="konfirmasiHapus()">
                                            <span class="bi bi-trash-fill"><span class=""></span></span>
                                        </a>
                                    </td> --}}

                                    {{-- <td>
                                        <form action="/stocks/{{ $ganteng->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger">hapus</button>
                                        </form>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="bg-table px-4 mt-3">
                        <table class="table table-sm">
                            <thead>
                                <tr class="text-light border-secondary">
                                    <th class="fw-light text-center">ID</th>
                                    <th class="fw-light">Name stocks</th>
                                    <th class="fw-light text-center">Quantity</th>
                                    <th class="fw-light text-center">Date returned</th>
                                    <th class="fw-light text-center">Options</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <p class="text-white text-center py-3">Nothing.</p>
                    @endif
                    
                    <div class="shadow-nice flex-wrap d-flex justify-content-between align-items-center px-4 pb-2">
                        
                    @if ($stocks->hasPages())
                        <div class="mt-3 I-js-2-left">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm">

                                    {{-- Previous Page Link --}}
                                    @if ($stocks->onFirstPage())
                                    <li class="page-item">
                                        <a class="page-link page-link-max bi bi-x-circle fs-4"></a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link page-link-hover bi bi-arrow-left-circle fs-4" href="{{ $stocks->previousPageUrl() }}"></a>
                                    </li>
                                    @endif

                                    {{-- Next Page Link --}}
                                    @if ($stocks->hasMorePages())
                                    <li class="page-item">
                                    <a class="page-link page-link-hover bi bi-arrow-right-circle fs-4" href="{{ $stocks->nextPageUrl() }}"></a>
                                    @else
                                    <li class="page-item">
                                    <a class="page-link page-link-max bi bi-x-circle fs-4" href="#"></a>
                                    @endif

                                    </li>
                                </ul>
                            </nav>
                        </div>
                    @endif

                        <div class="text-light my-3 ms-auto d-flex align-items-center I-js-2-right">
                            <form action="{{ route('deleteAll') }}" method="post" id="hapus-form-semua">
                            @csrf 
                            @method('delete')
                                <button class="btn btn-sm btn-nice-5 rounded-pill px-2 me-2" type="button" onclick="konfirmasiHapusAll()">
                                    <span class="bi bi-trash-fill"><span class=""></span>All</span>
                                </button>
                            </form>
                            <a class="btn btn-sm btn-nice-2 me-2" href="/history">
                                <span class="bi bi-clock-history"><span class=""></span></span>
                            </a>
                            <a class="btn btn-sm btn-nice-4 me-1" href="/items">
                                <span class="bi bi-box-fill"><span class=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row box px-4 py-4">
                        <div class="col-lg-6 features-master-1 text-light">
                            <div class="I-js-3-left">
                                <h5 class="fs-6">Button tips !</h5>
                                <ul class="text-light list-unstyled px-3">
                                    <li><span class="bi bi-wrench fs-6"><span class="ms-2 text-secondary" style="font-size: 14px;">To return a items.</span></span></li>
                                    <li><span class="bi bi-trash fs-6"><span class="ms-2 text-secondary" style="font-size: 14px;">To delete data in the table.</span></span></li>
                                    <li><span class="bi bi-truck fs-6"><span class="ms-2 text-secondary" style="font-size: 14px;">To display the returned data items.</span></span></li>
                                    <li><span class="bi bi-folder-plus fs-6"><span class="ms-2 text-secondary" style="font-size: 14px;">To add items to the table above.</span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 features-master-2 text-light">
                            <div class="I-js-3-right">
                                <h5 class="fs-6">Items tips !</h5>
                                <ul class="text-secondary">
                                    <li>The table above displays your data items.</li>
                                    <li>Add items if the table above is empty.</li>
                                    <li>In the options table there are tho buttons to return items and delete items.</li>
                                    <li>When the item is entered it will ve filled in automatically when after adding the items.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection