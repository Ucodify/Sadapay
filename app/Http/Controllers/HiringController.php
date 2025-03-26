<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiringController extends Controller
{
    public function index(){
        return view('hiring'); 
    }
}
