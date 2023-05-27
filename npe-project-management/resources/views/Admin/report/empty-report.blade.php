@extends('Layout.sidebar', ['title' => 'Report'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
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
        <div style="overflow: hidden; position: relative;">
            <img alt="image" src="{{ asset('img/Admin/amico.jpg') }}" class="img-fluid mx-auto d-block">
        </div>
        <p class="m-0 mt-4 text-center" id="p1">Belum ada Laporan</p>

    </div>
</div>
@endsection