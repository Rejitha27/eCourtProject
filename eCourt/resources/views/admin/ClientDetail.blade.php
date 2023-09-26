use pagination;
@extends('layouts.admin_profile_theme')
@section('content')

<div class="row">

<table class="table table-bordered" style="margin-top: 1%; margin-left: 1%; margin-right: 1%;padding-left: 2%; padding-right: 2%">
    <thead>
        <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>DateOfBirth</th>
        <th>Email</th>
        <th>PhoneNumber</th>

</tr>
    </thead>
    @foreach($clients as $client)
    <tbody>
        <tr>

            <td> @if($client->photo)
                <img src="{{ asset('assets/img/' . $client->photo)}}" width="70" height="70" alt="{{$client->name}}">
                @else
                no photo
                @endif
            </td>
            <td>{{$client->name}}</td>
            <td>{{$client->date_of_birth}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone_number}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>



@endsection
