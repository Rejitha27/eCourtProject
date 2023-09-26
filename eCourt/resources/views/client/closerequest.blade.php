@extends('layouts.client_profile_theme')
@section('content')
    <form action="{{route('close')}}" method="post" >>  
    @csrf
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registration Form</div>
                <div class="card-body">
                    <form action="{{route('storeuserdata')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label for="name">Client Name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{auth('client')->user()->name}}">
                        </div>
                        <div class="form-group lawyer-fields" id="form-group lawyer-experience-fields" >
                            <label for="experience">Reason to close the case</label>
                            <input type="text" name="reason" style="width: 80%";>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
                        </div>
                 </div>
            </div>
    </div>
</form>
@endsection