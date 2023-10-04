@extends('layouts.client_profile_theme')
@section('content')

<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Case Close request Form</div>
            <div class="card-body">
                <form action="{{route('close')}}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    {{-- <input type="hidden" name="case_id" value="{{$client->id}}"/>
                    <input type="hidden" name="lawyerName" value="{{$lawyerName}}"/> --}}
                    {{-- <input type="hidden" name="client_id" value="{{auth('client')->user()->id}}"/> --}}
                    <div class="form-group">
                        <label>CaseNumber</label>
                        <input type="text" name="case_number" style="width: 80%";>
                    </div>
                    <div class="form-group">
                        <label>Reason to close the case</label>
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
