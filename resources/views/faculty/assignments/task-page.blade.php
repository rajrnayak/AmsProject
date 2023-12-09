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
                </div>
                <div class="form-row">
                    <div class="col md-3 my-2 ">
                        <label for="datetimepicker6">Starting Date</label>
                        <input type="datetime-local" class="form-control" id="datetimepicker6"
                            name="" value="" autofocus>
                    </div>

                    <div class="col md-3 my-2 ">
                        <label for="datetimepicker7">End Date</label>
                        <input type="datetime-local" class="form-control" id="datetimepicker7"
                            name="" value="" autofocus>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group-text col my-2 md-3 mr-2">
                        <label class="input-group-text mr-2" for="select_1">Department</label>
                        <select class="custom-select" id="select_1" name="input_department" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                            <option selected>select a department</option>

                        </select>
                    </div>
                    <div class="input-group-text col md-3 my-2 ml-2">
                        <label class="input-group-text mr-2" for="select_2">course</label>
                        <select class="custom-select" id="select_2" name="input_department" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                            <option selected>select a department</option>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group-text col md-3 my-2 mr-2">
                        <label class="input-group-text mr-2" for="select_3">semester</label>
                        <select class="custom-select" id="select_3" name="input_department" {{-- onclick="getCourseByDepartmentId(this.value)" --}}>
                            <option selected>select a department</option>

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
                        <textarea class="form-control" id="inputGroupDescription01"
                            name="" value="" autofocus></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <input class="btn btn-primary my-2" type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
