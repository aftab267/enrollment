<?php

namespace App\Http\Controllers;
use App\Models\Admin_tbl;
use App\Models\student_tbl;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
Use Session;
Session_start();

class AdminController extends Controller
{
      //Logout
    public function logout(){
        session::put('admin_name',null);
        session::put('admin_id',null);
        return Redirect::to('/backend');

    }
    //Admin Dashboard
    public function login_dashboard(Request $request){
        //return view('admin.dashboard');
        $email= $request->admin_email;
        $password=$request->admin_password;
        $result=DB::table('admin_tbls')
        ->where('admin_email',$email)
        ->where('admin_password',$password)->first();

        if($result){
            Session::put('admin_email',$request->admin_email);
            Session::put('admin_id',$request->admin_id);
            return Redirect::to('/admin_dashboard');
        }else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        }
        if($result){
            return Redirect::to('/admin_dashboard');
        }else{
            return Redirect::to('/backend');
        }
    }
     //student Dashboard
     public function student_login_dashboard(Request $request){
        //return view('admin.dashboard');
        $email=$request->student_email;
        $password=$request->student_password;
        $result=DB::table('student_tbls')
        ->where('student_email',$email)
        ->where('student_password',$password)
        ->first();

        //  echo "<pre>";
        //  print_r($results);
        if($result){
            Session::put('student_email',$result->student_email);
            Session::put('student_id',$result->student_id);
            return Redirect::to('/student_dashboard');
        }else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');
        }



    }

    public function admin_dashboard(){
        return view('admin.dashboard');
    }
    //student login dashboard
    public function student_dashboard(){
        return view('student.dashboard');
    }
    // viewprofile page
    public function viewprofile(){
         return view('admin.view');
    }
    // setting page
    public function setting(){
        return view('admin.setting');
    }
}
