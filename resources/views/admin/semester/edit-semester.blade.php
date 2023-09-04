@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{route('update.semester')}}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <input type="hidden" name="semesterid" value="{{$semestereditdata->Semester_id}}">
                        <h3>Add Semester Details</h3>
                        <label>Select Department</label>
                        <select name="updatedsemesterDepartmentId" class="form-select" aria-label="select example" onchange="getCourseByDepartmentId(this.value)">
                            <option selected disabled>Open this select menu</option>
                            @foreach ($departmentdata as $row)
                            <option value="{{$row->Department_id}}">{{$row->Department_name}}</option>
                            @endforeach
                            <label>Select Department</label>
                        </select>
                        <label>Select Course</label>
                        <select id="courseDropdown" name="updatedsemesterCourseId" class="form-select" aria-label="select example">
                            <option selected>Open this select menu</option>
                        </select>
                        <label>Enter Semester Number</label>
                        <input type="number" value="{{$semestereditdata->Semester_number}}" name="updatedsemesternumber" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
