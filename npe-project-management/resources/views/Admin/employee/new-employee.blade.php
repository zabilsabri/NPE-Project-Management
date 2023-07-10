@extends('Layout.sidebar', ['title' => 'Employee/New Employee'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title">
            <h1 id="page-title">New Employees</h1>
            <br>
            <small id="page-desc">Karyawan Baru NPE Digital</small>
        </div>
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form method="post" action="{{ route('employee-store.admin') }}" id="employee-form">
            @csrf
            <div class="form-row">
                <input name="id" type="text" class="form-control d-none" id="inputId">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama Karyawan</label>
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDivisi">Divisi</label>
                    <select id="inputDivisi" class="form-control" name="divisi" aria-placeholder="">
                        <option selected="">Pilih Divisi</option>
                        <option value="0">Web</option>
                        <option value="1">Mobile</option>
                        <option value="2">UI/UX</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Karyawan@email.com">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputJabatan">Jabatan</label>
                    <select name="jabatan" id="inputJabatan" class="form-control" aria-placeholder="">
                        <option selected="">Pilih Jabatan</option>
                        <option value="0">Senior</option>
                        <option value="1">Junior</option>
                        <option value="2">Trainee</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">No Handphone</label>
                    <input name="nomorTelpon" type="text" class="form-control" id="inputTelp" placeholder="+62 816-280-445">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                    <small class="text-danger">* Silahkan Kosongkan Jika Anda Tidak Ingin Mengubah Password!</small>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('employee.admin') }}" class="btn btn-outline-danger">Batal</a>
                <button class="btn btn-primary" type="submit">Konfirmasi</button>
            </div>
        </form>
    </div>

</div>
@endsection

@section('script')
<script>
    @if(isset($employee))
    $('#page-title').text("Edit Karyawan");
    $('#page-desc').text("Karyawan NPE Digital");
    $('#inputNama').val("{{ $employee->nama }}");
    $('#inputEmail').val("{{ $employee->email }}");
    $('#inputTelp').val("{{ $employee->nomorTelpon }}");
    $('#inputDivisi').val("{{ $employee->divisi }}");
    $('#inputId').val("{{ $employee->id }}");
    $('#inputJabatan').val("{{ $employee->jabatan }}");
    $('#employee-form').attr('action', '{{ route('employee-update.admin')}}');
    @endif
</script>
@endsection
