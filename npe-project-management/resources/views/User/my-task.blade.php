@extends('Layout.sidebar', ['title' => 'My Task'])
<link rel="stylesheet" href="{{ asset('css/User/my-task-finished-project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header">
        <span id="header-line"></span>
        <div class="title d-flex flex-column ml-5">
            <h1>My Task</h1>
        </div>
    </div>
    <div class="card-body ml-5">
        <div class="table-responsive" style="width:95% !important;">
            <table class="table display nowrap" id="tableMyTaskUser">
                <thead>
                    <tr>
                        <th scope="col">Nama Task</th>
                        <th scope="col">Proyek</th>
                        <th scope="col">Milestone</th>
                        <th scope="col">Tenggat waktu task</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Task Name</td>
                        <td>Project Name</td>
                        <td>Milestone Name</td>
                        <td>12 Juni 2023</td>
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
