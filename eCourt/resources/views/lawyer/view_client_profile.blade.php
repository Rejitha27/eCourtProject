@extends('layouts.lawyer_profile_theme')
@section('content')

<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="team-img position-relative" style="padding-top: 25%">
                <img src="{{asset('storage/eCourt/'.$client->photo)}}" width="300" id="clientPhoto">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Details</div>
                <div class="card-body">
                    <div class="form-group lawyer-fields row mb-3" >
                        <label  class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"  name="name" value="{{$client->name}}" disabled>
                        </div>
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label  class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"  name="gender" value="{{$client->gender}}" disabled>
                        </div>
                    </div>
                    <div class="form-group lawyer-fields row mb-3">
                        <label for="qualification" class="col-sm-4 col-form-label">DateOfBirth</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"  name="dateOfBirth" value="{{$client->date_of_birth}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email"  class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" value="{{$client->email}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{$client->phone_number}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="address" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="address" name="address" rows="3" disabled>{{$client->address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-4 col-form-label" for="customFile">Id Proof</label>
                        <div class="col-sm-8">
                            <img src="{{asset('storage/eCourt/'.$client->id_proof)}}" width="80" id="clientIdProof">
                        </div>
                    </div>

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
                $('clientIdProof')
                    .attr(src,e.target.result)
                    .width(100)
                    .height(100);
                $('clientPhoto')
                .attr(src,e.target.result)
                .width(100)
                .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection


