<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view('Home');
    }
    public function About(){
        return view('About');
    }
}
