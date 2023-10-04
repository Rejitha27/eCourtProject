@extends('layouts.admin_profile_theme')
@section('content')

@include('admin.adminsidebar')


<div class="card">
    <div class="float-right">

        <a class="btn btn-danger" href="{{route('closedcases')}}">
                                    Schedule New Case</a>

        </div>
<div class="container">

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="margin:10%;">
                  <thead>
                  <tr>

                    <th>Case Number</th>
                    <th>Case Type</th>
                    <th>Filing Date</th>
                    <th>Client Name</th>
                    <th>Lawyer Name</th>
                    <th>Judge</th>
                    <th>Hearing Date</th>
                    <th>Hearing Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($schedules as $schedule)
                  <tr>

                    {{-- <td>{{$schedules->case_number}}</td> --}}
                    {{-- <td>{{$schedule->schedule()->case_type}}</td>
                    <td>{{$schedule->schedule()->filing_date}}</td>
                    <td>{{$schedule->schedule()->client_name}}</td>
                    <td>{{$schedule->schedule()->lawyer_name}} </td> --}}
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$schedule->judge}}</td>
                    <td>{{$schedule->hearing_date}}</td>
                    <td>{{$schedule->hearing_time}}</td>
                    <td><a href="{{route('reschedule',encrypt($schedule->id))}}" class="btn btn-primary" >Reschedule</a></td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
</div>
</div>
</div>
            @endsection
