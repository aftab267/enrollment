<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddstudentController;
use App\Http\Controllers\AllstudentsController;
use App\Http\Controllers\TuitionController;
use App\Http\Controllers\CseController;
use App\Http\Controllers\BbaController;
use App\Http\Controllers\EceController;
use App\Http\Controllers\EeeController;
use App\Http\Controllers\MbaController;
use App\Http\Controllers\TeacherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Logout
Route::get('/logout',[AdminController::class,'logout']);

Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//Admin login
Route::post('/adminlogin',[AdminController::class,'login_dashboard']);
Route::post('/studentlogin',[AdminController::class,'student_login_dashboard']);
Route::post('/student_dashboard',[AdminController::class,'student_dashboard']);

Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard']);
Route::get('/viewprofile',[AdminController::class,'viewprofile']);
Route::get('/setting',[AdminController::class,'setting']);

//student
Route::get('/addstudent',[AddstudentController::class,'addstudent']);
Route::post('/save_student',[AddstudentController::class,'savestudent']);
Route::get('/student_delete/{student_id}',[AllstudentsController::class,'studentdelete']);
Route::get('/student_view/{student_id}',[AllstudentsController::class,'studentview']);
Route::get('/student_edit/{student_id}',[AllstudentsController::class,'studentedit']);
Route::post('/update_student/{student_id}',[AllstudentsController::class,'studentupdate']);

//Allstudent
Route::get('/allstudent',[AllstudentsController::class,'allstudent']);
//tuition fee
Route::get('/tuitionfee',[TuitionController::class,'tuitionfee']);
//cse
Route::get('/cse',[CseController::class,'cse']);
//bba
Route::get('/bba',[BbaController::class,'bba']);
//ece
Route::get('/ece',[EceController::class,'ece']);
//eee
Route::get('/eee',[EeeController::class,'eee']);
//mba
Route::get('/mba',[MbaController::class,'mba']);
//allteachers
Route::get('/addteachers',[TeacherController::class,'addteachers']);
Route::get('/allteachers',[TeacherController::class,'allteachers']);
Route::post('/save_teacher',[TeacherController::class,'saveteacher']);
