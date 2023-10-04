@extends('layouts.client_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Client Dashboard</h4>
<div class="container mt-10">
  <div class="row justify-content-start" style="padding-left:6%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Case Filing Form</div>
                <div class="card-body">
                <form action="{{route('submit.filecase')}}" method="POST"  enctype="multipart/form-data" class='container'>
                    @csrf
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlInput1" class="col-sm-4">Case Filing Date<span class="required">*</span></label>
                      <div class="col-sm-8">
                        <input type="date" placeholder="Date" class="input" cols="10" style="width: 400px;" name='date_of_filing' >
                        <div>@error('date_of_filing')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlInput1"  class="col-sm-4">Petitioner Name<span class="required">*</span></label>
                      <div class="col-sm-8">
                         <input type="text" class="form-control" id="exampleFormControlInput1"  name='petitioner_name'>
                         <div>@error('petitioner_name')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Case type<span class="required">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-control" id="exampleFormControlSelect1" name='case_type'>
                            <option value="type">Select case type</option>
                            <option value="Civil">Civil Case</option>
                            <option value="Criminal">Criminal Case</option>
                            <option value="Family">Family Case</option>
                        </select>
                        <div>@error('case_type')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Select Lawyer<span class="required">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-control" id="exampleFormControlSelect1" name='lawyer_name'>
                            <option value="">Select Lawyer</option>
                            @foreach($lawyers as $lawyer)
                            <option value="{{$lawyer->name}}"> {{$lawyer->name}}</option>
                            @endforeach
                        </select>
                        <div>@error('lawyer_name')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Case Description<span class="required">*</span></label>
                      <div class="col-sm-8">
                         <textarea class="form-control" id="reason" name="case_description" rows="3"></textarea>
                         <div>@error('case_description')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Respondent Name:<span class="required">*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name='respondent_name'>
                        <div>@error('respondent_name')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Respondent Address:<span class="required">*</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" id="respondent_address"  name='respondent_address' rows="3"></textarea>
                        <div>@error('respondent_address')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Respondent Phone Number:<span class="required">*</label>
                      <div class="col-sm-8">
                         <input type="text" class="form-control" id="exampleFormControlInput1"  name='respondent_phonenumber'>
                         <div>@error('respondent_phonenumber')<span class="text-danger error">{{$message}}</span>@enderror</div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Upload Case relevent Documents:</label>
                      <div class="col-sm-8">
                        <input type="file" id="docs" name="case_document"  class="fileupload">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
                </form>
               </div>
            </div>
         </div>
    </div>
</div>

@include('client.clientsidebar')
@endsection
