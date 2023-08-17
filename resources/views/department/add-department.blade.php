@extends('layout.main-layout')
@section('main-container')
    <!-- Content Row -->
    <form action="">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Add Department</label>
          <input type="text" class="adddepartment form-control" id="adddepartmentid" name="departmentname">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
