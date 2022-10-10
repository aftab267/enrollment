<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_tbl;

class AllstudentsController extends Controller
{
    public function allstudent(){
        $result=student_tbl::all();
        return view('admin.allstudent',compact('result'));
}
}
