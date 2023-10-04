@extends('layouts.admin_profile_theme')
@section('content')

@include('admin.adminsidebar')

 <h3 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Closed cases</h3>
 <div class="container">

  <div class="card-body text-center" >

                <table id="example2" class="table table-bordered table-hover" style="margin:12%;">

                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Case Number</th>
                    <th>Case Type</th>
                    <th>Filing Date</th>
                    <th>Client Name</th>
                    <th>closed date</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($closedCases as $closed)
                  <tr>
                  <td>{{$loop->iteration}}</td>
                    <td>{{ $closed->case_number}}</td>
                    <td>{{ $closed->case_type}}</td>
                    <td>{{ $closed->filing_date}}</td>
                    <td>{{ $closed->client_name}}</td>
                    <td>{{ $closed->closing_date}}</td>

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
