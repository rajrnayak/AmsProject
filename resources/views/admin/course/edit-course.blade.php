@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{route('update.course')}}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <h3>Update Course</h3>
                        <label>Select Department</label>
                        <input type="hidden" name="courseid" value="{{$courseupdate->Course_id}}">
                        <br><select name="departmentname" class="form-select" aria-label="select example">
                            <option selected disabled>Select any one..</option>
                             @foreach ($departmentdate as $row)
                                <option @if ($courseupdate->Course_Department_id == $row->Department_id)
                                selected
                                @endif
                                value="{{$row->Department_id}}">{{$row->Department_name}}</option>
                            @endforeach
                        </select><br>
                        <label>Add Course</label>
                        <input type="text" class="addcourse form-control" name="coursename" value="{{$courseupdate->Course_name}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
