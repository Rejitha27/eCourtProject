@extends('layouts.client_profile_theme')
@section('content')
<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
<!-- <form action="{{route('client')}}" method="get" > -->
    @csrf
<div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                <h5 class="mb-2 px-4">{{auth('client')->user()->name}}</h5>
                <p class="mb-3 px-4">{{auth('client')->user()->email}}</p>
                <div class="team-img position-relative">
                    <img class="img-fluid" src="assets/img/team-7.png" alt="">
                </div>
            </div>
        </div>
        <div  class="col-sm-6">
            <div class="row" style="padding-top: 25%;">
                <div class="col-sm-4">
                <div class="form-group">
                        <label for="exampleFormControlInput1">Name: </label>
                        <input type=text value="{{auth('client')->user()->name}}" name='name'>
                        </div>
                </div>
                <div class="form-group">
                            <label for="exampleFormControlInput1">Address:</label>
                            <input type=text value="{{auth('client')->user()->Address}}" name='Address'>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Date of birth:</label>
                            <input type=text value="{{auth('client')->user()->Dob}}" name='Dob'>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gender:</label>
                            <input type=text value="{{auth('client')->user()->Gender}}" name='Gender'>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">email:</label>
                            <input type=text value="{{auth('client')->user()->email}}" name='email'>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Password:</label>
                            <input type=text value="{{auth('client')->user()->Password}}" name='Password'>
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Phone:</label>
                            <input type=text value="{{auth('client')->user()->Phone}}" name='Phone'>

                        </div>
                        <div class="form-group">                    
                    <button type="submit" class="btn btn-primary mt-4">SAVE</button>
                  </div>
        </div>
</div>

@endsection