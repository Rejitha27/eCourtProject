@extends('layouts.client_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Client Dashboard</h4>

<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Details</div>
                <div class="card-body">
                    <form action="{{route('update.client.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="email"  class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" value="{{auth('client')->user()->email}}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{auth('client')->user()->phone_number}}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="address" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="address" name="address" rows="3">{{auth('client')->user()->address}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label" for="customFile">Upload profile photo</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="customFile" name="profile_photo" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label" for="customFile">Upload id proof</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="customFile" name="id_proof"/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary " >SAVE</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('client.clientsidebar')
@endsection
