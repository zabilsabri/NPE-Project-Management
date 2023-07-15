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
            @foreach($reports as $report)
            <a href="{{ route('report-detail.admin', [$report -> id]) }}">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="m-0 d-flex flex-row d-flex align-items-center">
                        <h4>{{ $report -> nama }}</h4>
                        @if($report -> checkStatus() == 1)
                        <span class="text-success"><i class="fas fa-clock"></i> On-Time</span>
                        @elseif($report -> checkstatus() == 0)
                        <span class="text-danger"><i class="fas fa-clock"></i> Late</span>
                        @endif
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="m-0 d-flex flex-row">
                        <p class="mr-4"><i class="fas fa-building me-1"></i>{{ $report -> klien }}</p>
                        <p class="mr-4"><i class="fas fa-user me-1"></i>{{ $report -> pm -> nama }}</p>
                        <p class="mr-4"><i class="fas fa-database me-1"></i>{{ $report -> tipe }}</p>
                        <p class="mr-4"><i class="fas fa-calendar-week me-1"></i>{{ $report -> tgl_selesai }}</p>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection