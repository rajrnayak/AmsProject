@extends('admin.layout.main-layout')
@section('main-container')
<input type="hidden" value="{{$sr=1;}}">
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="panel">
                        <div class="panel-body table-responsive">
                            <a href="{{route('add.faculty')}}"><button type="button" class="btn btn-primary">Add Faculty</button></a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Department</th>
                                        <th>Course</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($facultydata as $row)
                                    <tr>
                                        <td>{{$sr++}}</td>
                                        <td>{{$row->Faculty_username}}</td>
                                        <td>{{$row->UserDetails->email}}</td>
                                        <td>**********</td>
                                        <td>{{$row->DepartmentDetails->Department_name}}</td>
                                        <td>{{$row->CourseDetails->Course_name}}</td>
                                        <td>
                                            <a href="{{route('edit.faculty',[$row->Faculty_id])}}" data-tip="edit"><i class="fa fa-edit px-3"></i></a>
                                            <a href="{{route('delete.faculty',[$row->Faculty_id])}}" data-tip="delete"><i class="fa fa-trash px-3"></i></a>
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
