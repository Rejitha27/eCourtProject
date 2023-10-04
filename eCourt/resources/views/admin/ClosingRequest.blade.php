@extends('Layouts.admin_profile_theme')
@section('content')
<!--admin Section Starts-->
@foreach($requests as $request)
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
<form>


        <div class="col-lg-3" style="display: inline-block; padding-left: 2%;">
            <h5 class="mb-2 px-4">lawyer Name</h5>
            <input type="text" class="form-control border-0 p-4" name="name" value="{{$request->lawyer_name}}" required="required" disabled />

        </div>
        <div class="col-lg-3" style="display: inline-block; padding-left: 2%;">
            <h5 class="mb-2 px-4">Reasons</h5>
            <input type="textarea" class="form-control border-0 p-4" name="reason" value="{{$request->reason}}" required="required"  disabled/>

        </div>


        <div class="col-lg-2" style="display: inline-block; padding-left: 2%;">
            <a href="{{route('accept',encrypt($request->id))}}" class="btn btn-success mt-2">Accept</a>
        </div>
        <div class="col-lg-2" style="display: inline-block; padding-left: 2%;">
            <a href="" class="btn btn-danger mt-2">Reject</a>
        </div>
</form>
    </div>

<!--admin Section Ends-->
@endforeach
@endsection
