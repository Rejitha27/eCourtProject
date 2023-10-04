@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<h5 style="color:rgb(10, 79, 44); padding-left:16%; text-decoration:underline; padding-top: 1%">Closed Cases</h5>
 <div class="container">
  <div class="card-body text-center" >
        <table id="example2" class="table table-bordered table-hover" >
            <thead>
                <tr>
                    <th>Case Number</th>
                    <th>Case Type</th>
                    <th>Client Name</th>
                    <th>Filing Date</th>
                    <th>Closing Date</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cases as $case)
                <tr>
                    <td>{{$case->case_number}}</td>
                    <td>{{$case->case_type}}</td>
                    <td>{{$case->client_name}}</td>
                    <td>{{\Carbon\Carbon::parse($case->filing_date)->format('d/m/Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($case->closing_date)->format('d/m/Y')}}</td>
                    <td><a href="{{route('view.uploaded.reports',encrypt($case->id))}}" method="get"  class="btn btn-info mt-2" >Case Report</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('lawyer.lawyersidebar')            <!-- /.card -->
@endsection
