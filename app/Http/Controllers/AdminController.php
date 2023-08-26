<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\course;


class AdminController extends Controller
{

    public function AdminDashboard(){
        return view('admin.dashboard');
    }

    public function AddDepartment(){
        return view('admin.department.add-department');
    }

    public function ViewDepartment(){
        $departmentdata = department::all();
        return view('admin.department.view-department',compact('departmentdata'));
    }

    public function InsertDepartment(Request $request){
        $tabledata = new department;
        $tabledata->Department_name = $request->departmentname;
        $tabledata->save();
        return redirect()->route('view.department');
    }

    public function EditDepartment($id){
        $departmentupdate = department::where('Department_id','=',$id)->first();
        return view('admin.department.edit-department',compact('departmentupdate'));
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

    public function AddCourse(){
        $departmentdata = department::all();
        return view('admin.course.add-course',compact('departmentdata'));
    }

    public function ViewCourse(){
        $departmentdata = course::all();
        return view('admin.course.view-course',compact('departmentdata'));
    }

    public function InsertCourse(Request $request){
        $tabledata = new course;
        $tabledata->Course_Department_id = $request->departmentname;
        $tabledata->Course_name = $request->coursename;
        $tabledata->save();
        return redirect()->route('view.course');
    }

    public function EditCourse($id){
        $courseupdate = course::where('Course_id','=',$id)->first();
        $departmentdate = department::all();
    return view('admin.course.edit-course',compact('departmentdate','courseupdate'));
    }

    public function UpdateCourse(Request $request){
        course::where('Course_id', $request->courseid)
            ->update(['Course_Department_id' => $request->departmentname,'Course_name' => $request->coursename]);
        return redirect()->route('view.course');
    }

    public function DeleteCourse($id){
        $coursedelete = course::where('Course_id','=',$id)->delete();
        return redirect()->route('view.course');
    }

}
