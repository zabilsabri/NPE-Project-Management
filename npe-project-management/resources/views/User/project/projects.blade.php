@extends('Layout.sidebar', ['title' => 'Project'])
<link rel="stylesheet" href="{{ asset('css/User/project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">

@section('content')
<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title-container d-flex align-items-center">
            <span id="header-line"></span>
            <h1 class="ml-5">My Project</h1>
        </div>    
        <a href="{{ route('project-create.admin') }}" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right">
            <i class="fas fa-plus"></i>
            <span>Finished Project</span>
        </a>
    </div>
    <div class="section-body project-card-container">
        <!-- single card design -->
        <div class="project-card d-flex p-3 justify-content-around align-items-center m-3">
            <img src="{{ asset('img/User/website-story-set.png') }}" id="card-story-set" alt="website-story-set">
            <div class="description-section d-flex flex-column ml-3">
                <h5>Project Name<span>*</span></h5>
                <div class="ml-3">
                    <p class="h6">PM : <span>You</span></p>
                    <p class="h6 mb-0">Web Development</p>
                </div>
                <div class="date-section d-flex justify-content-between mt-2">
                    <h6>Early Date</h6>
                    <h6>Due Date</h6>
                </div>
                <div class="status-container d-flex justify-content-end mt-2">
                    <div class="status-section d-flex align-items-center px-3 py-2">    
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#0061C7" />
                        </svg>
                        <h6 class="mb-0 ml-2">On Progress</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single card design -->
        <!-- single card design -->
        <div class="project-card d-flex p-3 justify-content-around align-items-center m-3">
            <img src="{{ asset('img/User/website-story-set.png') }}" id="card-story-set" alt="website-story-set">
            <div class="description-section d-flex flex-column ml-3">
                <h5>Project Name<span>*</span></h5>
                <div class="ml-3">
                    <p class="h6">PM : <span>Sabri bin Habib Al-Jamal</span></p>
                    <p class="h6 mb-0">Web Development</p>
                </div>
                <div class="date-section d-flex justify-content-between mt-2">
                    <h6>Early Date</h6>
                    <h6>Due Date</h6>
                </div>
                <div class="status-container d-flex justify-content-end mt-2">
                    <div class="status-section d-flex align-items-center px-3 py-2">    
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#0061C7" />
                        </svg>
                        <h6 class="mb-0 ml-2">On Progress</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single card design -->
        <!-- single card design -->
        <div class="project-card d-flex p-3 justify-content-around align-items-center m-3">
            <img src="{{ asset('img/User/website-story-set.png') }}" id="card-story-set" alt="website-story-set">
            <div class="description-section d-flex flex-column ml-3">
                <h5>Project Name<span>*</span></h5>
                <div class="ml-3">
                    <p class="h6">PM : <span>Erwin bin Aflakhul Katiri</span></p>
                    <p class="h6 mb-0">Web Development</p>
                </div>
                <div class="date-section d-flex justify-content-between mt-2">
                    <h6>Early Date</h6>
                    <h6>Due Date</h6>
                </div>
                <div class="status-container d-flex justify-content-end mt-2">
                    <div class="status-section d-flex align-items-center px-3 py-2">    
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#0061C7" />
                        </svg>
                        <h6 class="mb-0 ml-2">On Progress</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single card design -->
    </div>
</div>
@endsection


@section('script')
@endsection
