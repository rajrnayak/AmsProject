<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function AddDepartment(){
        return view('admin.department.add-department');
    }
    public function ViewDepartment(){
        return view('admin.department.view-department');
    }
}
