@extends('Layout.sidebar', ['title' => 'Detail Report'])
<link rel="stylesheet" href="{{ asset('css/Admin/report.css') }}">
@section('content')

<div class="card">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('report.admin') }}">Report</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $report_detail -> nama }}</li>
        </ol>
    </nav>
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>{{ $report_detail -> nama }}</h1>
        </div>
    </div>
    <div class="card-body">
        <div class="col col-md-6 p-0 mb-4">
            <p class="p2">Project Manager</p>
            <p class="p1">{{ $report_detail -> pm -> nama }}</p>
        </div>
        <div class="col col-md-6 p-0 mb-4">
            <p class="p2">Programmer</p>
        </div>
        @foreach($report_detail -> review as $selvi)
        <div id="accordion">
            <div class="accordion">
                <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-{{ $selvi -> id }}"
                    aria-expanded="false">
                    <h6>{{ $selvi -> employee -> nama }} ({{ $selvi -> employee -> jabatan }} {{ $selvi -> employee -> divisi }})</h6>
                </div>
                <div class="accordion-body collapse" id="panel-body-{{ $selvi -> id }}" data-parent="#accordion">
                    <p class="acc-title">Summary</p>
                    <p class="mb-0">{{ $selvi -> performance_review ?? '-'}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <button class="btn btn-primary mt-4 w-100" data-toggle="modal" data-target="#modal-penilaian">Penilaian</button>
        <button class="btn btn-danger mt-2 w-100" data-toggle="modal" data-target="#modal-kembalikan">Kembalikan</button>
    </div>
</div>
@endsection

<!-- Modal Penilaian -->
<div class="modal fade" id="modal-penilaian" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h4 class="modal-title ml-3 align-self-center">Penilaian (Score Credit)</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form method="POST" action="{{ route('report-credit-update.admin') }}">
                @csrf
                <div class="modal-body">
                    <h5>Project Manager</h5>
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">{{ $report_detail -> pm -> nama }}</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" name="creditPM" placeholder="Input Credit" value="{{ $report_detail->pm->credit }}">
                            <input type="hidden" name="pm_ids" value="{{ $report_detail -> pm -> id }}">
                            <input type="hidden" name="ids_project" value="{{ $report_detail -> id }}">
                        </div>
                    </div>
                    <h5 class="mt-4">Programmer</h5>
                    <div class="row">
                        @foreach($report_detail -> employees as $amalia)
                        <div class="col-md-6 mb-2">
                            <table class="w-75">
                                <tr>
                                    <td><label class="col-form-label">{{ $amalia -> nama }}</label></td>
                                    <td class="w-50">
                                        <input type="hidden" name="row_ids[]" value="{{ $amalia -> id }}">
                                        <input type="number" class="form-control" name="credit[]" placeholder="Input Credit" value="{{ $amalia -> credit }}" required>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<!-- Modal Kembalikan -->
<div class="modal fade" id="modal-kembalikan" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h4 class="modal-title ml-3 align-self-center">Kembalikan Projek Ke Developer</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Projek ini akan dikembalikan ke programmer dengan status "Revision"</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="{{ route('report-revision.admin', ['id' => $report_detail -> id]) }}" role="button">Kirim</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>