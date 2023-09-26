<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        Schedule::create([
            'case_number'=>$request->caseNumber,
            'client_name'=>$request->clientName,
            'lawyer_name'=>$request->lawyerName,
            'judge' => $request->judge,
            'hearing_date' => $request->hearingdate,
            'hearing_time' => $request->hearingtime
            
        ]);
        
        return redirect(route('Schedule'));
     
        }
 
        public function update(Request $request ,$scheduleid){
         $schedule_id=decrypt($scheduleid);
 
         Schedule::find($schedule_id)->update([
             'case_number'=>$request->caseNumber,
             'client_name'=>$request->clientName,
             'lawyer_name'=>$request->lawyerName,
             'judge' => $request->judge,
             'hearing_date' => $request->hearingdate,
             'hearing_time' => $request->hearingtime,
             'reschedule_hearing_date' => $request->newhearingdate,
             'reschedule_hearing_time' => $request->newhearingtime
        ]);
        
        return redirect(route('Schedule'));
     
        }

        public function show(Request $request ){
            
    
            $document=Cases::where('case_number',$request->casenumber)->first();
            if (!$document) {
                return abort(404);
            }
            
           
           return view('Admin.Documents',compact('document'));
        
           }

    
}
