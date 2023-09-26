@extends('layouts.admin_profile_theme')
@section('content')

@if(session()->has('message'))<div class="alert alert-success" id="alert-success"> {{ session()->get('message') }}</div> @endif
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Scheduled cases </h3>
                <div class="float-right">
                  <!-- <form method="post" action="{{ route('scheduleform')}}"> @csrf -->
               <a class="btn btn-primary" href="{{ route('scheduleform')}}">Add New Schedule</a>
              </div>

              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">SL.NO</th>
                      <th>CaseNumber</th>

                      <th>ClientName</th>
                      <th>LawyerName</th>
                      <th>judge</th>
                      <th>HearingDate</th>
                      <th>HearingTime</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach($schedule as $schedule)
                  <tbody>
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $schedule->case_number }}</td>
                      <td>{{ $schedule->client_name}}</td>
                      <td>{{ $schedule->lawyer_name}}</td>
                      <td>{{ $schedule->judge }}</td>
                      <td>{{ $schedule->hearing_date }}</td>
                      <td>{{ $schedule->hearing_time }}</td>
                      <td>
                      <a href="{{ route('rescheduleform',encrypt($schedule->id)) }}" class="btn btn-primary">Reschedule</a>
                      </td>

                    </tr>
                  </tbody>
                  @endforeach
                </table>
                 </div>







    @endsection
