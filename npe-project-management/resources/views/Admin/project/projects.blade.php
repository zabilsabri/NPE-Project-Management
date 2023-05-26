@extends('Layout.sidebar', ['title' => 'Project'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">

@section('content')

<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>Project</h1>
            <br>
            <small>Data Manejemen Projek NPE Digital</small>
        </div>
        <a href="{{ route('project-create.admin') }}"
            class="btn btn-lg btn-outline-dark btn-icon icon-left float-right"><i class="fas fa-plus"></i>Buat
            Projek</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table display nowrap" style="width:100%" id="tableProject">
                <thead>
                    <tr>
                        <th style="width: 10px" scope="col">No.</th>
                        <th scope="col">Nama Projek</th>
                        <th scope="col">Klien</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Manajer Projek</th>
                        <th scope="col">Tenggat Waktu</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr class="project-row" data-id="{{ $project->id }}">
                        <th></th>
                        <td>{{ $project->nama }}</td>
                        <td>{{ $project->klien }}</td>
                        <td>{{ $project->tipe }}</td>
                        <td>{!! $project->pm->nama ?? '<b>No PM yet</b>' !!}</td>
                        <td>{{ $project->deadline }}</td>
                        @if ($project->status == 0)
                        <td>
                            <p class="status-op m-0"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="6" fill="#0061C7" />
                                </svg>
                                In Progress
                            </p>
                        </td>
                        @else
                        <td>
                            <p class="status-f m-0">
                                <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.708 1.29196C15.8011 1.38485 15.875 1.4952 15.9254 1.61669C15.9758 1.73818 16.0018 1.86842 16.0018 1.99996C16.0018 2.13149 15.9758 2.26173 15.9254 2.38322C15.875 2.50471 15.8011 2.61507 15.708 2.70796L6.70798 11.708C6.61509 11.8011 6.50474 11.875 6.38325 11.9254C6.26176 11.9758 6.13152 12.0017 5.99998 12.0017C5.86845 12.0017 5.7382 11.9758 5.61671 11.9254C5.49522 11.875 5.38487 11.8011 5.29198 11.708L1.29198 7.70796C1.10421 7.52018 0.998718 7.26551 0.998718 6.99996C0.998718 6.73441 1.10421 6.47973 1.29198 6.29196C1.47975 6.10418 1.73443 5.99869 1.99998 5.99869C2.26553 5.99869 2.52021 6.10418 2.70798 6.29196L5.99998 9.58596L14.292 1.29196C14.3849 1.19883 14.4952 1.12494 14.6167 1.07453C14.7382 1.02412 14.8684 0.998169 15 0.998169C15.1315 0.998169 15.2618 1.02412 15.3832 1.07453C15.5047 1.12494 15.6151 1.19883 15.708 1.29196Z"
                                        fill="#1E9E52" />
                                </svg>
                                Completed
                            </p>
                        </td>
                        @endif
                        <td class="text-center">
                            <!-- pensil -->
                            <a href="{{ route('project-edit.admin', ['id' => $project->id]) }}"><img
                                    src="{{ asset('img/Admin/pensil.png') }}" alt="pensil"></a>
                            <a href="{{ route('project.detail', ['id' => $project->id]) }}"><img class="px-2"
                                    src="{{ asset('img/Admin/mata.png') }}" alt="pensil"></a>
                            <a href="#"><img src="{{ asset('img/Admin/zabil.png') }}" alt="pensil" data-toggle="modal"
                                    data-target="#modal-hapus"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<div class="modal fade" id="modal-hapus" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <span class="col align-self-center"><img src="{{ asset('img/Admin/icon.svg')}}" alt=""></span>
                    <h4 class="modal-title ml-3 align-self-center">Hapus Data Projek</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data yang sudah dihapus tidak bisa dikembalikan</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-tambah">Hapus</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

@section('script')
<script>
    $(document).ready(function() {
        var t = $('#tableProject').DataTable({
            retrieve: true,
            columnDefs: [{
                searchable: false,
                orderable: false,
                targets: 0,
            }, ],
            order: [
                [1, 'asc']
            ],
        });

        t.on('order.dt search.dt', function() {
            let i = 1;

            t.cells(null, 0, {
                search: 'applied',
                order: 'applied'
            }).every(function(cell) {
                this.data(i++);
            });
        }).draw();
    });
</script>
@endsection
