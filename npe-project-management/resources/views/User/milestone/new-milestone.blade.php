@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/new-milestone.css') }}">


@section('content')
<div class="card">
    <div class="section-header d-flex align-items-center">
        <a href="{{ route('user.projects.detail', ['id' => $project -> project -> id ?? $project -> id]) }}"><i class="fas fa-chevron-left mt-4" style="font-size: 2rem; color:#0061C7;"></i></a>
        <div class="d-flex flex-column header-title ml-4">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item mb-0"><a href="#">{{ $project -> project -> nama ?? $project -> nama }}</a></p>
                <p class="breadcrumb-item active mb-0">New Milestone</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">{{ isset($project -> project -> id) ? 'Edit Milestone' : 'Buat Milestone'  }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        <form action="{{ isset($project -> project -> id) ? route('user.projects.update-milestone', ['id' => $project -> id]) : route('user.projects.store-milestone')  }}" method="POST">
            @csrf
            <div class="milestone-section row">
                <div class="left-container col-md-6">
                    <div class="form-group">
                        <label for="inputMilestoneName">Milestone Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="nama" value="{{ isset($project -> project -> id) ? $project -> nama : '' }}" id="inputMilestoneName" placeholder="Milestone Name">
                    </div>
                    <div class="form-group">
                        <label for="inputDueDate">Due Date <span style="color:red;">*</span></label>
                        <input type="date" class="form-control" name="deadline" value="{{ isset($project -> project -> id) ? $project -> deadline : '' }}" id="inputDueDate">
                        <input type="hidden" value="{{ $project -> project -> id ?? $project -> id }}" name="project_id">
                    </div>
                </div>
                <div class="right-container col-md-6">
                    <div class="form-group">
                        <label for="milestoneDetail">Milestone Detail <span style="color:red;">*</span></label>
                        <textarea class="form-control" id="milestoneDetail" name="detail" rows="3" placeholder="Milestone Detail">{{ isset($project -> project -> id) ? $project -> detail : '' }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row button-section justify-content-end m-4">
                <div class="col-md-1 d-flex justify-content-center align-items-center">
                    <a href="#" class="cancel-btn">Batal</a>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary submit-btn">{{ isset($project -> project -> id) ? 'Edit Milestone' : 'Buat Milestone'  }}</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection

@section('script')
@endsection