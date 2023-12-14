@extends('faculty.layout.main-layout')

@section('faculty-main-container')
<input type="hidden" value="{{$sr=1;}}">
<div class="container-fluid mt-4">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sr. no.</th>
                        <th>ass_id</th>
                        <th>faculty_id</th>
                        <th>dep_id</th>
                        <th>course_id</th>
                        <th>sem_id</th>
                        <th>division_id</th>
                        <th>student_id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr. no.</th>
                        <th>ass_id</th>
                        <th>faculty_id</th>
                        <th>dep_id</th>
                        <th>course_id</th>
                        <th>sem_id</th>
                        <th>division_id</th>
                        <th>student_id</th>
                        <th>Action</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($history_Details as $row)
                        <tr>
                            <td>{{ $sr++ }}</td>
                            <td>{{$row->AssignmentDetails->Department_name}}</td>
                            <td>{{$row->FacultyDetails->Department_name}}</td>
                            <td>{{$row->DepartmentDetails->Department_name}}</td>
                            <td>{{$row->CourseDetails->Department_name}}</td>
                            <td>{{$row->SemesterDetails->Department_name}}</td>
                            <td>{{$row->DivisionDetails->Department_name}}</td>
                            <td>{{$row->StudentsDetails->Department_name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
