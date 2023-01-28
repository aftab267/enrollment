<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\teacher;
use Illuminate\Support\Facades\DB;
Use Session;
Session_start();

class TeacherController extends Controller
{
     // All teachers Show
    public function allteachers(){
        $result=teacher::all();
        return view('admin.allteachers',compact('result'));
    }
    public function addteachers(){
        return view('admin.add_teachers');
    }
    // save teacher
    public function saveteacher(Request $request){
        $request->validate([
            'teachers_name' => 'required',
            'teachers_phone' => 'required',
            'teachers_address' => 'required',
            'teachers_department' => 'required',
            'teachers_image' => 'required',
            
        ]);
        $data=$request->all();
        $teacher= new teacher();
        $teacher->teachers_name = $data['teachers_name'];
        $teacher->teachers_phone = $data['teachers_phone'];
        $teacher->teachers_address = $data['teachers_address'];
        $teacher->teachers_department = $data['teachers_department'];
        $teacher->teachers_image = $data['teachers_image'];
        //$student->save();

        if($request->hasfile('teachers_image')){
        $file=$request->file('teachers_image');
        $extention=$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('uploads/teacher/',$filename);
        $teacher->teachers_image=$filename;
        }
        $teacher->save();
        //return redirect()->back()->with('status','Student Added Successfully');
        //return $request;
            //$student->student_image='';

        Session::put('exception','Teacher Added Successfully');
        return Redirect::to('/addteachers');
       }



    }

