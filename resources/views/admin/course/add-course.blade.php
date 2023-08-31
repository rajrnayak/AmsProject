@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{route('insert.course')}}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <h3>Add Course</h3>
                        <label>Select Department</label>
                        <br><select name="departmentname" class="form-select" aria-label="select example">
                            <option selected disabled>Select any one..</option>
                            @foreach ($departmentdata as $row)
                                <option value="{{$row->Department_id}}">{{$row->Department_name}}</option>
                            @endforeach
                        </select><br>
                        <label>Add Course</label>
                        <input type="text" class="addcourse form-control" name="coursename">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
