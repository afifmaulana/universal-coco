@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
    <h4 class="card-title">Dashboard</h4>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 border rounded">
                                    <div class="icon-big text-center">
                                        <img src="{{ asset('assets-admin/img/people.png') }}" height="100" width="100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="text-bold text-muted">Pengunjung</p>
                                        <p class="text-bold text-muted">Hari Ini</p>
                                        <h2 class="card-title"><span class="text-primary text-bold">{{ $today }}</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 border rounded">
                                    <div class="icon-big text-center">
                                        <img src="{{ asset('assets-admin/img/month.png') }}" height="100" width="100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="text-bold text-muted">Pengunjung</p>
                                        <p class="text-bold text-muted">Bulan Ini</p>
                                        <h2 class="card-title"><span
                                                class="text-primary text-bold">{{ $current_month }}</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 border rounded">
                                    <div class="icon-big text-center">
                                        <img src="{{ asset('assets-admin/img/total.png') }}" height="100" width="100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="text-bold text-muted">Pengunjung</p>
                                        <p class="text-bold text-muted">Total semua</p>
                                        <h2 class="card-title"><span class="text-primary text-bold">{{ $total }}</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
