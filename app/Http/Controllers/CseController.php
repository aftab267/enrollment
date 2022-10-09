<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CseController extends Controller
{
    public function cse(){
        return view('admin.cse');
    }
}
