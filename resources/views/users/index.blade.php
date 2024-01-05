@extends('layouts.main')

@section('content')

    <section>
        <div class="container">
            <div class="box bg-nice-2 shadow-nice-master rounded-1 my-5">
                <div class="shadow-nice px-4 py-2 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center I-js-1-left">
                        <span class="text-light d-flex align-items-center"><i class="bi bi-person-circle me-2"></i> / Administrator</span>
                    </div>
                    <div class="text-secondary I-js-1-right">
                        <img class="rotate-icon opacity-75" src="img/icon/setting.png" alt="" width="20" height="20">
                        <span>System is Running. . .</span>
                    </div>
                </div>
                <div class="">
                    @if ($users->count() > 0)
                    <div class="px-4 py-3">
                        <table class="table table-sm I-js-1-center">
                            <thead>
                                <tr class="text-light border-secondary">
                                    <th class="fw-light">ID</th>
                                    <th class="fw-light">Username</th>
                                    <th class="fw-light">Email</th>
                                    <th class="fw-light">Address</th>
                                    <th class="fw-light text-center">Phone</th>
                                    <th class="fw-light text-center">Created at</th>
                                    <th class="fw-light text-center">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $kadek)
                                <tr class="text-light border-secondary">
                                @php
                                    $total = $users->currentPage() * $users->perPage();
                                    $number = $total - $users->perPage() + 1 + $key;
                                @endphp
                                    <td class="fw-light">{{ $number  }}</td>
                                    <td class="fw-light">{{ $kadek->name }}</td>
                                    <td class="fw-light">{{ $kadek->email }}</td>
                                    <td class="fw-light">{{ $kadek->address }}</td>
                                    <td class="fw-light text-center">{{ $kadek->phone }}</td>
                                    <td class="fw-light text-center">{{ $kadek->created_at }}</td>
                                    <td class="fw-light text-center">
                                        <form action="/users/{{ $kadek->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-nice-1 btn-small"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </td>
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
                                    <th class="fw-light text-center">Username</th>
                                    <th class="fw-light text-center">Email</th>
                                    <th class="fw-light text-center">Address</th>
                                    <th class="fw-light text-center">Phone</th>
                                    <th class="fw-light text-center">Created at</th>
                                    <th class="fw-light text-center">Options</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <p class="text-white text-center py-3">Nothing.</p>
                    @endif

                    <div class="shadow-nice flex-wrap d-flex justify-content-between align-items-center px-4 pb-2">


                    
                        <!-- <div class="mt-3 I-js-2-left">
                            <ul class="pagination pagination-sm">
                              <li class="page-item"><a class="page-link page-link-hover bi bi-arrow-left-circle fs-4" href="#"></a></li>
                              <li class="page-item"><a class="page-link page-link-hover bi bi-arrow-right-circle fs-4" href="#"></a></li>
                            </ul>
                        </div> -->

                        @if ($users->hasPages())
                        <div class="mt-3 I-js-2-left">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm">

                                    {{-- Previous Page Link --}}
                                    @if ($users->onFirstPage())
                                    <li class="page-item">
                                        <a class="page-link page-link-max bi bi-x-circle fs-4"></a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link page-link-hover bi bi-arrow-left-circle fs-4" href="{{ $users->previousPageUrl() }}"></a>
                                    </li>
                                    @endif

                                    {{-- Next Page Link --}}
                                    @if ($users->hasMorePages())
                                    <li class="page-item">
                                    <a class="page-link page-link-hover bi bi-arrow-right-circle fs-4" href="{{ $users->nextPageUrl() }}"></a>
                                    @else
                                    <li class="page-item">
                                    <a class="page-link page-link-max bi bi-x-circle fs-4" href="#"></a>
                                    @endif

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        @endif



                        <div class="text-light my-3 ms-auto I-js-2-right">
                            <a class="btn btn-sm btn-nice-2 me-2" href="/history">
                                <span class="bi bi-clock-history"><span class=""></span></span>
                            </a>
                            <a class="btn btn-sm btn-nice-4 me-1" href="/stocks">
                                <span class="bi bi-truck"><span class=""></span></span>
                            </a>
                            <a class="btn btn-sm btn-nice-2 me-1" href="/items">
                                <span class="bi bi-box"><span class=""></span></span>
                            </a>
                            <a class="btn btn-sm btn-nice-3 me-1" href="/users/create">
                                <span class="bi bi-person-plus"><span class=""></span></span>
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