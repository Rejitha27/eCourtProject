@extends('Layouts.admin_profile_theme')
@section('content')

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Case Rescheduling</h1>
                            <form action="{{ route('reschedule',encrypt($reschedule->id)) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" value="{{ $details->case_number }}" name="casenumber" placeholder="Caseid" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" value="{{ $details->client_name}}" name="clientname"  placeholder="Clientid" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" value="{{ $details->lawyer_name}}" name="lawyername"  placeholder="Lawyerid" required="required" />
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" value="{{ $reschedule->judge}}" name="judge" placeholder="judge" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div  id="date" >
                                                <label>PreviousHearingDate</label>
                                                <input type="date" class="form-control border-0 p-4" value="{{ $reschedule->hearing_date }}"  name="hearingdate" required="required" />

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" >
                                                <label>PreviousHearingTime</label>
                                                <input type="time" class="form-control border-0 p-4" value="{{ $reschedule->hearing_time }}"  name="hearingtime"   required="required" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div  id="date" data-target-input="nearest">
                                                <label>NewHearingDate</label>
                                                <input type="date" class="form-control border-0 p-4 datetimepicker-input" name="newhearingdate" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <label>NewHearingTime</label>
                                                <input type="time" class="form-control border-0 p-4 datetimepicker-input" name="newhearingtime" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">SUBMIT</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
