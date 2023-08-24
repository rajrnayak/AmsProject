<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('Admin.dashboard');
    }
    public function AddDepartment(){
        return view('Admin.department.add-department');
    }
    public function ViewDepartment(){
        return view('Admin.department.view-department');
    }
}
