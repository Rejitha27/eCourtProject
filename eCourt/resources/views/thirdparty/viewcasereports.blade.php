@extends('layouts.thirdparty_profile_theme')
@section('content')

<h4 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Thirdparty Dashboard</h4>


<iframe src="{{asset('storage/ecourt/'.$casereport)}}" id="firstiframe" >
</iframe>

@include('thirdparty.thirdpartysidebar')
@endsection
