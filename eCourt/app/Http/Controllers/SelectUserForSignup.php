<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectUserForSignup extends Controller
{
    public function selectUser(){
        return view('layouts.userselectorforsignup');
    }
    public function lawyerSignup(){
        return view('layouts.lawyersignup');
    }
    public function clientSignup(){
        return view('layouts.clientsignup');
    }
    public function thirdpartySignup(){
        return view('layouts.thirdpartysignup');
    }
}
