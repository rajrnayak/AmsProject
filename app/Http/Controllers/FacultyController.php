<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function FacultyDashboard(){
        return view('faculty.dashboard');
    }
}
