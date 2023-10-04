@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<h5 style="color:rgb(93, 15, 87); padding-left:16%; text-decoration:underline; padding-top: 1%">Case Requests</h5>
 <div class="container">
    <div class="card-body text-center" >

        <table id="example2" class="table table-bordered table-hover" style="margin:2%;">
            <!-- foreach loop -->
            <thead>
            <tr>
            <th>Sl No</th>
            <th>Filing Date</th>
            <th>Case Type</th>
            <th>Client Name</th>
            <th>Case Description</th>
            <th>Document</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($requests as $request)
            <tr>
                <td scope="row">1</td>
                <td>{{\Carbon\Carbon::parse($request->filling_date)->format('d/m/Y')}}</td>
                <td>{{$request->case_type}}</td>
                <td>{{$request->petitioner_name}}</td>
                <td>{{$request->case_description}}</td>
                <td><a href="{{route('view.case.documents',encrypt($request->id))}}" class="btn btn-info" >Document</a></td>
                <td><a href="{{route('accept.case.request',encrypt($request->id))}}" class="btn btn-success" >Accept</a>
                    <a href="{{route('reject.case.request',encrypt($request->id))}}" class="btn btn-warning" >Reject</a>
                    <a href="" class="btn btn-outline-primary" >Hold</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('lawyer.lawyersidebar')
@endsection
