@extends('Layout.sidebar', ['title' => 'Detail Report'])
<link rel="stylesheet" href="{{ asset('css/Admin/report.css') }}">
@section('content')

<div class="card">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Report</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sistem Informasi Farmasi</li>
        </ol>
    </nav>
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>Sistem Informasi Farmasi</h1>
        </div>
    </div>
    <div class="card-body">
        <div class="col col-md-6 p-0 mb-4">
            <p class="p2">Project Manager</p>
            <p class="p1">Aflah Alifu Na</p>
        </div>
        <div class="col col-md-6 p-0 mb-4">
            <p class="p2">Programmer</p>
        </div>
        <div id="accordion">
            <div class="accordion">
                <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-1"
                    aria-expanded="false">
                    <h4>Salim Maulana (UI/UX)</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                    <p class="acc-title">Summary</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-2"
                    aria-expanded="false">
                    <h4>Chindy Febryan (Frontend Web)</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion" style="">
                    <p class="acc-title">Summary</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                    <h4>Erwin Arif (Backend)</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                    <p class="acc-title">Summary</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4">
                    <h4>Mukram Mustamin (Frontend Web)</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                    <p class="acc-title">Summary</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-4 w-100" data-toggle="modal" data-target="#modal-hapus">Penilaian</button>
    </div>
</div>
@endsection

<div class="modal fade" id="modal-hapus" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h4 class="modal-title ml-3 align-self-center">Penilaian (Score Credit)</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Project Manager</h5>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">Aflah Alifu</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" class="form-control" placeholder="Input Credit">
                    </div>
                </div>
                <h5 class="mt-4">Programmer</h5>
                <div class="row">
                    <div class="col-6">
                        <div class="row g-3 align-items-center mb-1">
                            <div class="col-auto">
                                <label class="col-form-label">Aflah Alifu</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" placeholder="Input Credit">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-1">
                            <div class="col-auto">
                                <label class="col-form-label">Aflah Alifu</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" placeholder="Input Credit">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-1">
                            <div class="col-auto">
                                <label class="col-form-label">Aflah Alifu</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" placeholder="Input Credit">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row g-3 align-items-center mb-1">
                            <div class="col-auto">
                                <label class="col-form-label">Aflah Alifu</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" placeholder="Input Credit">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-1">
                            <div class="col-auto">
                                <label class="col-form-label">Aflah Alifu</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" placeholder="Input Credit">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-1">
                            <div class="col-auto">
                                <label class="col-form-label">Aflah Alifu</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" placeholder="Input Credit">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btn-tambah">Konfirmasi</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>