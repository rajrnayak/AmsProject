@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{route('insert.student')}}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <input type="hidden" value="0" name="studentRoleType">
                        <h3>Add Student Details</h3>
                        <label>Enter Name</label>
                        <input type="text" name="studentName" class="form-control">
                        <label>Enter Email</label>
                        <input type="email" name="studentEmail" class="form-control">
                        <label>Enter Password</label>
                        <input type="password" name="studentPassword" class="form-control">
                        <label>Select Department</label>
                        <select name="studentDepartmentId" class="form-select" onchange="getCourseByDepartmentId(this.value)">
                            <option selected disabled>Open this select menu</option>
                            @foreach ($departmentdata as $row)
                            <option value="{{$row->Department_id}}">{{$row->Department_name}}</option>
                            @endforeach
                        </select>
                        <label>Select Course</label>
                        <select id="courseDropdown" name="studentCourseId" class="form-select" onchange="getSemesterByCourseId(this.value)">
                            <option selected>Open this select menu</option>
                        </select>
                        <label>Select Semester</label>
                        <select id="semesterDropdown" name="studentSemesterId" class="form-select" onchange="getDivisionBySemesterId(this.value)">
                            <option selected>Open this select menu</option>
                        </select>
                        <label>Select Division</label>
                        <select id="divisionDropdown" name="studentDivisionId" class="form-select">
                            <option selected>Open this select menu</option>
                        </select>
                        <label>Enter Roll Number</label>
                        <input type="number" value="1" name="studentRollnumber" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
