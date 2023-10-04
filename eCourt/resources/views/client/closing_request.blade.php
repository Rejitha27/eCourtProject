@extends('layouts.client_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Client Dashboard</h4>

<div class="container">
  <div class="card-body text-center" >
    <h5 style="color: rgb(69, 152, 203)">Case Closing</h5>
        <table id="example2" class="table table-bordered table-hover" style="margin:2%;">
            <!-- foreach loop -->
            <thead>
                <tr>
                    <th>Case Number</th>
                    <th>Filing Date</th>
                    <th>Case Type</th>
                    <th>Lawyer Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cases as $case)
            <tr>
                <td>{{$case->case_number}}</td>
                <td>{{\Carbon\Carbon::parse($case->filing_date)->format('d/m/Y')}}</td>
                <td>{{$case->case_type}}</td>
                <td>{{$case->lawyer_name}}</td>
                <td><a href="{{route('client.caseclosing.request')}}" method="get">Close</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('client.clientsidebar')
@endsection
