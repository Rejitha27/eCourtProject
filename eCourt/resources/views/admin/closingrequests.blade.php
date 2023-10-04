@extends('layouts.admin_profile_theme')
@section('content')

@include('admin.adminsidebar')

 <h3 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Closing Requests</h3>
 <div class="container">

  <div class="card-body text-center" >

                <table id="example2" class="table table-bordered table-hover" style="margin:12%;">
                  <!-- foreach loop -->
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Case Number</th>
                    <th>Reason</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($requests as $request)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$request->case_number}}</td>
                    <td>{{$request->reason}}</td>
                    <td><a href="{{route('accept',encrypt($request->id))}}" class="btn btn-success" >Accept</a>
                    <a href="{{route('closingrequests')}}" class="btn btn-danger" >Reject</a></td>
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
