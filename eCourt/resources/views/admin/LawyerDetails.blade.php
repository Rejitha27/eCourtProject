@extends('layouts.admin_profile_theme')
@section('content')

@include('admin.adminsidebar')

 <h3 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Lawyer Details</h3>
 <div class="container">

  <div class="card-body text-center" >

                <table id="example2" class="table table-bordered table-hover" style="margin:10%;">
                  <!-- foreach loop -->
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>photo</th>

                    <th>Lawyer Name</th>
                    <th>Practice Area</th>
                    <th>Qualification</th>
                    <th>Experiences</th>
                    <th>Bar Number</th>
                    <th>Email</th>
                    <th>PhoneNumber</th>


                  </tr>
                  </thead>
                  <tbody>
                  @foreach($lawyers as $lawyer)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> @if($lawyer->profile_photo)
                <img src="{{ asset('storage/eCourt/' . $lawyer->profile_photo)}}" width="100" height="100" alt="{{$lawyer->name}}">
                @else
                no photo
                @endif </td>
                    <td>{{$lawyer->name}}</td>
                    <td>{{$lawyer->practice_area}}</td>
                    <td>{{$lawyer->qualification}}</td>
                    <td>{{$lawyer->experience}}</td>
                    <td>{{$lawyer->bar_number}}</td>
                    <td>{{$lawyer->email}}</td>
                    <td>{{$lawyer->phone_number}}</td>

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
