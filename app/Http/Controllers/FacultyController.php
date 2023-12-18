<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\department;
use App\Models\division;
use App\Models\faculty;
use App\Models\History;
use App\Models\semester;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function FacultyDashboard(){
        return view('faculty.dashboard');
    }

    public function TaskPage(){
        $faculty_details = faculty::all();
        $department_details = department::all();
        $course_details = course::all();
        $semester_details = semester::all();
        $division_details = division::all();
        return view('faculty.assignments.task-page',compact('faculty_details','department_details','course_details','semester_details','division_details'));
    }

    public function TaskAllotPage(){
        return view('faculty.allotment.task_allot_page');
    }

    public function HistoryPage(){
        $history_Details = History::all();
        return view('faculty.history.history',compact('history_Details'));
    }
}
