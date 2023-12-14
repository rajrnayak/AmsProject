<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function FacultyDashboard(){
        return view('faculty.dashboard');
    }

    public function TaskPage(){
        return view('faculty.assignments.task-page');
    }

    public function TaskAllotPage(){
        return view('faculty.allotment.task_allot_page');
    }

    public function HistoryPage(){
        $history_Details = History::all();
        return view('faculty.history.history',compact('history_Details'));
    }
}
