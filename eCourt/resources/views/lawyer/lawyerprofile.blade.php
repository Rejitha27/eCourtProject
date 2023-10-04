@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<div class="container mt-10" style="padding-left: 10%; padding-top: 3%">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="team-img position-relative" >
                <img src="{{asset('storage/eCourt/'.auth('lawyer')->user()->profile_photo)}}" width="300" height="300" id="clientPhoto">
            </div>
            <h4 style="padding-left: 25%">{{auth('lawyer')->user()->name}}</h4>
            <h5 style="padding-left: 25%">{{auth('lawyer')->user()->case_type}}</h5>
            <div style="padding-left: 25%">
                <a href="{{route('edit.lawyer.profile')}}" method="get" class="btn btn-primary mt-2">Edit Profile</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group lawyer-fields row mb-3" >
                        <label  class="col-sm-4 col-form-label">Name</label>: {{auth('lawyer')->user()->name}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label  class="col-sm-4 col-form-label">Gender</label>: {{auth('lawyer')->user()->gender}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3">
                        <label for="qualification" class="col-sm-4 col-form-label">DateOfBirth</label>: {{\Carbon\Carbon::parse(auth('lawyer')->user()->date_of_birth)->format('d/m/Y')}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label for="qualification" class="col-sm-4 col-form-label">Qualification</label>:{{auth('lawyer')->user()->qualification}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label for="qualification" class="col-sm-4 col-form-label">BAR Number</label>: {{auth('lawyer')->user()->bar_number}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label for="qualification" class="col-sm-4 col-form-label">Practice Area</label>: {{auth('lawyer')->user()->practice_area}}
                    </div>
                    <div class="form-group lawyer-fields  row mb-3">
                        <label for="experience" class="col-sm-4 col-form-label">Experience</label>: {{auth('lawyer')->user()->experience}}
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email"  class="col-sm-4 col-form-label">Email</label>: {{auth('lawyer')->user()->email}}
                    </div>
                    <div class="form-group row mb-3">
                        <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>: {{auth('lawyer')->user()->phone_number}}
                    </div>
                    <div class="form-group row mb-3">
                        <label for="address" class="col-sm-4 col-form-label">Address</label>: {{auth('lawyer')->user()->address}}
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-4 col-form-label" for="customFile">Id Proof</label>:{{auth('lawyer')->user()->id_proof}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('lawyerPhoto')
                .attr(src,e.target.result)
                .width(100)
                .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@include('lawyer.lawyersidebar')
@endsection
