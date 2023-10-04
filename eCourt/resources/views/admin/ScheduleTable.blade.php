use pagination;
@extends('Layouts.admin_profile_theme')
@section('content')

@if(session()->has('message'))<div class="alert alert-success" id="alert-success"> {{ session()->get('message') }}</div> @endif
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Scheduled cases </h3>
                <div class="float-right">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            new schedules
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('crimescheduleform')}}">criminal</a>
                        <a class="dropdown-item" href="{{ route('civilscheduleform')}}">civil</a>
                        <a class="dropdown-item" href="{{ route('familyscheduleform')}}">family</a>

                        </div>



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
                  @foreach($schedules as $schedule)
                  <tbody>
                    <tr>
                      <td>{{ ($schedules->currentPage() - 1) * $schedules->perPage() + $loop->index + 1}}</td>
                      <td>{{ $schedule->case_number }}</td>
                      <td>{{ $schedule->client_name}}</td>
                      <td>{{ $schedule->lawyer_name}}</td>
                      <td>{{ $schedule->judge }}</td>
                      <td>{{ $schedule->reschedule_hearing_date }}</td>
                      <td>{{ $schedule->reschedule_hearing_time }}</td>
                      <td>
                      <a href="{{ route('rescheduleform',encrypt($schedule->id)) }}" class="btn btn-primary">Reschedule</a>
                      </td>

                    </tr>
                  </tbody>
                  @endforeach
                </table>
                 </div>
</div>

<div class="card-footer clearfix">

                {{$schedules->links('pagination::bootstrap-4')}}


              </div>






    @endsection
