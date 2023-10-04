@extends('layouts.lawyer_profile_theme')
@section('content')

<!--Lawyer Section Starts-->
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
    <div class="col-lg-1" style="display: inline-block;">
        <label>ClientId</label>
        <h5 class="mb-4 px-4">{{$closing_requests->client_id}}</h5>
    </div>

    <div class="col-lg-5" style="display: inline-block; border-style: ridge;">
        <label>Reason</label>
        <h5 class="mb-4 px-4">{{$closing_requests->reason}}</h5>
    </div>

    <div class="col-lg-1" style="display: inline-block; padding-left: 2%; padding-top: 2%;">
        <a href="{{route('forward.closing.request',encrypt($closing_requests->id))}}"  method="get" class="btn btn-success mt-2">Forward</a>
    </div>
</div>

<!--Lawyer Section Ends-->

@endsection
