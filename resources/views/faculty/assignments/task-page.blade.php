@extends('faculty.layout.main-layout')

@section('faculty-main-container')
    <div class="card mx-5">
        <div class="card-body px-5">
            <h3>CREATE TASK</h3>
            <form action="" method="post">
                @csrf
                {{-- <input type="hidden" class="form-control" id="inputrole" name="input_role" value="0"> --}}

                <div class="form-row">
                    <div class="col md-3 my-2 ">
                        <label for="task_input_1">Name of task</label>
                        <input type="text" class="form-control w-75" id="task_input_1"
                            placeholder="Enter the name of assignment/task" name="" value="" autofocus>
                    </div>
                    <div class="col md-3 my-2 ">
                        <label for="selectFaculty01">Faculty name</label>
                        <input type="text" class="form-control " id="faculty_name_1" name="" value="" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col md-3 my-2 ">
                        <label for="datetimepicker6">Starting Date</label>
                        <input type="datetime-local" class="form-control" id="datetimepicker6" name="" value=""
                            autofocus>
                    </div>

                    <div class="col md-3 my-2 ">
                        <label for="datetimepicker7">End Date</label>
                        <input type="datetime-local" class="form-control" id="datetimepicker7" name="" value=""
                            autofocus>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group-text col my-2 md-3 mr-2">
                        <label class="input-group-text mr-2" for="select_1">Department</label>
                        <select class="custom-select" id="select_1" name="input_department"
                            onchange="getCourseByDepartmentId(this.value)">
                            <option selected>select a department</option>
                            @foreach ($department_details as $item)
                                <option value="{{ $item->Department_id }}">{{ $item->Department_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group-text col md-3 my-2 ml-2">
                        <label class="input-group-text mr-2" for="courseDropdown">course</label>
                        <select class="custom-select" id="courseDropdown" name="input_department"
                            onchange="getSemesterByCourseId(this.value)">
                            <option selected>select a course</option>
                            @foreach ($course_details as $item)
                                <option value="{{ $item->Course_id }}">{{ $item->Course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group-text col md-3 my-2 mr-2">
                        <label class="input-group-text mr-2" for="semesterDropdown">semester</label>
                        <select class="custom-select" id="semesterDropdown" name="input_department" onchange="getDivisionBySemesterId(this.value)">
                            <option selected>select a semester</option>
                            @foreach ($semester_details as $item)
                                <option value="{{ $item->Semester_id }}">{{ $item->Semester_number }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group-text col md-3 my-2 ml-2">
                        <label class="input-group-text mr-2" for="divisionDropdown">division</label>
                        <select class="custom-select" id="divisionDropdown" name="input_department">
                            <option selected>select a division</option>
                            @foreach ($division_details as $item)
                                <option value="{{ $item->Division_id }}">{{ $item->Division_character }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 mt-2">
                        <div class="input-group-prepend">
                            <label for="inputGroupFile01"><span class="input-group-text">Upload</span></label>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="col">
                        <label for="inputGroupDescription01">Description</label>
                        <textarea class="form-control" id="inputGroupDescription01" name="" value="" autofocus></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <input class="btn btn-primary my-2" type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
