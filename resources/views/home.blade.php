@extends('layouts.main')

@section('content')

    <section>
        <div class="container">
            <div class="box bg-nice-2 shadow-nice-master rounded-1 my-5">
                <div class="shadow-nice d-flex flex-wrap justify-content-between align-items-center px-4 py-2">
                    <div class="d-flex flex-wrap align-items-center js-animation-1">
                        @if (auth()->check())
                            <div>
                                <span class="text-light d-flex align-items-center"><i class="bi bi-award me-1"></i>Awesome features / &nbsp;</span>
                            </div>
                            <div>
                                <span class="text-red">Login as</span>
                                <span class="text-light">&nbsp; : &nbsp; {{ auth()->user()->email }}</span>
                            </div>
                        @else
                            <span class="text-light d-flex align-items-center"><i class="bi bi-award me-1"></i>Awesome features</span>
                        @endif
                    </div>
                    <div class="text-secondary js-animation-2">
                        <img class="rotate-icon opacity-75" src="img/icon/setting.png" alt="" width="20" height="20">
                        <span>System is Running. . .</span>
                    </div>
                </div>
                <div class="">
                    <div class="text-light text-center px-4 py-4 pb-3">
                        <div class="container col-lg-12 py-2 js-animation-3">
                        
                            @if (auth()->check())
                                <h5 class="text-title">Welcome !</h5>
                                <h1 class="display-2 fw-semibold text-title">{{ auth()->user()->name }}</h1>
                            @else
                                <h5 class="display-2 text-title">Welcome !</h5>
                            @endif
                            <div class="container-fluid col-lg-9">
                                <p class="text-title-2">We are here to accompany you in the process of managing items quickly and efficiently, good luck and be able to get a mate as you wish.</p>
                                <ul class="list-unstyled d-flex justify-content-center align-items-center">
                                    <li class="mx-2 icon-master-1"><img src="img/icon/html.png" width="25" height="25" alt=""></li>
                                    <li class="mx-2 icon-master-2"><img src="img/icon/php.png" width="25" height="25" alt=""></li>
                                    <li class="mx-2 icon-master-3"><img src="img/icon/laravel.png" width="30" height="30" alt=""></li>
                                    <li class="mx-2 icon-master-4"><img src="img/icon/logo_white.png" width="30" height="30" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-nice">
                        <div class="row box px-4 py-4">
                            <div class="col-lg-4 features-master-1 text-light">
                                <div class="js-animation-4">
                                    <h5 class="fs-6">Manage the best items</h5>
                                    <ul class="text-secondary">
                                        <li>Manage items easily and quickly.</li>
                                        <li>The latest features with advanced security.</li>
                                        <li>Safe from the attacks of the titans.</li>
                                        <li>Easy to use in various life.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 features-master-2 text-light">
                                <div class="js-animation-5">
                                    <h5 class="fs-6">Trust in our system</h5>
                                    <ul class="text-secondary">
                                        <li>Safe from the attacks of the titans.</li>
                                        <li>Easy to use in various life.</li>
                                        <li>Manage items easily and quickly.</li>
                                        <li>The latest features with advanced security.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 features-master-3 text-light">
                                <div class="js-animation-6">
                                    <h5 class="fs-6">Fast work without a hitch</h5>
                                    <ul class="text-secondary">
                                        <li>The latest features with advanced security.</li>
                                        <li>Manage items easily and quickly.</li>
                                        <li>Easy to use in various life.</li>
                                        <li>Safe from the attacks of the titans.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="box shadow-nice text-light d-flex flex-wrap justify-content-between align-items-center px-4 py-2">
                            <div class="d-flex align-items-center title-master-2 js-animation-7">
                                <img class="me-2" src="img/icon/logo_white.png" alt="" width="25" height="25">
                                <span>Lanang Cylare Design.</span>
                            </div>
                            <div class="js-animation-8 title-master-3 flex-wrap d-flex align-items-center">
                                <div class="me-2">
                                    <span class="me-2">Shortcut to manage items</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <a class="btn btn-sm btn-nice" href="/items">
                                            <span class="bi bi-box"><span class="ms-1">Manage items</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection