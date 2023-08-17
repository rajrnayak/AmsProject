<?php

namespace App\Http\Controllers\department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function AddDepartment(){
        return view('department.add-department');
    }
    public function ViewDepartment(){
        return view('department.view-department');
    }
}
