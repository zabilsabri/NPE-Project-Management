@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/detail-milestone.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header d-flex justify-content-between">
        <div class="d-flex flex-column header-title">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item mb-0"><a href="#">Project Name</a></p>
                <p class="breadcrumb-item active mb-0">Milestone Name</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">Milestone Name</h1>

                    <div class="milestone-description mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque numquam voluptatibus aspernatur quisquam suscipit totam odit dicta fugiat adipisci quod animi, hic sequi pariatur laborum quidem porro atque corporis omnis doloribus incidunt perspiciatis asperiores natus vel! Doloremque esse aliquam, quis aperiam voluptate maxime consequuntur, iure sapiente illum aliquid soluta incidunt!</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="image-header-section d-flex mx-5 pr-5">
            <div class="due-date-section py-2 px-4 d-flex flex-column align-items-center">
                <h6 class="mb-0">DD/MM/YYY</h6>
                <p class="mb-0">HH:MM</p>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">    
        <!-- My Task Section for User -->
        <div class="Task-section p-4">
            <div class="header d-flex align-items-center">
                <h5 class="mb-0">Task List</h5>
            </div>
            <div class="body d-flex flex-column mt-3">

                <!-- Task item -->
                <div class="description-task-container d-flex">
                    <input class="form-check mt-2" type="checkbox" id="flexCheckDisabled">
                    <div class="desc-container ml-3 py-2 px-4">
                        <div class="header-description-section d-flex justify-content-between">
                            <div class="header-title d-flex align-items-center">
                                <h6 class="mb-0" style="color:black;">Task Name</h6>
                                <p class="mb-0 ml-3">Programmer Name</p>
                            </div>
                            <div class="dropdown-button d-flex align-items-center">
                                <input type="checkbox">
                                <i class="fas fa-chevron-down" style="font-size: 1.5rem; color:black;"></i>
                            </div>
                        </div>
                        <div class="task-description-section mt-2">
                            <div class="desc">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis quis, explicabo placeat neque facilis natus inventore suscipit consequatur! Dolore, modi?</p>
                            </div>
                            <div class="due-date d-flex justify-content-end">
                                <h6 class="mb-0">Due Date</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection

@section('script')
<script>
    const arrowInput = document.querySelector('.dropdown-button input');
    const descContainer = document.querySelector('.desc-container');

    arrowInput.addEventListener('click', function() {
        descContainer.classList.toggle('checked');
    });
</script>
@endsection