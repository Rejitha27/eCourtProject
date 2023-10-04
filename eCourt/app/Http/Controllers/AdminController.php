<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\CaseSchedule;
use App\Models\Client;
use App\Models\Lawyer;
use App\Models\ClosingRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class AdminController extends Controller
{
   public function dashboard()
   {
        return view('Admin.AdminProfile');
   }

   public function schedule()
   {
        $schedules=CaseSchedule::query()->paginate(3);
        return view('admin.ScheduleTable',compact('schedules'));
   }



   public function rescheduleform($caseid)
   {
    $case_id=decrypt($caseid);
    $reschedule = CaseSchedule::where('id',$case_id)->first();
    return view('admin.Rescheduleform',compact('reschedule'));
   }


   public function closingrequest()
   {
    $requests=ClosingRequest::where('request_status',true)->get();


    return view('admin.ClosingRequest',compact('requests'));
   }
   public function casestatus()
   {
    $activeCases=Cases::where('case_status',true)->paginate(3);
    $closedCases=Cases::where('case_status',false)->paginate(3);
    return view('admin.Casestatus',compact('activeCases','closedCases'));
   }
   public function documentview()
   {
    $activecases=Cases::where('case_status',true)->paginate(3);

    return view('admin.DocumentView',compact('activecases'));
   }
   public function clientdetails()
   {
    $clients=Client::all();
    return view('admin.ClientDetail',compact('clients'));
   }
   public function lawyerdetails()
   {
    $lawyers=Lawyer::all();
    return view('admin.LawyerDetails',compact('lawyers'));
   }


}
