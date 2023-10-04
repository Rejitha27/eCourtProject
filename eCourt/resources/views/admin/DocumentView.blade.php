@extends('Layouts.admin_profile_theme')
@section('content')
<!--ADMIN Section Starts-->
@foreach($activecases as $activecase)
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
        <div class="col-lg-3" style="display: inline-block;">

            <h5 class="mb-4 px-4">Case Number</h5>
            <input type="text" class="form-control border-0 p-4" value="{{ $activecase->case_number}}" name="casenumber" placeholder="typehere" required="required" disabled/>
</div>
            <div class="col-lg-3" style="display: inline-block;">

            <p class="mb-4 px-4"> {{ $activecase->case_document}}</p>
        </div>
            <div class="col-lg-1" style="display: inline-block; padding-left: 2%;">
        <a href="{{ route('downloaddocument',encrypt($activecase->case_document))}}" method="get"  class="btn btn-info mt-2">download</a>
    </div>
        </div>




</div>
@endforeach

<!--Admin Section Ends-->
@endsection
