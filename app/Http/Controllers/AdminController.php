<?php

namespace App\Http\Controllers;
use App\Models\Admin_tbl;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function login_dashboard(Request $request){
        //return view('admin.dashboard');
        $email= $request->admin_email;
        $password=$request->admin_password;
        $result=DB::table('admin_tbls')
        ->where('admin_email',$email)
        ->where('admin_password',$password)->first();

        if($result){
            return Redirect::to('/admin_dashboard');
        }else{
            return Redirect::to('/backend');
        }
    }
    public function admin_dashboard(){
        return view('admin.dashboard');
    }
}
