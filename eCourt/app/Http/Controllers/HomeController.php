<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('layouts.home');
    }

    public function signUp()
    {
        return view('layouts.signup');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function lawyerList()
    {
        return view('layouts.home');
    }
}
