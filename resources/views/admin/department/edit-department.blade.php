@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{route('update.department')}}">
        @csrf
        <div class="card mx-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center ">
                    <div class="mb-3">
                        <h3>Update Department</h3>
                        <input type="hidden" name="departmentid" value="{{$departmentupdate->Department_id}}">
                        <label for="exampleInputEmail1" class="form-label">Enter Department</label>
                        <input type="text" class="department form-control" name="departmentname" value="{{$departmentupdate->Department_name}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
