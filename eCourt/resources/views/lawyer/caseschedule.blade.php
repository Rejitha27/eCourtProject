@extends('layouts.profiletheme')
@section('content')

@include('lawyer.lawyersidebar')

 <h3 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Case schedule</h3>
 <div class="container">
  <div class="card-body text-center" >
                <table id="example2" class="table table-bordered table-hover" style="margin:12%;">
                  <!-- foreach($cases as $case) -->
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Case Number</th>
                    <th>Case Type</th>
                    <th>Client Name</th>
                    <th>Lawyer Name</th>
                    <th>Judge Name</th>
                    <th>Scheduled Date</th>
                    <th>Scheduled time</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td>case no data from db</td>        
                    <td>case type data from db</td>
                    <td>client Name data from db</td>
                    <td>lawyer Name data from db</td>
                    <td>judge Name data from db</td>
                    <td>schedule Date from db</td>
                    <td>schedule time from db</td>
                  </tr>
                  <!-- endforeach -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
 @endsection