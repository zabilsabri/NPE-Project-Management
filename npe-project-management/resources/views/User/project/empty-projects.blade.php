@extends('Layout.sidebar', ['title' => 'Project'])
<link rel="stylesheet" href="{{ asset('css/User/project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">

@section('content')
<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title-container d-flex align-items-center">
            <span id="header-line"></span>
            <h1 class="ml-5">My Project</h1>
        </div>    
        <a href="{{ route('user.projects.finished') }}" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right">
            <i class="fas fa-eye"></i>
            <span>Finished Project</span>
        </a>
    </div>
    <div class="card-body">
        <div style="overflow: hidden; position: relative;">
            <img alt="image" src="{{ asset('img/Admin/amico.jpg') }}" class="img-fluid mx-auto d-block">
        </div>
        <p class="m-0 mt-4 text-center" id="p1">Belum ada Laporan</p>
    </div>
</div>
@endsection


@section('script')
@endsection
