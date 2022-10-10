<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student_tbl;
use DB;

class CseController extends Controller
{
    public function cse(){
        $result=DB::table('student_tbls')->where(['student_department'=> 'CSE'])->get();

        return view('admin.cse',compact('result'));
    }
}
