@extends('layouts.client_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Client Dashboard</h4>

<div class="container mt-5">
    <div class="row justify-content-start" style="padding-left:4%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <form action="{{route('client.case.closed')}}" method="post"  enctype="multipart/form-data" class='container'>
                    @csrf
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Case Number<span class="required">*</span></label>
                      <div class="col-sm-8">
                        <input type="text"  class="form-control" id="exampleFormControlInput1"  name='case_number'>
                      </div>
                    </div>
                    <div>@error('case_number')<span class="text-danger error">{{$message}}</span>@enderror</div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Reason<span class="required">*</span></label>
                      <div class="col-sm-8">
                      <textarea class="form-control" id="reason" name="reason" rows="3"></textarea>
                      </div>
                    </div>
                    <div>@error('reason')<span class="text-danger error">{{$message}}</span>@enderror</div>

                    <button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
               </div>
            </div>
         </div>
    </div>
</div>

@include('client.clientsidebar')
@endsection
