@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{route('insert.division')}}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <h3>Add Division Details</h3>
                        <label>Select Department</label>
                        <select name="divisionDepartmentId" class="form-select" onchange="getCourseByDepartmentId(this.value)">
                            <option selected disabled>Open this select menu</option>
                            @foreach ($departmentdata as $row)
                            <option value="{{$row->Department_id}}">{{$row->Department_name}}</option>
                            @endforeach
                            <label>Select Department</label>
                        </select>
                        <label>Select Course</label>
                        <select id="courseDropdown" name="divisionCourseId" class="form-select" onchange="getSemesterByCourseId(this.value)">
                            <option selected>Open this select menu</option>
                        </select>
                        <label>Select Semester</label>
                        <select id="semesterDropdown" name="divisionSemesterId" class="form-select">
                            <option selected>Open this select menu</option>
                        </select>
                        <label>Enter Division Character</label>
                        <input type="text" value="A" name="divisioncharacter" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
