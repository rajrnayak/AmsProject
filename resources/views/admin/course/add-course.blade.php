@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="{{ route('insert.course') }}">
        @csrf
        <div class="card m-5">
            <div class="card-body px-5">
                <h3 class="mb-3">Add Course</h3>

                <div class="row">
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Department</label>
                        </div>
                        <select name="departmentname" class="custom-select" id="inputGroupSelect01">
                            <option selected disabled>Select any one..</option>
                            @foreach ($departmentdata as $row)
                                <option value="{{ $row->Department_id }}">{{ $row->Department_name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="courseInput01">Add Course</label>
                        </div>
                        <input id="courseInput01" type="text" class="addcourse form-control" name="coursename">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>


            </div>
        </div>
    </form>
@endsection
