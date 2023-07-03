@extends('Layout.sidebar', ['title' => 'Make Report'])
<link rel="stylesheet" href="{{ asset('css/User/report-project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header d-flex justify-content-between">
        <div class="d-flex flex-column header-title">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item mb-0"><a href="#">Project Name</a></p>
                <p class="breadcrumb-item active mb-0">Make Report</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">Make Report</h1>

                    <div class="milestone-description mt-3">
                        Laporan kinerja setiap Programmer
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        <!-- Programmer List Section for User -->
        <div class="programmer-list-section p-4">
            <form action="">
                <table class="table-list">
                    <thead>
                        <tr>
                            <th scope="col" class="p-3">
                                <h4>Programmer List</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <div class="programmer-section d-flex justify-content-between mx-4 my-3 align-items-center">
                                    <div class="programmer-description">
                                        <h5>Albert Almanisi</h5>
                                        <h6>Junior Developer</h6>
                                        <h6>UI/UX</h6>
                                    </div>
                                    <div class="summary-section">
                                        <div class="form-group">
                                            <textarea class="form-control" id="milestoneDetail" rows="3" placeholder="Summary"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="programmer-section d-flex justify-content-between mx-4 my-3 align-items-center">
                                    <div class="programmer-description">
                                        <h5>Albert Almanisi</h5>
                                        <h6>Junior Developer</h6>
                                        <h6>UI/UX</h6>
                                    </div>
                                    <div class="summary-section">
                                        <div class="form-group">
                                            <textarea class="form-control" id="milestoneDetail" rows="3" placeholder="Summary"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="programmer-section d-flex justify-content-between mx-4 my-3 align-items-center">
                                    <div class="programmer-description">
                                        <h5>Albert Almanisi</h5>
                                        <h6>Junior Developer</h6>
                                        <h6>UI/UX</h6>
                                    </div>
                                    <div class="summary-section">
                                        <div class="form-group">
                                            <textarea class="form-control" id="milestoneDetail" rows="3" placeholder="Summary"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="px-4 text-danger mt-4" style="font-style: italic;">
                    *note : Harap perhatikan baik-baik setiap summary yang diberikan. Setelah submit, summary yang diberikan akan langsung dikirimkan ke admin sebagai penilaian dan tidak dapat diedit kembali. 
                </p>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mt-4 px-3 py-2" type="button" data-toggle="modal" data-target="#modal-confirm">
                        <h6 class="mb-0">Submit</h6>
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection

<div class="modal fade" id="modal-confirm" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h4 class="modal-title ml-4 mb-2 align-self-center">Finish Project</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Silahkan tulis pesan “Project Finished” untuk mengonfirmasi penyelesaian proyek.</p>
                <div class="form-group mx-5">
                        <input type="text" class="form-control text-center" placeholder="Confirm Message" id="inputConfirmMessage">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-hapus">Konfirmasi</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

@section('script')
@endsection