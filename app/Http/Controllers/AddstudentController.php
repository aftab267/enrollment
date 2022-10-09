<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Models\student_tbl;


class AddstudentController extends Controller
{
    public function addstudent(){
        return view('admin.addstudent');
    }
    public function savestudent(Request $request){
        $data=$request->all();
            $student= new student_tbl();
            $student->student_name = $data['student_name'];
            $student->student_roll = $data['student_roll'];
            $student->student_fathersname = $data['student_fathersname'];
            $student->student_mothersname = $data['student_mothersname'];
            $student->student_email = $data['student_email'];
            $student->student_phone = $data['student_phone'];
            $student->student_address = $data['student_address'];
            $student->student_image = $data['student_image'];
            $student->student_password = $data['student_password'];
            $student->student_department = $data['student_department'];
            $student->student_admissionyear = $data['student_admissionyear'];
            $student->save();
            //$message='Student Added Successfully.';
            return Redirect::to('/addstudent');
    }


}









