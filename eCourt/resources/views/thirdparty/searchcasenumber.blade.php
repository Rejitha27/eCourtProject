@extends('layouts.thirdparty_profile_theme')
@section('content')

<h4 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Thirdparty Dashboard</h4>
<div style="margin-left:5%;">
    <form method="POST" action="{{ route('get.casereport') }}">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="display: inline-block;">
                        <label for="case_type">Select Case Number:</label>
                        <select name="casenumbers" id="case_number" class="form-control">
                            @foreach ($casenumbers as $casenumber)
                            <option value="{{ $casenumber }}">{{ $casenumber }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4" style="display: inline-block; padding-top: 2%;">
                        <button type="submit" class="btn btn-primary">Case Report</button>
                    </div>
                </div>
            </div>
        </form>
</div>

@include('thirdparty.thirdpartysidebar')
@endsection
