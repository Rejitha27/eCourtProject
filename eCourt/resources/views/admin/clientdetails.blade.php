@extends('layouts.admin_profile_theme')
@section('content')

@include('admin.adminsidebar')

 <h3 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Client Details</h3>
 <div class="container">

  <div class="card-body text-center" >

                <table id="example2" class="table table-bordered table-hover" style="margin:10%;">
                  <!-- foreach loop -->
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>DateOfBirth</th>
                    <th>Email</th>
                    <th>PhoneNumber</th>
                    <th>Address</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($clients as $client)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                  <td> @if($client->profile_photo)
                <img src="{{asset('storage/eCourt/' . $client->profile_photo)}}" width="70" height="70" alt="{{$client->name}}">
                @else
                no photo
                @endif
                   </td>
                  <td>{{$client->name}}</td>
                  <td>{{$client->date_of_birth}}</td>
                  <td>{{$client->email}}</td>
                  <td>{{$client->phone_number}}</td>
                  <td>{{$client->address}}</td>
                    <td><button type="button" class="btn btn-warning" style="margin:5%;">View</button></td>
                  </tr>
                  @endforeach
                  <!-- endforeach -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
  </div>
            <!-- /.card -->
@endsection
