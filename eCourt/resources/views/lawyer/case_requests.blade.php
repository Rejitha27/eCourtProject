@extends('layouts.lawyer_profile_theme')
@section('content')

<!--Lawyer Section Starts-->
@foreach ($requests as $request)

<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
    {{-- <div class="col-lg-3" style="display: inline-block; padding-left: 2%;">
        <h5 class="mb-2 px-4">{{Client Name}}</h5>
        <p class="mb-3 px-4">Case Type</p>
        <a href="" class="btn btn-primary mt-2">View Client Details</a>
    </div> --}}
    <div class="col-lg-2" style="display: inline-block; padding-left: 2%;">
        <label>CaseType</label>
        <p class="mb-4 px-4"> {{$request->case_type}} Case</p>

    </div>
    <div class="col-lg-5" style="display: inline-block; border-style: ridge;">
        <label>CaseDescription</label>
        <p class="mb-4 px-4"> {{$request->case_description}}</p>
    </div>
    <div class="col-lg-1" style="display: inline-block; padding-left: 2%;">
        <a href="{{route('view.case.documents',encrypt($request->id))}}" method="get"  class="btn btn-info mt-2">Documents</a>
    </div>
    <div class="col-lg-1" style="display: inline-block; padding-left: 5%;">
        <input type="hidden" name="id" value="{{encrypt($request->id)}}"/>
        <a href="{{route('accept.case.request',encrypt($request->id))}}" class="btn btn-success mt-2">Accept</a>
    </div>
    <div class="col-lg-1" style="display: inline-block; padding-left: 5%;">
        <a href="{{route('reject.case.request',encrypt($request->id))}}" class="btn btn-danger mt-2">Reject</a>
    </div>
</div>
@endforeach

@endsection
