@extends('layouts.lawyer_profile_theme')
@section('content')

<!--Lawyer Section Starts-->
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
    <div class="col-lg-1" style="display: inline-block;">
        <h5 class="mb-4 px-4">Case Number</h5>
    </div>
    <div class="col-lg-3" style="display: inline-block; padding-left: 2%;">
        <h5 class="mb-2 px-4">Client Name</h5>
        <p class="mb-3 px-4">Case Type</p>
    </div>
    <div class="col-lg-5" style="display: inline-block; border-style: ridge;">
        <h5 class="mb-4 px-4"> Complaint........</h5>
    </div>
    <div class="col-lg-1" style="display: inline-block; padding-left: 2%; padding-top: 2%;">
        <a href="" class="btn btn-info mt-2">Case Report</a>
    </div>
    <div class="col-lg-1" style="display: inline-block; padding-left: 2%; padding-top: 2%;">
        <a href="" class="btn btn-success mt-2">Forward</a>
    </div>
</div>

<!--Lawyer Section Ends-->

@endsection
