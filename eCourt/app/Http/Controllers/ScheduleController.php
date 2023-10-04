<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Schedule;
use App\Models\CaseSchedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {

        CaseSchedule::create([
            'client_id' => 1,
            'case_number'=>$request->casenumber,
            'client_name'=>$request->clientname,
            'lawyer_name'=>$request->lawyername,
            'judge' => $request->judge,
            'hearing_date' => $request->hearingdate,
            'hearing_time' => $request->hearingtime,
            'reschedule_hearing_date'=> $request->hearingdate,
            'reschedule_hearing_time'  => $request->hearingtime

        ]);

        return redirect(route('Schedule'));

        }

        public function update(Request $request ,$scheduleid){
         $schedule_id=decrypt($scheduleid);

         CaseSchedule::find($schedule_id)->update([
             'case_number'=>$request->casenumber,
             'client_name'=>$request->clientname,
             'lawyer_name'=>$request->lawyername,
             'judge' => $request->judge,
             'hearing_date' => $request->hearingdate,
             'hearing_time' => $request->hearingtime,
             'reschedule_hearing_date' => $request->newhearingdate,
             'reschedule_hearing_time' => $request->newhearingtime
        ]);

        return redirect(route('Schedule'));

        }

        public function crimescheduleform()
   {
        $case_type = "Criminal";
        $cases=Cases::where('case_type',$case_type)->first();

        return view('Admin.crimescheduleform',compact('cases'));
   }

   public function civilscheduleform()
   {
    $case_type = "Civil";
        $cases=Cases::where('case_type',$case_type)->first();
    return view('Admin.civilscheduleform',compact('cases'));
   }
   public function familyscheduleform()
   {
    $case_type = "Family";
        $cases=Cases::where('case_type',$case_type)->first();
    return view('Admin.familyscheduleform',compact('cases'));
   }



  public function downloadDocument( $documentname){
            $document=decrypt($documentname);

                $filepath = storage_path("app/public/ecourt/$document");

                if(file_exists($filepath)){
                    return response()->download($filepath);
                }

                abort(404);

           }

        //






}
