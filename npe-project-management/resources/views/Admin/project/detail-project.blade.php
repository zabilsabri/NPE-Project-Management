@extends('Layout.sidebar', ['title' => 'Project/Detail Project'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
  <div class="card-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Project</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sistem Informasi Farmasi</li>
      </ol>
    </nav>
    <p class="h4">Sistem Informasi Farmasi
      <span class="status-op" id="statusProject"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <circle cx="6" cy="6" r="6" fill="#0061C7" />
        </svg> On Progress</span>
    </p>
    <p class="mt-5" id="detail-project">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum.</p>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Klien</p>
      <p class="p1">Farmasi Unhas</p>
    </div>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Tipe</p>
      <p class="p1">Website & Mobile</p>
    </div>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Deadline</p>
      <p class="p1">28 April 2023</p>
    </div>
    <p class="h4 mt-5 mb-5">Team</p>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Project Manager</p>
      <div class="row m-0">
        <p class="p1 mr-3">Aflah Alifu</p>
        <span><i class="fas fa-medal text-warning"></i> 999</span>
      </div>
    </div>
    <div class="col p-0 mb-4">
      <p class="p2 mb-2">Programmer</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="row">
            <p class="p1 mr-3">Zabil Sabri <span class="p2">(Frontend Web)</span></p>
            <span><i class="fas fa-medal text-warning"></i> 1</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <p class="p1 mr-3">Muhammad Mukram Mustamin <span class="p2">(UI/UX)</span></p>
            <span><i class="fas fa-medal text-warning"></i> 967</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <p class="p1 mr-3">Muhammad Erwin Arif <span class="p2">(Backend Web)</span></p>
            <span><i class="fas fa-medal text-warning"></i> 998</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <p class="p1 mr-3">Muhammad Salim Maulana <span class="p2">(UI/UX)</span></p>
            <span><i class="fas fa-medal text-warning"></i> 950</span>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <p class="p1 mr-3">Arjuna Ribal <span class="p2">(Mobile - Kotlin)</span></p>
            <span><i class="fas fa-medal text-warning"></i> 952</span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection