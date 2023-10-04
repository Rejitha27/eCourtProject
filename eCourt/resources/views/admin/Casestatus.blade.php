@extends('Layouts.admin_profile_theme')
@section('content')

<!--admin Section Starts-->

@foreach($activeCases as $active)
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">

        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Case Number</h5>
            <p class="mb-4 px-4"> {{ $active->case_number}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Case Type</h5>
            <p class="mb-4 px-4"> {{ $active->case_type}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Client Name</h5>
            <p class="mb-4 px-4"> {{ $active->client_name}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Lawyer Name</h5>
            <p class="mb-4 px-4"> {{ $active->lawyer_name}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">status</h5>

            <p class="mb-4 px-4"> active</p>
        </div>



    </div>
    @endforeach


@foreach($closedCases as $closed)
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">

        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Case Number</h5>
            <p class="mb-4 px-4"> {{ $closed->case_number}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Case Type</h5>
            <p class="mb-4 px-4"> {{ $closed->case_type}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Client Name</h5>
            <p class="mb-4 px-4"> {{ $closed->client_name}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Lawyer Name</h5>
            <p class="mb-4 px-4"> {{ $closed->lawyer_name}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">status</h5>

            <p class="mb-4 px-4"> closed</p>
        </div>



    </div>
    @endforeach



<!--admin Section Ends-->
@endsection
