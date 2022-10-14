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
    // Student delete method here
    public function studentdelete($student_id){
        DB::table('student_tbls')->where('student_id',$student_id)->delete();
        return Redirect::to('/allstudent');
}
    // Student View method here
    public function studentview($student_id){
        $result=DB::table('student_tbls')->select('*')->where('student_id',$student_id)->first();

        // echo "<pre>";
        // print_r($result);
        // "</pre>";
        return view('admin.view',['result_key'=>$result]);
}
    // Student Edit method here
    public function studentedit($student_id){
        $result=DB::table('student_tbls')->select('*')->where('student_id',$student_id)->first();

        // echo "<pre>";
         //print_r($result);
         //"</pre>";
        return view('admin.student_edit',['result_key'=>$result]);

    }
    //Student update part are here
    public function studentupdate(Request $request, $student_id ){

        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathersname']=$request->student_fathersname;
        $data['student_mothersname']=$request->student_mothersname;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=$request->student_password;
        $data['student_department']=$request->student_department;
        $data['student_admissionyear']=$request->student_admissionyear;


        $result=DB::table('student_tbls')->where('student_id',$student_id)->update($data);
        Session::put('exception',' Student Updated Successfully.');
        return Redirect::to('/allstudent');


        //return view('admin.student_edit',['result_key'=>$result]);







}
}
