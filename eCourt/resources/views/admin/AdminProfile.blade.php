@extends('layouts.admin_profile_theme')
@section('content')



<!--admin Section Starts-->
<div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div class="team-item text-center bg-white rounded overflow-hidden pt-4">

                <div class="team-img position-relative" style="margin-top: 7%;margin: left 5%;">
                    <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                </div>

            </div>
            </div>

            <div  class="col-sm-6">
            <div class="row" style="padding-top: 25%;">
            <div class="col-sm-3">
                <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-users"></i>
                </div>
                    <h5 class="mb-4 px-4"><a href="{{ route ('Schedule')}}" style="color: #37373F; text-align: center; ">Case Schedule</a></h5>
        </div>
        <div class="col-sm-3">
        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-hand-holding-usd"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{ route ('ClosingRequest')}}" style="color: #37373F;">Closing Requests</a></h5>


        </div>
        <div class="col-sm-3">
        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-landmark"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{ route ('Casestatus')}}" style="color: #37373F;">Case Status</a> </h5>

        </div>
        <div class="col-sm-3">
        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x  fa-eye"></i>
                    </div>
        <h5 class="mb-4 px-4"><a href="{{ route ('DocumentView')}}" style="color: #37373F;">Documents View</a></h5>

        </div>
        <div class="col-sm-3">
        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-users"></i>
                    </div>
        <h5 class="mb-4 px-4"><a href="{{ route ('ClientDetail')}}" style="color: #37373F;">Client Details</a></h5>

        </div>

        <div class="col-sm-3">
        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-users"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{ route ('LawyerDetail')}}" style="color: #37373F;">Lawyer Details</a></h5>
        </div>
        <div class="col-sm-3">
        <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x  fa fa-signal"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{ route ('crimerate')}}" style="color: #37373F;">Crime Rate</a></h5>
        </div>
        </div>
    </div>
</div>

<!--admin Section Ends-->
@endsection
