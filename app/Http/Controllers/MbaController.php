<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaController extends Controller
{
    public function mba(){
        return view('admin.mba');
    }
}
