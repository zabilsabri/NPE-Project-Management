@extends('Layout.sidebar', ['title' => 'Project/New Project'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
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
        <form method="post" action="{{ route('project-store.admin') }}" id="project-form">
            @csrf
            <input name="id" type="text" class="form-control d-none" id="inputId">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama Projek</label>
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Employee</label>
                    <select name="employees[]" class="selectpicker form-control" id="inputState" data-live-search="true" multiple>
                        @foreach ($employees as $employee)
                            @if (isset($project))
                                <option data-tokens="mustard" value="{{ $employee->id }}" {{ $project->employees->contains($employee) ? 'selected' : '' }}>{{ $employee->nama }}</option>
                            @else
                                <option data-tokens="mustard" value="{{ $employee->id }}">{{ $employee->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail4">Klien Projek</label>
                        <input name="klien" type="text" class="form-control" id="inputKlien" placeholder="Klien Projek">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Tipe Projek</label>
                        <select class="form-select" name="tipe" id="inputTipe" aria-label="Default select example">
                            <option value="{{ $project -> tipe ?? '' }}" selected>-- {{ $project -> tipe ?? 'Silahkan Masukkan Tipe Projek Ini' }}</option>
                            <option value="Web">Web</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Web & Mobile">Web & Mobile</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDetail" class="form-label">Detail Projek</label>
                    <textarea name="detail" class="form-control" id="inputDetail" rows="4"
                        placeholder="Detail Projek"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Deadline</label>
                    <div class="input-group">
                        <input name="deadline" type="date" class="form-control daterange-cus" id="inputDeadline">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Project Manager</label>
                    <select name="pm_id" class="selectpicker form-control" id="inputState" data-live-search="true">
                        <option data-tokens="">Silahkan Pilih PM Anda</option>
                        @foreach ($employees as $employee)
                            @if (isset($project))
                                <option data-tokens="mustard" value="{{ $employee->id }}" {{ $employee->id == $project->pm->id ? 'selected' : ''}}>{{$employee->nama . ' (' . $employee->credit . ')'}}</option>
                            @else
                                <option data-tokens="mustard" value="{{ $employee->id }}">{{$employee->nama . ' (' . $employee->credit . ')'}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                <a href="{{ route('project.admin') }}" class="btn btn-outline-danger">Batal</a>
                <button type="submit" class="btn btn-primary" id="submit-btn">Buat Projek</button>
            </div>
        </form>
    </div>

</div>
@endsection

@section('script')
<script>
    @if(isset($project))
        $('#inputId').val("{{$project->id}}");
        $('#inputNama').val("{{$project->nama}}");
        $('#inputKlien').val("{{$project->klien}}");
        $('#inputDeadline').val("{{$project->getRawOriginal('deadline')}}");
        $('#inputDetail').val("{{$project->detail}}");
        $('#submit-btn').text("Update");
        $('#project-form').attr("action", "{{ route('project-update.admin') }}");
    @endif
</script>
@endsection
