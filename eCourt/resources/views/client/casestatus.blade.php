@extends('layouts.client_profile_theme')
@section('content')
<form action="{{route ('closerequest',encrypt($client->lawyer_name))}}" method="get">
    <div class="container"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 10%; margin-right: 12%;">
        <div class="col-lg-2" style="display: inline-block;">
            <label for="exampleFormControlInput1">Case Number </label>
            <div><h5> {{$client->case_number}} </h5></div>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <label for="exampleFormControlInput1">Lawyer Name </label>
            <div><h5> {{$client->lawyer_name}} </h5></div>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
        <label for="exampleFormControlInput1">Case Status </label>
            @php
                if ($client->case_status == 1) {
                    $var = "Active";
                } else {
                    $var = "Closed";
                }
            @endphp
            <div><h5> {{ $var }} </h5></div>
        </div>
        <div class="col-lg-4" style="display: inline-block; padding-right: 5%;">
            <button type="submit" class="btn btn-primary mt-4">CLOSE REQUEST</button>
        </div>
    </div>
</form>
@endsection
