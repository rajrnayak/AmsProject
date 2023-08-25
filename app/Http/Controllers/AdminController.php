<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class AdminController extends Controller
{

    public function AdminDashboard(){
        return view('Admin.dashboard');
    }

    public function AddDepartment(){
        return view('Admin.department.add-department');
    }

    public function ViewDepartment(){
        $departmentdata = department::all();
        return view('Admin.department.view-department',compact('departmentdata'));
    }

    public function InsertDepartment(Request $request){
        $tabledata = new department;
        $tabledata->Department_name = $request->departmentname;
        $tabledata->save();
        return redirect()->route('add.department');
    }

    public function EditDepartment($id){
        $departmentupdate = department::where('Department_id','=',$id)->first();
        return view('Admin.department.edit-department',compact('departmentupdate'));
    }

    public function UpdateDepartment(Request $request){
        department::where('Department_id', $request->departmentid)
            ->update(['Department_name' => $request->departmentname]);
        return redirect()->route('view.department');
    }

    public function DeleteDepartment($id){
        $departmentdelete = department::where('Department_id','=',$id)->delete();
        return redirect()->route('view.department');
    }

}
