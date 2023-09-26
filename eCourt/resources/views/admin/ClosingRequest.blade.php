@extends('layouts.admin_profile_theme')
@section('content')
<!--admin Section Starts-->
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
<form>
        <div class="col-lg-1" style="display: inline-block;">
            <h5 class="mb-4 px-4">Case Number</h5>
            <input type="text" class="form-control border-0 p-4" name="casenumber" placeholder="CaseNumber" required="required" disabled/>

        </div>
        <div class="col-lg-3" style="display: inline-block; padding-left: 2%;">
            <h5 class="mb-2 px-4">Client Name</h5>
            <input type="text" class="form-control border-0 p-4" name="name" placeholder="name" required="required" disabled />

        </div>
        <div class="col-lg-3" style="display: inline-block; padding-left: 2%;">
            <h5 class="mb-2 px-4">Reasons</h5>
            <input type="textarea" class="form-control border-0 p-4" name="reason"  required="required"  disabled/>

        </div>


        <div class="col-lg-2" style="display: inline-block; padding-left: 2%;">
            <a href="" class="btn btn-success mt-2">Accept</a>
        </div>
        <div class="col-lg-2" style="display: inline-block; padding-left: 2%;">
            <a href="" class="btn btn-danger mt-2">Reject</a>
        </div>
</form>
    </div>

<!--admin Section Ends-->

@endsection
