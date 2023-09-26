@extends('layouts.lawyer_profile_theme')
@section('content')

<!--Lawyer Section Starts-->
@foreach ($cases as $case)
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
    <div class="col-lg-2" style="display: inline-block;">
        <label>CaseNumber</label>
        <h5 class="mb-4 px-4">{{$case->case_number}}</h5>
    </div>
    <div class="col-lg-3" style="display: inline-block;">
        <h5 class="mb-2 px-4">{{$case->client_name}}</h5>
        <p class="mb-3 px-4">{{$case->case_type}} Case</p>
        <a href="" class="btn btn-primary mt-2">View Client Details</a>
    </div>
    <div class="col-lg-5" style="display: inline-block; border-style: ridge;">
        <label>Case Description</label>
        <p class="mb-4 px-4">{{$case->case_description}}</p>
    </div>
    <div class="col-lg-2" style="display: inline-block; padding-left: 2%;padding-top: 2%;">
        <a href="{{route('view.uploaded.reports',encrypt($case->id))}}" method="get"  class="btn btn-info mt-2" >Case Report</a>
    </div>
</div>
@endforeach
<!--Lawyer Section Ends-->
@endsection
