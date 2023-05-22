@extends('Layout.sidebar', ['title' => 'Employee'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
    <div class="card-body">
        <a href="#" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right"><i class="fas fa-plus"></i>Tambah
            Karyawan</a>
        <div style="overflow: hidden; position: relative;">
            <img alt="image" src="{{ asset('img/Admin/amico.jpg') }}" class="img-fluid mx-auto d-block">
        </div>
        <p class="m-0 mt-4 text-center" id="p1">Belum ada Karyawan</p>
        <p class="m-0 text-center" id="p2">Untuk membuat permohonan bebas lab, tekan tombol “Tambah Karyawan” di pojok
            kanan
            atas.</p>
    </div>
</div>
@endsection