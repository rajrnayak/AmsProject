@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{ route('insert.faculty') }}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <input type="hidden" value="1" name="facultyRoleType">
                        <h3>Add Faculty Details</h3>
                        <label>Enter Name</label>
                        <input type="text" name="facultyName" class="form-control">
                        <label>Enter Email</label>
                        <input type="email" name="facultyEmail" class="form-control">
                        <label>Enter Password</label>
                        <input type="password" name="facultyPassword" class="form-control">
                        <label>Select Department</label>
                        <select name="facultyDepartmentId" class="form-select" aria-label="select example" onchange="getCourseByDepartmentId(this.value)">
                            <option selected disabled>Open this select menu</option>
                            @foreach ($departmentdata as $row)
                                <option value="{{$row->Department_id}}">{{$row->Department_name}}</option>
                            @endforeach
                        <label>Select Department</label>
                        </select>
                        <label>Select Course</label>
                        <select id="courseDropdown" name="facultyCourseId" class="form-select" aria-label="select example">
                            <option selected>Open this select menu</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
