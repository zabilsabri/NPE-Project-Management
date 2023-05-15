@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/Admin/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>Home | Dashboard</h1>
        </div>
    </div>
    <div class="card-body">
        <p class="table-title">Projek</p>
        <div class="table-responsive">
            <table class="table display nowrap" style="width:100%" id="tableHomeProject">
            <thead>
                <tr>
                    <th style="width: 10px" scope="col">No.</th>
                    <th scope="col">Nama Projek</th>
                    <th scope="col">Klien</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Manajer Projek</th>
                    <th scope="col">Tenggat Waktu</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <p class="status-op m-0" ><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="6" cy="6" r="6" fill="#0061C7"/>
                        </svg> On Progress</p>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <p class="status-op m-0" ><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="6" cy="6" r="6" fill="#0061C7"/>
                        </svg> On Progress</p>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <p class="status-op m-0" ><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="6" cy="6" r="6" fill="#0061C7"/>
                        </svg> On Progress</p>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <p class="status-op m-0" ><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="6" cy="6" r="6" fill="#0061C7"/>
                        </svg> On Progress</p>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <a href="{{ route('project.admin') }}"> Selengkapnya >> </a>
        
        <p class="table-title mt-5">Karyawan</p>
        <div class="table-responsive">
            <table class="table display nowrap" style="width:100%" id="tableHomeEmployee">
            <thead>
                <tr>
                    <th style="width: 10px" scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Skor Kredit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>900</td>
                </tr>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>900</td>
                </tr>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>900</td>
                </tr>
                <tr>
                    <th style="text-align: center" scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>900</td>
                </tr>
            </tbody>
            </table>
        </div>
        <a href="#"> Selengkapnya >> </a>

    </div>
</div>
@endsection