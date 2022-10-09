<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EeeController extends Controller
{
    public function eee(){
        return view('admin.eee');
    }
}
