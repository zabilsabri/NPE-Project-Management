@extends('Layout.sidebar', ['title' => 'Finished Project'])
<link rel="stylesheet" href="{{ asset('css/User/my-task-finished-project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header">
        <span id="header-line"></span>
        <div class="title d-flex flex-column ml-5">
            <h1>Finished Project</h1>
        </div>
    </div>
    <div class="card-body ml-5">
        <div class="table-responsive" style="width:95% !important;">
            <table class="table display nowrap" id="tableFinishedProjectUser">
                <thead>
                    <tr>
                        <th scope="col">Nama Proyek</th>
                        <th scope="col">Klien</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Manajer Proyek</th>
                        <th scope="col">Tenggat Waktu</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Name</td>
                        <td>Client Name</td>
                        <td>Project Type</td>
                        <td>PM Name</td>
                        <td>Deadline</td>
                        <td>
                            <div class="finished-status-section d-flex align-items-center px-3 py-2">
                                <i class="fas fa-check"></i>
                                <h6 class="mb-0 ml-2">Finished</h6>
                            </div>
                        </td>
                        <td>
                            <p class="status-op m-0">
                                <a href="{{ route('user.projects') }}">
                                    <img src="{{ asset('img/Admin/mata.png') }}" alt="mata">
                                </a>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Name</td>
                        <td>Client Name</td>
                        <td>Project Type</td>
                        <td>PM Name</td>
                        <td>Deadline</td>
                        <td>
                            <div class="pending-status-section d-flex align-items-center px-3 py-2">
                                <i class="far fa-clock"></i>
                                <h6 class="mb-0 ml-2">Pending</h6>
                            </div>
                        </td>
                        <td>
                            <p class="status-op m-0">
                                <a href="{{ route('user.projects') }}">
                                    <img src="{{ asset('img/Admin/mata.png') }}" alt="mata">
                                </a>
                            </p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection