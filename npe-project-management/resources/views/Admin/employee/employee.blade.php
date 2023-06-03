@extends('Layout.sidebar', ['title' => 'Employees'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">

@section('content')

<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1>Employees</h1>
            <br>
            <small>Data Manejemen Projek NPE Digital</small>
        </div>
        <a href="{{ route('employee-create.admin') }}" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right"><i class="fas fa-plus"></i>Tambah
            Karyawan</a>
    </div>
    <div class="alert-container">
    @if($msg = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
        {{ $msg }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    </div>
    <div class="table-responsive p-3">
        <table class="table display nowrap" style="width:100%" id="tableProject">
            <thead>
                <tr>
                    <th style="width: 10px" scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Skor Kredit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr class="project-row" data-id="" id="row-{{ $employee->id }}">
                    <th></th>
                    <td>{{ $employee->nama }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->nomorTelpon }}</td>
                    <td>{{ $employee->divisi }}</td>
                    <td>{{ $employee->jabatan }}</td>
                    <td>{{ $employee->credit }}</td>
                    <td class="text-center">
                        <!-- pensil -->
                        <a href="{{ route('employee-edit.admin', ['id' => $employee->id]) }}"><img src="{{ asset('img/Admin/pensil.png') }}" alt="pensil"></a>
                        <a href="#"><img src="{{ asset('img/Admin/zabil.png') }}" class="btn-delete" alt="pensil" data-toggle="modal" data-target="#modal-hapus" data-id="{{ $employee->id }}"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
<div class="modal fade" id="modal-hapus" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <span class="col align-self-center"><img src="{{ asset('img/Admin/icon.svg')}}" alt=""></span>
                    <h4 class="modal-title ml-3 align-self-center">Hapus Data Karwayan</h4>
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
                <button type="button" class="btn btn-primary" id="btn-hapus">Hapus</button>
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


        let delete_id;
        $(document).on('click', '.btn-delete', function() {
            delete_id = $(this).data('id');
            console.log(delete_id);
        });


        $('#btn-hapus').on('click', function() {
            $.ajax({
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: "delete"
                },
                url: "/admin/employee/delete/" + delete_id,
                success: function(response) {
                    t.row($('#row-' + delete_id)).remove().draw();
                    $('#modal-hapus').modal('hide');
                    var alert_html = '<div class="alert alert-success alert-dismissible fade show m-3" role="alert">' +
                        'Data berhasil dihapus' + 
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' + 
                        '</button>'
                        '</div>';
                    $('.alert-container').html(alert_html);
                },
            });

        });
    });
</script>
@endsection
