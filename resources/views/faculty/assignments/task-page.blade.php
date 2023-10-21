@extends('faculty.layout.main-layout')

@section('faculty-main-container')
<div class="card mx-4">
    <div class="card-body">
        <h3>Create Task</h3>
        <form action="" method="post">
            @csrf
            {{-- <input type="hidden" class="form-control" id="inputrole" name="input_role" value="0"> --}}

            <div class="form row">
                <div class="col md-3 my-2 ">
                    <label for="task_input_1">Name of task</label>
                    <input type="text" class="form-control" id="task_input_1" placeholder="enter the name of assignment/task"
                        name="" value="" autofocus>
                </div>
            </div>
            <div class="form-row">
                <input class="btn btn-primary my-2" type="submit" value="submit">
            </div>
        </form>
    </div>
</div>
@endsection
