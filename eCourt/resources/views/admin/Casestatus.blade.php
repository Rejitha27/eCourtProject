@extends('layouts.admin_profile_theme')
@section('content')

@include('admin.adminsidebar')

 <h3 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Active cases</h3>
 <div class="float-right">

<a class="btn btn-danger" href="{{route('closedcases')}}">
                            Closed Cases</a>

</div>
 <div class="container">

  <div class="card-body text-center" >

                <table id="example2" class="table table-bordered table-hover" style="margin:12%;">
                  <!-- foreach loop -->
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Case Number</th>
                    <th>Case Type</th>
                    <th>Filing Date</th>
                    <th>Client Name</th>
                    <th>Lawyer Name</th>
                    <th>View Document</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($activeCases as $active)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $active->case_number}}</td>
                    <td>{{ $active->case_type}}</td>
                    <td>{{ $active->filing_date}}</td>
                    <td>{{ $active->client_name}}</td>
                    <td>{{ $active->lawyer_name}}</td>
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
