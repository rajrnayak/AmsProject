<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('student/dashboard') }}">
        <div class="sidebar-brand-text mx-3">AmsProject</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('student/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartment"
            aria-expanded="true" aria-controls="collapseDepartment">
            <i class="fas fa-fw fa-folder"></i>
            <span>Department</span>
        </a>
        <div id="collapseDepartment" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{asset('/department/add-department')}}">Add Department</a>
                <a class="collapse-item" href="{{asset('/department/view-department')}}">View Department</a>
            </div>
        </div>
    </li> --}}

    {{-- <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Faculty</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Add Faculty</a>
                <a class="collapse-item" href="#">View Faculty</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ asset('/main-layout') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>etc</span></a>
    </li> --}}

</ul>
<!-- End of Sidebar -->
