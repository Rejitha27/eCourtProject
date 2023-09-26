@extends('layouts.login_theme')
@section('content')

<!-- Appointment Start -->
<div class="loginbackground">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Login Here</h1>
                        <form action="{{route('do.lawyer.login')}}" method='POST'>
                            @csrf
                            <table style="text-align: center;  margin-left: auto;margin-right: auto;  ">
                                <tr><td><input type="email" name="user_name" class="form-control border-0 p-4" placeholder="Your UserName" required="required" /></td></tr>
                                <tr><td><input type="password" name="password"class="form-control border-0 p-4" placeholder="Your Password" required="required" /></td></tr>
                                <tr><td id="id1"><button id="id1" type="submit">Login</button></td> </tr>
                                <tr><td><span>Don't have an account? <a href="">Signup</a></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection
