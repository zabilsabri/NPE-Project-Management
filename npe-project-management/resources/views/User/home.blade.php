@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header">
        <span id="header-line"></span>
        <div class="title d-flex flex-column ml-5">
            <h1>Home</h1>
            <div class="welcome-section">
                <h6>Welcome, <span>{{ Auth::user()->nama }}</span></h6>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        <div class="table-responsive">
            <table class="table display nowrap" style="width:100%" id="tableUserHomeProject">
                <thead>
                    <tr>
                        <th scope="col">Nama Projek</th>
                        <th scope="col">Klien</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Manajer Projek</th>
                        <th scope="col">Tenggat Waktu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{ $project -> nama }}</td>
                        <td>{{ $project -> klien }}</td>
                        <td>{{ $project -> tipe }}</td>
                        <td>{{ $project -> checkPM() }}</td>
                        <td>{{ $project -> deadline }}</td>
                        <td>
                            <p class="status-op m-0">
                                <a href="{{ route('user.projects.detail', ['id' => $project -> id]) }}">
                                    <img src="{{ asset('img/Admin/mata.png') }}" alt="mata">
                                </a>
                            </p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="ml-5 mt-2">
            <a href="#"> Selengkapnya >> </a>
        </div>
    </div>

    <div class="card-body ml-5">
        <div class="table-responsive">
            <table class="table display nowrap" style="width:100%" id="tableUserHomeTask">
                <thead>
                    <tr>
                        <th scope="col">Nama Task</th>
                        <th scope="col">Project</th>
                        <th scope="col">Milestone</th>
                        <th scope="col">Tenggat Waktu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task -> nama }}</td>
                        <td>{{ $task -> milestone -> project -> nama }}</td>
                        <td>{{ $task -> milestone -> nama }}</td>
                        <td>{{ $task -> milestone -> deadline }}</td>
                        <td>
                            <p class="status-op m-0">
                                <a href="#">
                                    <img src="{{ asset('img/Admin/mata.png') }}" alt="mata">
                                </a>
                            </p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
        </div>
        <div class="ml-5 mt-2">
            <a href="#"> Selengkapnya >> </a>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
