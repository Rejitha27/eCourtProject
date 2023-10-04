
@extends('layouts.thirdparty_profile_theme')
@section('content')

<div class=".container-sm">
    <div class="row">

        @if(isset($thirdparties))
        <h4 align="center">  {{ $thirdparties->name}} </h4>
        @endif
    </div>

    <form method="POST" action="{{ route('thirdparty.Search') }}">
        @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" style="display: inline-block;">
                            <label for="case_type">Select Case Type:</label>
                                <select name="case_type" id="case_type" class="form-control">
                                    <option value="Criminal">Criminal Case</option>
                                        <option value="Civil">Civil Case</option>
                                            <option value="Family">Family Case</option>

                                </select>
                        </div>
                        <div class="col-md-4" style="display: inline-block; padding-top: 2%;">
                            <button type="submit" class="btn btn-primary">Search</button>

                        </div>
                    </div>

                </div>

    </form>

</div>
@endsection



