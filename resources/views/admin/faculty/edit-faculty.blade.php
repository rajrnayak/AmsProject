@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{ route('update.faculty') }}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <input type="hidden" name="facultyid" value="{{$facultyeditdata->Faculty_id}}">
                        <input type="hidden" name="userid" value="{{$userdata->id}}">
                        <h3>Add Faculty Details</h3>
                        <label>Update Name</label>
                        <input type="text" name="updatedFacultyName" value="{{$facultyeditdata->Faculty_username}}" class="form-control">
                        <label>Update Email</label>
                        <input type="email" name="updatedFacultyEmail" value="{{$userdata->email}}" class="form-control">
                        <label>Update Password</label>
                        <input type="password" name="updatedFacultyPassword" class="form-control">
                        <label>Select Department</label>
                        <select name="updatedFacultyDepartmentId" class="form-select" aria-label="select example"
                            onchange="getCourseByDepartmentId(this.value)">
                            <option selected disabled>Open to select</option>
                            @foreach ($departmentdata as $row)
                                <option  value="{{ $row->Department_id }}">{{ $row->Department_name }}</option>
                            @endforeach
                            <label>Select Department</label>
                        </select>
                        <label>Select Course</label>
                        <select id="courseDropdown" name="updatedFacultyCourseId" class="form-select" aria-label="select example">
                            <option selected>Open to select</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
