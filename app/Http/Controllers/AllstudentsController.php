<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\student_tbl;
use DB;
Use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudent(){
        $result=student_tbl::all();
        return view('admin.allstudent',compact('result'));
    }
    public function studentdelete($student_id){
        DB::table('student_tbls')->where('student_id',$student_id)->delete();
        return Redirect::to('/allstudent');

        // $result=student_tbl::all();
        // return view('admin.allstudent',compact('result'));
}
}
