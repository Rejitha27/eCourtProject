@extends('layouts.admin_profile_theme')
@section('content')



@foreach($lawyers as $lawyer)
<div class="row"  style="padding-top: 1%; padding-bottom: 1%; border-style: solid; margin-top: 2%; margin-left: 1%; margin-right: 1%;">


        <div class="col-lg-2" style="display: inline-block;">
        @if($lawyer->photo)
                <img src="{{ asset('assets/img/' . $lawyer->photo)}}" width="100" height="100" alt="{{$lawyer->name}}">
                @else
                no photo
                @endif
            <h5 class="mb-4 px-4">{{$lawyer->name}}</h5>
            <p class="mb-4 px-4"> {{$lawyer->qualification}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Practicearea</h5>
            <p class="mb-4 px-4"> {{$lawyer->practice_area}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">Experiences</h5>
            <p class="mb-4 px-4"> {{$lawyer->experiences}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4"> Email</h5>
            <p class="mb-4 px-4"> {{$lawyer->email}}</p>
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <h5 class="mb-4 px-4">contact</h5>

            <p class="mb-4 px-4"> {{$lawyer->phone_number}}</p>
        </div>



    </div>

@endforeach

@endsection
