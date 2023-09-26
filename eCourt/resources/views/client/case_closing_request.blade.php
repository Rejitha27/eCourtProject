@extends('layouts.client_profile_theme')
@section('content')
    <form action="{{route('close')}}" method="post" >>
    @csrf
    <div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 20%; margin-right: 20%;">
        <table align="center">
            <tr><td colspan="2" align="center" > REQUEST TO CLOSE CASE </td></tr>
            <tr class="blank_row">
                <td bgcolor="#FFFFFF" colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td>Client Name</td>
                <td>{{auth('client')->user()->name}}</td>
            </tr>
            <tr>
                <td>Enter Reason to close the case</td>
                <td><input type="text" name="reason" value="" style="width: 80%";></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
                <!-- <td colspan="2" align="center"><button type='submit'>Submit Request</button>   -->
            </td>
            </tr>
        </table>
    </div>
</form>
@endsection
