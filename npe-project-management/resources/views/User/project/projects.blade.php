@extends('Layout.sidebar', ['title' => 'Project'])
<link rel="stylesheet" href="{{ asset('css/User/project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">

<style>
    a{
        text-decoration: none !important;
    }
</style>

@section('content')
<div class="card">
    <div class="section-header mb-0 d-flex justify-content-between">
        <div class="title-container d-flex align-items-center">
            <span id="header-line"></span>
            <h1 class="ml-5">My Project</h1>
        </div>    
        <a href="{{ route('user.projects.finished') }}" class="btn btn-lg btn-outline-dark btn-icon icon-left float-right">
            <i class="fas fa-eye"></i>
            <span>Finished Project</span>
        </a>
    </div>
    <div class="section-body project-card-container">
        <!-- single card design -->
        @foreach($projects as $project)
        <a href="{{ route('user.projects.detail', [$project -> id]) }}">
        <div class="project-card d-flex p-3 justify-content-around align-items-center m-3">
            <img src="{{ asset('img/User/website-story-set.png') }}" id="card-story-set" alt="website-story-set">
            <div class="description-section d-flex flex-column ml-3">
                <h5>{{ $project -> nama }}<span>*</span></h5>
                <div>
                    <p class="h6">PM : <span>{{ $project -> checkPM() }}</span></p>
                    <p class="h6 mb-0">{{ $project -> id }} Development</p>
                </div>
                <div class="date-section d-flex justify-content-between mt-2">
                    <h6>{{ $project -> deadline }}</h6>
                </div>
                <div class="status-container d-flex justify-content-end mt-2">
                    @if($project -> status == 0)
                    <div class="on-progress-status-section d-flex align-items-center px-3 py-2">    
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#0061C7" />
                        </svg>
                        <h6 class="mb-0 ml-2">On Progress</h6>
                    </div>
                    @elseif($project -> status == 2)
                    <div class="pending-status-section d-flex align-items-center px-3 py-2">    
                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#fc544b" />
                        </svg>
                        <h6 class="mb-0 ml-2 text-danger">Revision Needed</h6>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        </a>
        @endforeach
        <!-- end single card design -->
    </div>
</div>
@endsection


@section('script')
@endsection
