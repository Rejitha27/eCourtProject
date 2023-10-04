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

            'judge' => $request->judge,
            'hearing_date' => $request->hearingdate,
            'hearing_time' => $request->hearingtime,
            'reschedule_hearing_date'=> $request->hearingdate,
            'reschedule_hearing_time'  => $request->hearingtime

        ]);

        return redirect(route('caseschedule'));

        }

        public function update(Request $request ,$scheduleid){
         $schedule_id=decrypt($scheduleid);

         CaseSchedule::find($schedule_id)->update([

             'judge' => $request->judge,
             'hearing_date' => $request->hearingdate,
             'hearing_time' => $request->hearingtime,
             'reschedule_hearing_date' => $request->newhearingdate,
             'reschedule_hearing_time' => $request->newhearingtime
        ]);

        return redirect(route('caseschedule'));

        }





//   public function downloadDocument( $documentname){
//             $document=decrypt($documentname);

//                 $filepath = storage_path("app/public/ecourt/$document");

//                 if(file_exists($filepath)){
//                     return response()->download($filepath);
//                 }

//                 abort(404);

//            }

        //






}
