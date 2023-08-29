@extends('admin.layout.main-layout')
@section('main-container')
<input type="hidden" value="{{$sr=1;}}">
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="panel">
                        <div class="panel-body table-responsive">
                            <a href="{{route('add.course')}}"><button type="button" class="btn btn-primary">Add Course</button></a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Department Name</th>
                                        <th>Course Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departmentdata as $row)
                                    <tr>
                                        <td>{{$sr++;}}</td>
                                        <td>{{$row->DepartmentDetails->Department_name}}</td>
                                        <td>{{$row->Course_name}}</td>
                                        <td>
                                            <a href="{{route('edit.course',[$row->Course_id])}}" data-tip="edit"><i class="fa fa-edit px-3"></i></a>
                                            <a href="{{route('delete.course',[$row->Course_id])}}" data-tip="delete"><i class="fa fa-trash px-3"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
