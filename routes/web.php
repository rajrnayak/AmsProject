<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[LoginController::class,'LoadLogin']);
Route::get('/login',[LoginController::class,'Login'])->name('getLogin');
Route::get('/postlogin',[LoginController::class,'PostLogin'])->name('postLogin');
Route::get('/logout',[LoginController::class,'Logout'])->name('Logout');

Route::group(['prefix' => 'admin','middleware' => ['web','isAdmin']],function(){

    Route::get('/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/department/add-department',[AdminController::class,'AddDepartment'])->name('add.department');
    Route::get('/department/insert-department',[AdminController::class,'InsertDepartment'])->name('insert.department');
    Route::get('/department/view-department',[AdminController::class,'ViewDepartment'])->name('view.department');
    Route::get('/department/edit-department/{id}',[AdminController::class,'EditDepartment'])->name('edit.department');
    Route::get('/department/update-department',[AdminController::class,'UpdateDepartment'])->name('update.department');
    Route::get('/department/delete-department/{id}',[AdminController::class,'DeleteDepartment'])->name('delete.department');

    Route::get('/course/add-course',[AdminController::class,'AddCourse'])->name('add.course');
    Route::get('/course/insert-course',[AdminController::class,'InsertCourse'])->name('insert.course');
    Route::get('/course/view-course',[AdminController::class,'ViewCourse'])->name('view.course');
    Route::get('/course/edit-course/{id}',[AdminController::class,'EditCourse'])->name('edit.course');
    Route::get('/course/update-course',[AdminController::class,'UpdateCourse'])->name('update.course');
    Route::get('/course/delete-course/{id}',[AdminController::class,'DeleteCourse'])->name('delete.course');

    Route::get('/semester/add-semester',[AdminController::class,'AddSemester'])->name('add.semester');
    Route::get('/semester/insert-semester',[AdminController::class,'InsertSemester'])->name('insert.semester');
    Route::get('/semester/view-semester',[AdminController::class,'ViewSemester'])->name('view.semester');
    Route::get('/semester/edit-semester/{id}',[AdminController::class,'EditSemester'])->name('edit.semester');
    Route::get('/semester/update-semester',[AdminController::class,'UpdateSemester'])->name('update.semester');
    Route::get('/semester/delete-semester/{id}',[AdminController::class,'DeleteSemester'])->name('delete.semester');

    Route::get('/division/add-division',[AdminController::class,'AddDivision'])->name('add.division');
    Route::get('/semester/get-semester-by-course-id/{id}',[AdminController::class,'GetSemesterByCourseId']);
    Route::get('/division/insert-division',[AdminController::class,'InsertDivision'])->name('insert.division');
    Route::get('/division/view-division',[AdminController::class,'ViewDivision'])->name('view.division');
    Route::get('/division/edit-division/{id}',[AdminController::class,'EditDivision'])->name('edit.division');
    Route::get('/division/update-division',[AdminController::class,'UpdateDivision'])->name('update.division');
    Route::get('/division/delete-division/{id}',[AdminController::class,'DeleteDivision'])->name('delete.division');

    Route::get('/faculty/add-faculty',[AdminController::class,'AddFaculty'])->name('add.faculty');
    Route::get('/course/get-course-by-dept-id/{id}',[AdminController::class,'GetCourseByDepartmentId']);
    Route::get('/faculty/insert-faculty',[AdminController::class,'InsertFaculty'])->name('insert.faculty');
    Route::get('/faculty/view-faculty',[AdminController::class,'ViewFaculty'])->name('view.faculty');
    Route::get('/faculty/edit-faculty/{id}',[AdminController::class,'EditFaculty'])->name('edit.faculty');
    Route::get('/faculty/update-faculty',[AdminController::class,'UpdateFaculty'])->name('update.faculty');
    Route::get('/faculty/delete-faculty/{id}',[AdminController::class,'DeleteFaculty'])->name('delete.faculty');

    Route::get('/student/add-student',[AdminController::class,'AddStudent'])->name('add.student');
    Route::get('/division/get-division-by-semester-id/{id}',[AdminController::class,'GetDivisionBySemesterId']);
    Route::get('/student/insert-student',[AdminController::class,'InsertStudent'])->name('insert.student');
    Route::get('/student/view-student',[AdminController::class,'ViewStudent'])->name('view.student');
    Route::get('/student/edit-student/{id}',[AdminController::class,'EditStudent'])->name('edit.student');
    Route::get('/student/update-student',[AdminController::class,'UpdateStudent'])->name('update.student');
    Route::get('/student/delete-student/{id}',[AdminController::class,'DeleteStudent'])->name('delete.student');

    // profile page route
    Route::get('/profile',[AdminController::class,'ViewAdminProfile'])->name('view.profile');

});

Route::group(['prefix' => 'faculty','middleware' => ['web','isFaculty']],function(){

    Route::get('/dashboard',[FacultyController::class,'FacultyDashboard'])->name('faculty.dashboard');

    Route::get('/assignment',[FacultyController::class,'TaskPage'])->name('task.page');
    Route::get('/task-allot',[FacultyController::class,'TaskAllotPage'])->name('task_allot.page');
    Route::get('/history',[FacultyController::class,'HistoryPage'])->name('history.page');

    // dependent drop down for faculty panel
    Route::get('/course/get-course-by-dept-id/{id}',[AdminController::class,'GetCourseByDepartmentId']);

    Route::get('/semester/get-semester-by-course-id/{id}',[AdminController::class,'GetSemesterByCourseId']);

    Route::get('/division/get-division-by-semester-id/{id}',[AdminController::class,'GetDivisionBySemesterId']);

    // dependent drop down for faculty panel

});

Route::group(['prefix' => 'student','middleware' => ['web','isStudent']],function(){

    Route::get('/dashboard',[StudentController::class,'StudentDashboard'])->name('student.dashboard');


});
