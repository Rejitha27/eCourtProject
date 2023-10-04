@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>
<h5 style="color:rgb(93, 15, 87); padding-left:16%; text-decoration:underline; padding-top: 1%">Case Reports</h5>

@foreach ($case_reports as $case_report)
<div class="container mt-10">
    <div class="row justify-content-center" style="padding-top: 5%">
        <div class="col-lg-5" style="display: inline-block;">
            <input type="text" class="form-control"  name="id_proof" value="{{$case_report->case_report}}" disabled>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <a href="{{route('docs.iframe.view',encrypt($case_report->case_report))}}" method="get"  class="btn btn-success mt-2">View Document</a>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <a href="{{route('download.case.reports',encrypt($case_report->case_report))}}" method="get"  class="btn btn-info mt-2">Download</a>
        </div>
    </div>
</div>
@endforeach

@include('lawyer.lawyersidebar')
@endsection
