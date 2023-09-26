@extends('layouts.admin_profile_theme')
@section('content')
<!--ADMIN Section Starts-->
  <div class="col-lg-2" style="display: inline-block;">
  <a href="{{ asset('storage/ecourt/'.$document->documents) }}" download>Download Document</a>


    </div>


<!--Admin Section Ends-->
@endsection
