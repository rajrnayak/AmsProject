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

    Route::get('/dashboard',[AdminController::class,'AdminDashboard'])->name('Admin.dashboard');
    Route::get('/department/add-department',[AdminController::class,'AddDepartment'])->name('add.department');
    Route::get('/department/view-department',[AdminController::class,'ViewDepartment'])->name('view.department');
    Route::get('/department/insert-department',[AdminController::class,'InsertDepartment'])->name('insert.department');
    Route::get('/department/edit-department/{id}',[AdminController::class,'EditDepartment'])->name('edit.department');
    Route::get('/department/update-department',[AdminController::class,'UpdateDepartment'])->name('update.department');
    Route::get('/department/delete-department/{id}',[AdminController::class,'DeleteDepartment'])->name('delete.department');


});

Route::group(['prefix' => 'faculty','middleware' => ['web','isFaculty']],function(){

    Route::get('/dashboard',[FacultyController::class,'FacultyDashboard'])->name('faculty.dashboard');

});

Route::group(['prefix' => 'student','middleware' => ['web','isStudent']],function(){

    Route::get('/dashboard',[StudentController::class,'StudentDashboard'])->name('student.dashboard');

});
