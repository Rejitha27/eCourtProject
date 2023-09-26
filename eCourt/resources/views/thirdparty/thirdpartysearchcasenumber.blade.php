
@extends('layouts.thirdparty_profile_theme')
@section('content')

<form method="POST" action="{{ route('get.casereport') }}">
        @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="display: inline-block;">

                <label for="case_type">Select Case Type:</label>
                        <select name="casenumbers" id="case_number" class="form-control">
                            @foreach ($casenumbers as $casenumber)
                                <option value="{{ $casenumber }}">{{ $casenumber }}</option>

                            @endforeach
                        </select>
                        <div class="col-md-4" style="display: inline-block; padding-top: 2%;">
                            <button type="submit" class="btn btn-primary">Case Report</button>

                        </div>
            </div>
        </div>
    </div>
</form>

@endsection

