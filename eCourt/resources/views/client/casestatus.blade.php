@extends('layouts.client_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Client Dashboard</h4>

<div class="container">
  <div class="card-body text-center" >

    <h5 style="color: rgb(135, 47, 47)">CaseRequests</h5>
    <table id="example2" class="table table-bordered table-hover" style="margin:2%;">
    <!-- foreach loop -->
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Filing Date</th>
                <th>Case Type</th>
                <th>Lawyer Name</th>
                <th>Case Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>03/07/2022</td>
                <td>Family Case</td>
                <td>Sona</td>
                <td>Domestic Violence</td>
                <td>Active</td>
            </tr>
            <!-- endforeach -->
        </tbody>
    </table>

    <h5 style="color: rgb(4, 87, 4)">Cases(Active/Closed)</h5>
    <table id="example2" class="table table-bordered table-hover" style="margin:2%;">
        <!-- foreach loop -->
        <thead>
            <tr>
                <th>Case Number</th>
                <th>Filing Date</th>
                <th>Case Type</th>
                <th>Lawyer Name</th>
                <th>Case Description</th>
                <th>Status</th>
                <th>Closing Date</th>
                <th>Documents</th>
                <th>Report</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>WR56/78</td>
                <td>Family Case</td>
                <td>Gupta Rai</td>
                <td>Domestic abuse</td>
                <td>Active</td>
                <td>03/07/2022</td>
                <td><div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Upload</button>
                    <button type="button" class="btn btn-secondary">View</button></div></td>
                <td><button type="button" class="btn btn-info" style="margin:5%;">View</button></td>
            </tr>
        <!-- endforeach -->
        </tbody>
    </table>

    </div>
</div>

@include('client.clientsidebar')
@endsection
