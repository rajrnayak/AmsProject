<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\course;
use App\Models\User;
use App\Models\faculty;

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

    public function AddFaculty(){
        $departmentdata = department::all();
        return view('admin.faculty.add-faculty',compact('departmentdata'));
    }
    public function GetCourseByDepartmentId($id){
        $courses = course::where('Course_Department_id','=',$id)->get();
        return response()->json($courses);
    }

    public function InsertFaculty(Request $request){
        $saveinuser = new User;
        $saveinuser->email = $request->facultyEmail;
        $saveinuser->password = bcrypt($request->facultyPassword);
        $saveinuser->role = $request->facultyRoleType;
        $saveinuser->save();

        $userid = User::where('email','=',$request->facultyEmail)->value('id');

        $saveinfaculty = new faculty;
        $saveinfaculty->Faculty_User_id = $userid;
        $saveinfaculty->Faculty_Department_id = $request->facultyDepartmentId;
        $saveinfaculty->Faculty_Course_id = $request->facultyCourseId;
        $saveinfaculty->Faculty_username = $request->facultyName;
        $saveinfaculty->save();

        return redirect()->route('view.faculty');
    }

    public function ViewFaculty(){
        $facultydata = faculty::all();
        return view('admin.faculty.view-faculty',compact('facultydata'));
    }

    public function EditFaculty($id){
        $facultyeditdata = faculty::where('Faculty_id','=',$id)->first();
        $departmentdata = department::all();
        $coursedata = course::all();
        $userdata = User::where('id','=',$facultyeditdata->Faculty_User_id)->first();
        return view('admin.faculty.edit-faculty',compact('coursedata','departmentdata','facultyeditdata','userdata'));
    }

    public function UpdateFaculty(Request $request){
        User::where('id', $request->userid)
            ->update(['email' => $request->updatedFacultyEmail,
            'password' => bcrypt($request->updatedFacultyPassword)]);

        faculty::where('Faculty_id', $request->facultyid)
            ->update(['Faculty_Department_id' => $request->updatedFacultyDepartmentId,
            'Faculty_Course_id' => $request->updatedFacultyCourseId,
            'Faculty_username' => $request->updatedFacultyName]);
        return redirect()->route('view.faculty');
    }

    public function DeleteFaculty($id){
        $useridfromfaculty = faculty::where('Faculty_id','=',$id)->first();
        $Uid = $useridfromfaculty->Faculty_User_id;
        $deletefaculty = faculty::where('Faculty_id','=',$id)->delete();
        $deleteuser = User::where('id','=',$Uid)->delete();
        return redirect()->route('view.faculty');
    }

}
