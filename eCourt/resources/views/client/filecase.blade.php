@extends('layouts.client_profile_theme')
@section('content')

<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Case Filing Form</div>
                <div class="card-body">
                <form action="{{route('client.case.request')}}" method="post"  enctype="multipart/form-data" class='container'>
                    @csrf
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlInput1" class="col-sm-4">Case Filing Date</label>
                      <div class="col-sm-8">
                        <input type="date" placeholder="Date" class="input" cols="10" style="width: 400px;" name='date_of_filing'>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlInput1"  class="col-sm-4">Petitioner Name</label>
                      <div class="col-sm-8">
                         <input type="text" class="form-control" id="exampleFormControlInput1"  name='petitioner_name'>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Case type</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="exampleFormControlSelect1" name='case_type'>
                            <option value="type">Select case type</option>
                            <option value="Civil">Civil Case</option>
                            <option value="Criminal">Criminal Case</option>
                            <option value="Family">Family Case</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Select Lawyer</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="exampleFormControlSelect1" name='lawyer_name'>
                            @foreach($lawyers as $lawyer)
                            <option value={{$lawyer->name}}> {{$lawyer->name}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Case Description</label>
                      <div class="col-sm-8">
                        <input type="text"  class="form-control" id="exampleFormControlInput1"  name='case_description'>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Respondent Name:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name='respondent_name'>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Respondent Address:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name='respondent_address'>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Respondent Phone Number:</label>
                      <div class="col-sm-8">
                         <input type="text" class="form-control" id="exampleFormControlInput1"  name='respondent_phonenumber'>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="exampleFormControlSelect1"  class="col-sm-4">Upload Case relevent Documents:</label>
                      <div class="col-sm-8">
                        <input type="file" id="docs" name="case_document"  class="fileupload">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
               </div>
            </div>
         </div>
    </div>
</div>
@endsection
