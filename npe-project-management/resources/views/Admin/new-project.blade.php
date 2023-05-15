@extends('Layout.sidebar', ['title' => 'Project/New Project'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
    <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Projek</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Programmer</label>
                        <input type="text" class="form-control" id="inputProgrammer" placeholder="Pilih Programmer">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail4">Klien Projek</label>
                        <input type="text" class="form-control" id="inputKlien" placeholder="Klien Projek">
                      </div>
                      <div class="form-group">
                        <label for="inputEmail4">Tipe Projek</label>
                        <input type="text" class="form-control" id="inputTipe" placeholder="Tipe Projek">
                      </div>
                    </div>
                      <div class="form-group col-md-6">
                        <label for="inputDetail" class="form-label">Detail Projek</label>
                        <textarea class="form-control" id="inputDetail" rows="4" placeholder="Detail Projek"></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label>Date Range Picker</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-calendar"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control daterange-cus">
                      </div>
                    </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputState">Project Manager</label>
                        <select id="inputState" class="form-control">
                          <option selected="">Pilih Project Manager</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                  </div>
</div>
@endsection