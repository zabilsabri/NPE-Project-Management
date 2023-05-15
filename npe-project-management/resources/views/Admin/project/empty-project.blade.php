@extends('Layout.sidebar', ['title' => 'Project'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
    <div class="card-body">
        <a href="#" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right"><i class="fas fa-plus"></i>Buat Projek</a>
        <div style="overflow: hidden; position: relative;">
            <img alt="image" src="{{ asset('img/Admin/amico.jpg') }}" class="img-fluid mx-auto d-block">
        </div>
        <p class="m-0 mt-4 text-center" id="p1">Belum ada Projek</p>
        <p class="m-0 text-center" id="p2">Untuk membuat permohonan bebas lab, tekan tombol “Buat Projek” di pojok kanan atas.</p>
    </div>
</div>
@endsection