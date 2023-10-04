@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<h5 style="color:rgb(93, 15, 87); padding-left:16%; text-decoration:underline; padding-top: 1%">Uploaded Documents</h5>

@foreach ($case_documents as $case_document)
<div class="container mt-10">
    <div class="row justify-content-center" style="padding-top: 5%">
        <div class="col-lg-5" style="display: inline-block;">
            <input type="text" class="form-control"  name="case_document" value="{{$case_document->case_document}}" disabled>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <a href="{{route('docs.iframe.view',encrypt($case_document->case_document))}}" method="get"  class="btn btn-success mt-2">View Document</a>
        </div>
    </div>
</div>
@endforeach

@include('lawyer.lawyersidebar')
@endsection
