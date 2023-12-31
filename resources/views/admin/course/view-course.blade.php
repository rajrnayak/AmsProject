@extends('admin.layout.main-layout')
@section('main-container')
    <div class="ml-4">
        <a href="{{ route('add.department') }}"><button type="button" class="btn btn-primary">Add Department</button></a>
    </div>

    <input type="hidden" value="{{ $sr = 1 }}">
    
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
                            <th>Courses</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sr. no.</th>
                            <th>Courses</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($departmentdata as $row)
                            <tr>
                                <td>{{ $sr++ }}</td>
                                <td>{{ $row->DepartmentDetails->Department_name }}</td>
                                <td>{{ $row->Course_name }}</td>
                                <td>
                                    <a href="{{ route('edit.course', [$row->Course_id]) }}" data-tip="edit"><i class="fa fa-edit px-3"></i></a>
                                    <a href="{{ route('delete.course', [$row->Course_id]) }}" data-tip="delete"><i
                                            class="fa fa-trash px-3"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

