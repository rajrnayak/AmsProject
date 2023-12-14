@extends('admin.layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <div class="card mx-5">
        <div class="card-body px-5">
            <h3>Add Department</h3>
            <form action="{{ route('insert.department') }}">
                @csrf
                <div class="form-row w-75">
                    <label for="departmentInput01">Enter Department</label>
                    <input id="departmentInput01" type="text" class="adddepartment form-control" name="departmentname">
                    <div class="form-row">
                        <input class="btn btn-primary my-2" type="submit" value="submit">
                    </div>
                </div>
        </div>
    </div>
    </form>

@endsection
