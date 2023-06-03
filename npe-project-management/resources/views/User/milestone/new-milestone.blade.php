@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/new-milestone.css') }}">


@section('content')
<div class="card">
    <div class="section-header d-flex align-items-center">
        <a href="#"><i class="fas fa-chevron-left mt-4" style="font-size: 2rem; color:#0061C7;"></i></a>
        <div class="d-flex flex-column header-title ml-4">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item mb-0"><a href="#">Project Name</a></p>
                <p class="breadcrumb-item active mb-0">New Milestone</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">New Milestone</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        <form action="#">
            <div class="milestone-section row">
                <div class="left-container col-md-6">
                    <div class="form-group">
                        <label for="inputMilestoneName">Milestone Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="inputMilestoneName" placeholder="Milestone Name">
                    </div>
                    <div class="form-group">
                        <label for="inputDueDate">Due Date <span style="color:red;">*</span></label>
                        <input type="date" class="form-control" id="inputDueDate">
                    </div>
                </div>
                <div class="right-container col-md-6">
                    <div class="form-group">
                        <label for="milestoneDetail">Milestone Detail <span style="color:red;">*</span></label>
                        <textarea class="form-control" id="milestoneDetail" rows="3" placeholder="Milestone Detail"></textarea>
                    </div>
                </div>
            </div>
            <div class="row button-section justify-content-end m-4">
                <div class="col-md-1 d-flex justify-content-center align-items-center">
                    <a href="#" class="cancel-btn">Batal</a>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary submit-btn">Buat Milestone</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection

@section('script')
@endsection