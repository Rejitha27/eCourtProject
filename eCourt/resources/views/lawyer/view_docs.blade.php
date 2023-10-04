@extends('layouts.lawyer_profile_theme')
@section('content')

<h4 style="color:black; padding-left:18%; text-decoration:underline; padding-top: 1%">Lawyer Dashboard</h4>

<div>
    <iframe id="firstiframe" src="{{asset('storage/ecourt/'.$case_document)}}"></iframe>
</div>

@include('lawyer.lawyersidebar')
@endsection
