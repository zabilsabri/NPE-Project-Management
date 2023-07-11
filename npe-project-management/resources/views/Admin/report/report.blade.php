@extends('Layout.sidebar', ['title' => 'Report'])
<link rel="stylesheet" href="{{ asset('css/Admin/report.css') }}">

<style>
    a{
        text-decoration: none !important;
    }
</style>

@section('content')

<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>Reports</h1>
            <br>
            <small>Laporan projek yang telah selesai</small>
        </div>
    </div>
    <div class="card-body">
        <div class="col" id="col-report">
            <h4 class="mb-3">On Time <span id="span-ontime">2</span></h4>
            <a href="{{ route('report-detail.admin') }}">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="m-0 d-flex flex-row d-flex align-items-center">
                        <h4>Sistem Informasi Farmasi</h4>
                        <span class="text-success"><i class="fas fa-clock"></i> On-Time</span>
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="m-0 d-flex flex-row">
                        <p class="mr-4"><i class="fas fa-building"></i> Farmasi Unhas</p>
                        <p class="mr-4"><i class="fas fa-user"></i> Aflah Alifu</p>
                        <p class="mr-4"><i class="fas fa-database"></i> Website</p>
                        <p class="mr-4"><i class="fas fa-calendar-week"></i> 28 April 2023</p>
                    </div>
                </div>
            </div>
            </a>
            <div class="card">
                <div class="card-header pb-0">
                    <div class="m-0 d-flex flex-row d-flex align-items-center">
                        <h4>Sistem Informasi Farmasi</h4>
                        <span class="text-success"><i class="fas fa-clock"></i> On-Time</span>
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="m-0 d-flex flex-row">
                        <p class="mr-4"><i class="fas fa-building"></i> Farmasi Unhas</p>
                        <p class="mr-4"><i class="fas fa-user"></i> Aflah Alifu</p>
                        <p class="mr-4"><i class="fas fa-database"></i> Website</p>
                        <p class="mr-4"><i class="fas fa-calendar-week"></i> 28 April 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" id="col-report">
            <h4 class="mb-3">Late <span id="span-late">2</span></h4>
            <div class="card">
                <div class="card-header pb-0">
                    <div class="m-0 d-flex flex-row d-flex align-items-center">
                        <h4>Sistem Informasi Farmasi</h4>
                        <span class="text-danger"><i class="fas fa-clock"></i> Late</span>
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="m-0 d-flex flex-row">
                        <p class="mr-4"><i class="fas fa-building"></i> Farmasi Unhas</p>
                        <p class="mr-4"><i class="fas fa-user"></i> Aflah Alifu</p>
                        <p class="mr-4"><i class="fas fa-database"></i> Website</p>
                        <p class="mr-4"><i class="fas fa-calendar-week"></i> 28 April 2023</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header pb-0">
                    <div class="m-0 d-flex flex-row d-flex align-items-center">
                        <h4>Sistem Informasi Farmasi</h4>
                        <span class="text-danger"><i class="fas fa-clock"></i> Late</span>
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="m-0 d-flex flex-row">
                        <p class="mr-4"><i class="fas fa-building"></i> Farmasi Unhas</p>
                        <p class="mr-4"><i class="fas fa-user"></i> Aflah Alifu</p>
                        <p class="mr-4"><i class="fas fa-database"></i> Website</p>
                        <p class="mr-4"><i class="fas fa-calendar-week"></i> 28 April 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection