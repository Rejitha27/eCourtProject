@extends('layouts.lawyer_profile_theme')
@section('content')

@foreach ($case_documents as $case_document)
<div class="container mt-10">
    <div class="row justify-content-center" style="padding-top: 5%">
        <div class="col-lg-5" style="display: inline-block;">
            <input type="text" class="form-control"  name="case_document" value="{{$case_document->case_document}}" disabled>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <a href="{{route('download.case.documents',encrypt($case_document->case_document))}}" method="get"  class="btn btn-info mt-2">Download</a>
        </div>
    </div>
</div>
@endforeach

@endsection
