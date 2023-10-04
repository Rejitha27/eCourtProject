@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<h5 style="color:rgb(36, 107, 201); padding-left:16%; text-decoration:underline; padding-top: 1%">Active Cases</h5>

<div class="container">
    <div class="card-body text-center" >

        <table id="example2" class="table table-bordered table-hover" >
            <!-- foreach loop -->
            <thead>
                <tr>
                <th>Case Number</th>
                <th>Case Type</th>
                <th>Filing Date</th>
                <th>Client Name</th>
                <th>Case Description</th>
                <th>Upload Report</th>
                <th>View Report</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cases as $case)
                <tr>
                <td>{{$case->case_number}}</td>
                <td>{{$case->case_type}}</td>
                <td>{{\Carbon\Carbon::parse($case->filing_date)->format('d/m/Y')}}</td>
                <td>{{$case->client_name}}</td>
                <td>{{$case->case_description}}</td>
                <td>
                    <form action="{{route('upload.case.report')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{encrypt($case->id)}}"/>
                        <input type="hidden" name="case_status" value="{{$case->case_status}}"/>
                        <input type="file" name="case_report">
                        <button type="submit" class="btn btn-success ">Upload Report</button>
                    </form>
                    {{-- <a href="" class="btn btn-info" style="margin:5%;">Upload</a> --}}
                </td>
                <td><a href="{{route('view.uploaded.reports',encrypt($case->id))}}" class="btn btn-warning" style="margin:5%;">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('lawyer.lawyersidebar')
@endsection
