<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function contact(): string
    {
        return view('contact_page');
    }
    public function about(): string
    {
        return view('about_page');
    }
    public function help(): string
    {
        return view('help_page');
    }
}
