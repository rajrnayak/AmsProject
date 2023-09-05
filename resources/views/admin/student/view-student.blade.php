@extends('admin.layout.main-layout')
@section('main-container')
<input type="hidden" value="{{$sr=1;}}">
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="panel">
                        <div class="panel-body table-responsive">
                            <a href="{{route('add.student')}}"><button type="button" class="btn btn-primary">Add Student</button></a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Department</th>
                                        <th>Course</th>
                                        <th>Semester</th>
                                        <th>Division</th>
                                        <th>Rollnumber</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($studentdata as $row)
                                    <tr>
                                        <td>{{$sr++}}</td>
                                        <td>{{$row->Student_username}}</td>
                                        <td>{{$row->UserDetails->email}}</td>
                                        <td>**********</td>
                                        <td>{{$row->DepartmentDetails->Department_name}}</td>
                                        <td>{{$row->CourseDetails->Course_name}}</td>
                                        <td>{{$row->SemesterDetails->Semester_number}}</td>
                                        <td>{{$row->DivisionDetails->Division_character}}</td>
                                        <td>{{$row->Student_rollnumber}}</td>
                                        <td>
                                            <a href="{{route('edit.student',[$row->Student_id])}}" data-tip="edit"><i class="fa fa-edit px-3"></i></a>
                                            <a href="{{route('delete.student',[$row->Student_id])}}" data-tip="delete"><i class="fa fa-trash px-3"></i></a>
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
