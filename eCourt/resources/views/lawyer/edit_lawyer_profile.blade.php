@extends('layouts.lawyer_profile_theme')
@section('content')

<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lawyer Details</div>
                <div class="card-body">
                    <form action="{{route('update.lawyer.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{encrypt($lawyer->id)}}"/>
                        <div class="form-group lawyer-fields row mb-3" >
                            <label for="qualification" class="col-sm-4 col-form-label">Qualification</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="qualification">
                                    <option value="{{$lawyer->qualification}}" name="">{{$lawyer->qualification}}</option>
                                    <option value="BALLB" name="BALLB">BA LLB</option>
                                    <option value="LLM" name="LLM" >LLM</option>
                                    <option value="LLD" name="LLD">LLD</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" >
                            <label for="practice_area" class="col-sm-4 col-form-label">Practice Area</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="practice_area">
                                    <option value="{{$lawyer->practice_area}}" name="">{{$lawyer->practice_area}}</option>
                                    <option value="civillaw" name="civillaw">Civil Law</option>
                                    <option value="criminallaw" name="criminallaw">Criminal Law</option>
                                    <option value="familylaw" name="familylaw">Family Law</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields  row mb-3">
                            <label for="experience" class="col-sm-4 col-form-label">Experience</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="experience" name="experience" value="{{$lawyer->experience}}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email"  class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" value="{{$lawyer->email}}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{$lawyer->phone_number}}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="address" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="address" name="address" rows="3">{{$lawyer->address}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label" for="customFile">Upload profile photo</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="customFile" name="profile_photo" />
                                <img src="{{asset('storage/eCourt/'.$lawyer->profile_photo)}}" width="80" id="lawyerPhoto">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label" for="customFile">Upload id proof</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="customFile" name="id_proof"/>
                                <img src="{{asset('storage/eCourt/'.$lawyer->id_proof)}}" width="80" id="lawyerIdProof">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
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
                $('lawyerIdProof')
                    .attr(src,e.target.result)
                    .width(100)
                    .height(100);
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
