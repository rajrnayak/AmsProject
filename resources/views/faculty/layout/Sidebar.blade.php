<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('faculty/dashboard') }}">
        <div class="sidebar-brand-text mx-3">AmsProject</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('faculty/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('task.page')}}"
        {{-- data-toggle="collapse" data-target="#collapseDepartment" --}}
            {{-- aria-expanded="true" aria-controls="collapseDepartment" --}}
            >
            <i class="fas fa-fw fa-folder"></i>
            <span>Assignment/Task</span>
        </a>
        {{-- <div id="collapseDepartment" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('add.assignment')}}">Create</a>
                <a class="collapse-item" href="{{route('view.assignment')}}">View</a>
            </div>
        </div> --}}
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
            {{-- data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages" --}}
            >
            <i class="fas fa-fw fa-folder"></i>
            <span>Allotment</span>
        </a>
        {{-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Add Faculty</a>
                <a class="collapse-item" href="#">View Faculty</a>
            </div>
        </div> --}}
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/main-layout') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>History</span></a>
    </li>

</ul>
<!-- End of Sidebar -->
