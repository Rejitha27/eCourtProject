@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<h5 style="color:rgb(191, 217, 19); padding-left:16%; text-decoration:underline; padding: left 60%;">Closing Requests</h5>
<div class="container">
    <div class="card-body text-center" >
        <table id="example2" class="table table-bordered table-hover">
            <!-- foreach loop -->
            <thead>
            <tr>
            <th>Case Number</th>
            <th>Reason</th>
            <th>View Report</th>
            <th>Forward</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($closing_requests as $closing_request)
            <tr>
            <td>{{$closing_request->case_number}}</td>
            <td>{{$closing_request->reason}}</td>
            <td><a href="{{route('view.case.reports',encrypt($closing_request->case_number))}}" method="get"  class="btn btn-info mt-2" >Case Report</a></td>
            <td><a href="{{route('forward.closing.request',encrypt($closing_request->id))}}"  method="get" class="btn btn-success mt-2">Forward</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('lawyer.lawyersidebar')
@endsection
