<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\department\DepartmentController;

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

Route::get('/login',[AuthController::class,'GetLogin'])/*->name('getLogin')*/;
// Route::get('/postlogin',[AuthController::class,'PostLogin'])->name('postLogin');

Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard']);

Route::get('/department/add-department',[DepartmentController::class,'AddDepartment']);
Route::get('/department/view-department',[DepartmentController::class,'ViewDepartment']);

