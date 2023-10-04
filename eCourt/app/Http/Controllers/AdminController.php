<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Client;
use App\Models\Lawyer;
use App\Models\CaseSchedule;
use Illuminate\Http\Request;
use App\Models\Closingrequest;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.adminprofile');
    }
    public function casestatus()
    {
        $activeCases=Cases::where('case_status',true)->paginate(3);
        return view('admin.casestatus',compact('activeCases'));
    }
    public function caseschedule()
    {

        $schedules=CaseSchedule::all();

        // $details=Cases::with('caseschedules')->where('id',$schedules->case_id)->get();
        // return $details;
        return view('admin.caseschedule',compact('schedules'));
    }
    public function reschedule($caseid)
   {
    $case_id=decrypt($caseid);
    $reschedule = CaseSchedule::where('id',$case_id)->first();
    $details=Cases::where('id',$reschedule->case_id)->first();
    return view('admin.rescheduleform',compact('reschedule','details'));
   }
    public function clientdetails()
    {
        $clients=Client::all();
        return view('admin.clientdetails',compact('clients'));
    }
    public function lawyerdetails()
    {
        $lawyers=Lawyer::all();
        return view('admin.lawyerdetails',compact('lawyers'));
    }
    public function crimerate()
    {
        return view('admin.crimerate');
    }
    public function closingrequests()
    {
        $requests=Closingrequest::where('request_status',true)->get();

        return view('admin.closingrequests',compact('requests'));
    }

    public function closedcases()
    {
        $closedCases=Cases::where('case_status',false)->paginate(3);
        return view('admin.closedcases',compact('closedCases'));
    }

}
