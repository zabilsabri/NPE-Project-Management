@extends('Layout.sidebar', ['title' => 'Profile'])
<link
    rel="stylesheet"
    href="{{ asset('css/Common/profile.css') }}"
>

@section('content')
    <div class="card">
        <section class="section-header mb-0">
            <div class="d-flex">
                <i
                    class="fas fa-user my-auto me-4 ms-2 fs-3"
                    style="color: #0061c7"
                ></i>
                <h1>My Profile</h1>
            </div>
        </section>

        <section class="card-body">
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Nama
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->nama }}
                </span>
            </div>
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Email
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->email }}
                </span>
            </div>
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Nomor Telepon
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->nomorTelpon }}
                </span>
            </div>
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Divisi
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->divisi }}
                </span>
            </div>
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Jabatan
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->jabatan }}
                </span>
            </div>
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Total Kredit
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->credit }}
                </span>
            </div>
            <div class="d-flex">
                <div class="fw-bold fs-4 my-auto">
                    Tipe Akun
                </div>
                <span class="mx-5 fs-6 my-auto">
                    {{ $profile->isAdmin ? 'Admin' : 'Pengguna Reguler' }}
                </span>
            </div>
        </section>
    </div>
@endsection

@section('script')
@endsection
