<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-text mx-3">AmsProject</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartment"
            aria-expanded="true" aria-controls="collapseDepartment">
            <i class="fas fa-fw fa-folder"></i>
            <span>Department</span>
        </a>
        <div id="collapseDepartment" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.department')}}">Add Department</a>
                <a class="collapse-item" href="{{route('view.department')}}">View Department</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecourse"
            aria-expanded="true" aria-controls="collapsecourse">
            <i class="fas fa-fw fa-folder"></i>
            <span>course</span>
        </a>
        <div id="collapsecourse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.course')}}">Add Course</a>
                <a class="collapse-item" href="{{route('view.course')}}">View Course</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesemester"
            aria-expanded="true" aria-controls="collapsesemester">
            <i class="fas fa-fw fa-folder"></i>
            <span>semester</span>
        </a>
        <div id="collapsesemester" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.semester')}}">Add Semester</a>
                <a class="collapse-item" href="{{route('view.semester')}}">View Semester</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedivision"
            aria-expanded="true" aria-controls="collapsedivision">
            <i class="fas fa-fw fa-folder"></i>
            <span>division</span>
        </a>
        <div id="collapsedivision" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.division')}}">Add Division</a>
                <a class="collapse-item" href="{{route('view.division')}}">View Division</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefaculty"
            aria-expanded="true" aria-controls="collapsefaculty">
            <i class="fas fa-fw fa-folder"></i>
            <span>Faculty</span>
        </a>
        <div id="collapsefaculty" class="collapse" aria-labelledby="headingfaculty" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.faculty')}}">Add Faculty</a>
                <a class="collapse-item" href="{{route('view.faculty')}}">View Faculty</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsestudent"
            aria-expanded="true" aria-controls="collapsestudent">
            <i class="fas fa-fw fa-folder"></i>
            <span>Student</span>
        </a>
        <div id="collapsestudent" class="collapse" aria-labelledby="headingstudent" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.student')}}">Add Student</a>
                <a class="collapse-item" href="{{route('view.student')}}">View Student</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ asset('/main-layout') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>etc</span></a>
    </li> --}}

</ul>
<!-- End of Sidebar -->
