@extends('Layout.sidebar', ['title' => 'Employee/New Employee'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>New Employees</h1>
            <br>
            <small>Karyawan Baru NPE Digital</small>
        </div>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Karyawan</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="inputDivisi">Divisi</label>
                <select id="inputDivisi" class="form-control">
                    <option selected="">Pilih Divisi</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Karyawan@email.com">
            </div>
            <div class="form-group col-md-6">
                <label for="inputJabatan">Jabatan</label>
                <select id="inputJabatan" class="form-control">
                    <option selected="">Pilih Jabatan</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">No Handphone</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="+62 816-280-445">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Password</label>
                <input type="text" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="row float-right">
            <a href="{{ route('project.admin') }}" class="btn btn-outline-danger mr-3">Batal</a>
            <a href="" class="btn btn-primary mr-3">Konfirmasi</a>
        </div>
    </div>

</div>
@endsection