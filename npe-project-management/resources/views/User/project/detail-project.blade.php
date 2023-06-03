@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/detail-project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header d-flex justify-content-between">
        <div class="d-flex flex-column header-title">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item active mb-0">Project Name</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">Project Name</h1>
                    <div class="project-type-section d-flex align-items-center mt-1">
                        <span id="square"></span>
                        <h6 class="ml-3 mb-0">Mobile Development</h6>
                    </div>
                    <h6 class="mt-4">Project Manager : <span>Albert</span></h6>
                    <div class="project-description mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque numquam voluptatibus aspernatur quisquam suscipit totam odit dicta fugiat adipisci quod animi, hic sequi pariatur laborum quidem porro atque corporis omnis doloribus incidunt perspiciatis asperiores natus vel! Doloremque esse aliquam, quis aperiam voluptate maxime consequuntur, iure sapiente illum aliquid soluta incidunt!</p>
                    </div>
                    <div class="project-status-section d-flex align-items-center">
                        <div class="status-section d-flex align-items-center px-3 py-2">
                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6" cy="6" r="6" fill="#0061C7" />
                            </svg>
                            <h6 class="mb-0 ml-2">On Progress</h6>
                        </div>
                        <p class="mb-0 ml-4">Not Finish Yet</p>
                    </div>
                    <div class="success-button-section">
                        <a href="#"><button onclick="" class="btn btn-success mt-4 px-3 py-2">
                                <h6>Finish Project</h6>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-header-section d-flex flex-column align-items-center mx-5 pr-5">
            <div class="image-section d-flex flex-column align-items-center">
                <img id="time-story-set" src="{{ asset('img/User/time-story-set.png') }}" alt="time story set">
            </div>
            <div class="date-status-section d-flex justify-content-between mt-3">
                <div class="early-date-section py-2 px-4 d-flex flex-column align-items-center">
                    <h6 class="mb-0">DD/MM/YYY</h6>
                    <p class="mb-0">HH:MM</p>
                </div>
                <div class="due-date-section py-2 px-4 d-flex flex-column align-items-center">
                    <h6 class="mb-0">DD/MM/YYY</h6>
                    <p class="mb-0">HH:MM</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        <div class="milestone-section p-4 ">
            <div class="header d-flex align-items-center">
                <h5 class="mb-0">Milestone</h5>
                <a href="{{ route('user.projects.new-milestone') }}"><Button class="add-milestone-btn ml-4"><i class="fas fa-plus"></i> &nbsp; Add Milestone</Button></a>
            </div>
            <div class="body d-flex flex-column mt-3">

                <!-- Milestone item -->
                <div class="milestone-item d-flex justify-content-between align-items-center py-3 px-4 mt-2">
                    <div>
                        <a href="#">
                            <h5 class="mb-0">Milestone Name</h5>
                        </a>
                        <p class="mb-0">Due Date (DD/MM/YYY)</p>
                    </div>
                    <div class="action-button d-flex align-items-center">
                        <a class="mr-3" href="#"><img src="{{ asset('img/Admin/pensil.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/Admin/zabil.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="milestone-item d-flex justify-content-between align-items-center py-3 px-4 mt-2">
                    <div>
                        <a href="#">
                            <h5 class="mb-0">Milestone Name</h5>
                        </a>
                        <p class="mb-0">Due Date (DD/MM/YYY)</p>
                    </div>
                    <div class="action-button d-flex align-items-center">
                        <a class="mr-3" href="#"><img src="{{ asset('img/Admin/pensil.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/Admin/zabil.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Task Section for User -->
        <div class="Task-section p-4 mt-5">
            <div class="header d-flex align-items-center">
                <h5 class="mb-0">My Task</h5>
            </div>
            <div class="body d-flex flex-column mt-3">

                <!-- Task item -->
                <div class="description-task-container d-flex">
                    <input class="form-check mt-2" type="checkbox" id="flexCheckDisabled" disabled>
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
        <div class="table-responsive mt-5" style="width:100%!important">
            <table class="table display nowrap" style="width:100%" id="tableProgrammerProjectDetail">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Hp</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Albert Almanisi</td>
                        <td>manisi@gmail.com</td>
                        <td>08987612364</td>
                        <td>UI/UX</td>
                        <td>Junior Developer</td>
                    </tr>
                    <tr>
                        <td>Albert Alasami</td>
                        <td>asami@gmail.com</td>
                        <td>08987612364</td>
                        <td>Mobile Developer</td>
                        <td>Senior Developer</td>
                    </tr>

                </tbody>
            </table>
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