@extends('layout.mainadmin')
@section('title', 'BACARAB | Dashboard Admin')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-center row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h3 class="card-title text-primary mx-5">Hallo {{ Auth::user()->name }}! </h3>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="{{ asset('assets/img/admin/icon-admin.png') }}" height="120"
                                        alt="Admin" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('assets/img/admin/icon_kamus.png') }}" alt="Kamus">
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Kamus</span>
                                    <h3 class="card-title mb-2">{{ $kamusCount }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('assets/img/admin/icon-user.png') }}" alt="Printable" />
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Users</span>
                                    <h3 class="card-title text-nowrap mb-1">{{ $userCount }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">


                <div class="col-md-6 col-lg-8 col-xl-8 order-0 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2 mb-2">User List</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0 mt-5" >
                                @forelse ($user as $user)
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">{{ $user->name }}</h6>
                                            </div>
                                            <div class="user-progress">
                                                <small class="fw-semibold">{{ $user->email }}</small>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('assets/img/admin/icon_game.png') }}" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                    </div>
                                    <span class="d-block mb-1">Games</span>
                                    <h3 class="card-title text-nowrap mb-2">3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('assets/img/admin/icon_printable.png') }}"
                                                alt="Printable" />
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Printable</span>
                                    <h3 class="card-title text-nowrap mb-1">{{ $printableCount }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection