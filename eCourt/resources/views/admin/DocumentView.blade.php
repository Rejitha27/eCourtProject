@extends('layouts.admin_profile_theme')
@section('content')
<!--ADMIN Section Starts-->
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
        <div class="col-lg-3" style="display: inline-block;">
        <form method="post" action="{{ route('document')}}" >@csrf
            <h5 class="mb-4 px-4">Case Number</h5>
            <input type="text" class="form-control border-0 p-4" name="casenumber" placeholder="typehere" required="required" />
            <input type="submit" class="btn btn-primary " value="view Document">
        </div>

        <div class="col-lg-1" style="display: inline-block; padding-left: 2%;">

        </div>

    </div>

<!--Admin Section Ends-->
@endsection
