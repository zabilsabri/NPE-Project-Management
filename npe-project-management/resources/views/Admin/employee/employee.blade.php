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
        <a href="{{ route('employee-create.admin') }}" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right"><i class="fas fa-plus"></i>Buat
            Projek</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
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
                    <tr class="project-row" data-id="">
                        <th></th>
                        <td>{{ $employee->nama }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->nomorTelpon }}</td>
                        <td>{{ $employee->divisi }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->credit }}</td>
                        <td class="text-center">
                            <!-- pensil -->
                            <a href=""><img src="{{ asset('img/Admin/pensil.png') }}" alt="pensil"></a>
                            <a href=""><img class="px-2" src="{{ asset('img/Admin/mata.png') }}" alt="pensil"></a>
                            <a href=""><img src="{{ asset('img/Admin/zabil.png') }}" alt="pensil"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

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
