<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
