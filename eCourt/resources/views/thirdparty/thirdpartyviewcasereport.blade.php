
@extends('layouts.thirdparty_profile_theme')
@section('content')

<div>
    <iframe id="firstiframe" src="{{asset('storage/ecourt/'.$casereport[0])}}"></iframe>
</div>

@endsection

