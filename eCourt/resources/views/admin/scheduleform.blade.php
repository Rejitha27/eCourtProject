@extends('layouts.admin_profile_theme')
@section('content')

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Case Scheduling</h1>
                            <form action="{{ route('store')}}" method="post" >@csrf
                                <div class="form-group">
                                   <input type="text" class="form-control border-0 p-4" name="caseNumb er" placeholder="CaseNumber" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="clientName" placeholder="ClientName" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4"  name="lawyerName" placeholder="LawyerName" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <label>HearingDate</label>
                                                <input type="date" class="form-control border-0 p-4 datetimepicker-input" name="hearingdate" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <label>HearingTime</label>
                                                <input type="time" class="form-control border-0 p-4 datetimepicker-input" name="hearingtime" placeholder="Select Time" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" name="judge" style="height: 47px;">
                                        <option selected >Select Judge</option>
                                        <option value="Sri.  Amit Chakravorty">Sri.  Amit Chakravorty </option>
                                        <option value="Sri. Ashutosh Sarkar">Sri. Ashutosh Sarkar</option>
                                        <option value="Smt. Kusumika Dey Mitra">Smt. Kusumika Dey Mitra</option>
                                    </select>
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
