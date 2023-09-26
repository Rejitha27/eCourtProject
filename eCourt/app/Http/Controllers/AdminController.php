<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Client;
use App\Models\Lawyer;
use App\Models\CaseSchedule;
use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function dashboard()
   {
    return view('admin.AdminProfile');
   }

   public function schedule()
   {
    $schedule=CaseSchedule::all();
    return view('Admin.ScheduleTable',compact('schedule'));
   }

   public function scheduleform()
   {
    return view('Admin.scheduleform');
   }

   public function rescheduleform($caseid)
   {
    $case_id=decrypt($caseid);
    $reschedule = CaseSchedule::where('id',$case_id)->first();
    return view('Admin.Rescheduleform',compact('reschedule'));
   }


   public function closingrequest()
   {
    return view('Admin.ClosingRequest');
   }
   public function casestatus()
   {
    $activeCases=Cases::where('case_status',true)->paginate(3);
    $closedCases=Cases::where('case_status',false)->paginate(3);
    return view('Admin.Casestatus',compact('activeCases','closedCases'));
   }
   public function documentview()
   {
    return view('Admin.DocumentView');
   }
   public function clientdetails()
   {
    $clients=Client::all();
    return view('Admin.ClientDetail',compact('clients'));
   }
   public function lawyerdetails()
   {
    $lawyers=Lawyer::all();
    return view('Admin.LawyerDetails',compact('lawyers'));
   }


}
