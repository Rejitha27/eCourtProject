<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Admin Authentication
    public function adminLogin()
    {
        return view('admin.admin_login');

    }
    public function doAdminLogin(Request $request)
    {
        if(auth()->guard('admin')->attempt(['email'=>$request->user_name,'password'=>$request->password]))
        {
            return redirect(route('admin.dashboard'));
        }
        else
        {
            return redirect(route('admin.login'));
        }
    }


    // Client Authentication
    public function clientLogin()
    {
        return view('client.client_login');
    }
    public function doClientLogin(Request $request)
    {
        if(auth()->guard('client')->attempt(['email'=>$request->user_name,'password'=>$request->password]))
        {
            return redirect(route('client.dashboard'));
        }
        else
        {
            return redirect(route('client.login'));
        }
    }


    // Lawyer Authentication
    public function lawyerLogin()
    {
        return view('lawyer.lawyer_login');
    }
    public function doLawyerLogin(Request $request)
    {
        if(auth()->guard('lawyer')->attempt(['email'=>$request->user_name,'password'=>$request->password]))
        {
            return redirect(route('lawyer.dashboard'));
        }
        else
        {
            return redirect(route('lawyer.login'));
        }
    }


    // Thirdparty Authentication
    public function thirdpartyLogin()
    {
        return view('thirdparty.thirdparty_login');
    }
    public function doThirdpartyLogin(Request $request)
    {
        if(auth()->guard('thirdparty')->attempt(['email'=>$request->user_name,'password'=>$request->password]))
        {
            return redirect(route('thirdparty.dashboard'));
        }
        else
        {
            return redirect(route('thirdparty.login'));
        }
    }


}
