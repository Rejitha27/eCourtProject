@extends('layouts.admin_profile_theme')
@section('content')

<h4 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Admin Dashboard</h4>
<div class="container" style="padding-left:10%; width:100%; height: 500px;">
  <p>
    <img src="{{asset('storage/ecourt/m1.jpg')}}">
  </p>
  <p>Name</p>


</div>

@include('admin.adminsidebar')


@endsection
