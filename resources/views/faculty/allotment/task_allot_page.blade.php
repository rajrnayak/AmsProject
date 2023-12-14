@extends('faculty.layout.main-layout')

@section('faculty-main-container')
<div class="card mx-5">
    <div class="card-body px-5">
        <h3>CREATE TASK</h3>
        <form action="" method="post">
            @csrf
            {{-- <input type="hidden" class="form-control" id="inputrole" name="input_role" value="0"> --}}

            <div class="form-row">
                <div class="input-group-text col my-2 md-3 mr-2">
                    <label class="input-group-text mr-2" for="select_1">Assignment</label>
                    <select class="custom-select" id="select_1" name="input_assignment" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                        <option selected>select a assignment</option>

                    </select>
                </div>
                <div class="input-group-text col md-3 my-2 ml-2">
                    <label class="input-group-text mr-2" for="select_2">Faculty</label>
                    <select class="custom-select" id="select_2" name="input_faculty" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                        <option selected>select a faculty</option>

                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="input-group-text col md-3 my-2 mr-2">
                    <label class="input-group-text mr-2" for="select_3">Department</label>
                    <select class="custom-select" id="select_3" name="input_department" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                        <option selected>select a department</option>

                    </select>
                </div>
                <div class="input-group-text col md-3 my-2 ml-2">
                    <label class="input-group-text mr-2" for="select_4">course</label>
                    <select class="custom-select" id="select_4" name="input_course" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                        <option selected>select a course</option>

                    </select>
                </div>
                <div class="input-group-text col md-3 my-2 ml-2">
                    <label class="input-group-text mr-2" for="select_4">Semester</label>
                    <select class="custom-select" id="select_4" name="input_semester" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                        <option selected>select a semester</option>

                    </select>
                </div>
                <div class="input-group-text col md-3 my-2 ml-2">
                    <label class="input-group-text mr-2" for="select_4">division</label>
                    <select class="custom-select" id="select_4" name="input_department" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                        <option selected>select a department</option>

                    </select>
                </div>
            </div>
            <div class="form-row">
                <input class="btn btn-primary my-2" type="submit" value="submit">
            </div>
        </form>
    </div>
</div>
@endsection
