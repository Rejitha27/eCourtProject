<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;
use App\Models\Closingrequest;
use Illuminate\Support\Carbon;

class ClosingController extends Controller
{
    public function update($requestid){
        $requestid=decrypt($requestid);
        
       $request= Closingrequest::find($requestid)->first();
       
        $casenumber=$request->case_number;
        
        $currentDateTime = Carbon::now();
        $today= $currentDateTime->format('Y-m-d');
        
        
        Cases::where('case_number',$casenumber)->update([
         'case_status' => false,
         'closing_date' => $today,
        ]);

        Closingrequest::find($requestid)->delete();

        return redirect()->route('closingrequests');
}
}
