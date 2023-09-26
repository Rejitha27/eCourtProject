@extends('layouts.lawyer_profile_theme')
@section('content')

<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="team-img position-relative" style="padding-top: 25%">
                <img src="{{asset('storage/eCourt/'.$lawyer->profile_photo)}}" width="300" id="lawyerPhoto">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lawyer Details</div>
                <div class="card-body">
                    <div class="form-group lawyer-fields row mb-3" >
                        <label  class="col-sm-4 col-form-label">Name</label>: {{$lawyer->name}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label  class="col-sm-4 col-form-label">Gender</label>: {{$lawyer->gender}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3">
                        <label for="qualification" class="col-sm-4 col-form-label">DateOfBirth</label>: {{$lawyer->date_of_birth}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label for="qualification" class="col-sm-4 col-form-label">Qualification</label>: {{$lawyer->qualification}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label for="qualification" class="col-sm-4 col-form-label">BAR Number</label>: {{$lawyer->bar_number}}
                    </div>
                    <div class="form-group lawyer-fields row mb-3" >
                        <label for="qualification" class="col-sm-4 col-form-label">Practice Area</label>: {{$lawyer->practice_area}}
                    </div>
                    <div class="form-group lawyer-fields  row mb-3">
                        <label for="experience" class="col-sm-4 col-form-label">Experience</label>: {{$lawyer->experience}}
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email"  class="col-sm-4 col-form-label">Email</label>:  {{$lawyer->email}}
                    </div>
                    <div class="form-group row mb-3">
                        <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>:  {{$lawyer->phone_number}}
                    </div>
                    <div class="form-group row mb-3">
                        <label for="address" class="col-sm-4 col-form-label">Address</label>:  {{$lawyer->address}}
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-4 col-form-label" for="customFile">Id Proof</label>: {{$lawyer->id_proof}}
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
                $('lawyerPhoto')
                .attr(src,e.target.result)
                .width(100)
                .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection


