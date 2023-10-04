<?php

namespace App\Http\Controllers;

use App\Models\CaseReport;
use App\Models\Cases;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThirdPartyController extends Controller
{

    public function dashboard()
    {
        return view('thirdparty.thirdpartyprofile');
    }

    public function search(Request $request)
    {
        $selectedCaseType = $request->case_type;
        $casenumbers = Cases::where('case_type',$selectedCaseType)->pluck('case_number');
        return view('thirdparty.searchcasenumber',['casenumbers' => $casenumbers]);
    }

    public function getReport(Request $request)
    {
        $selectedCaseNumber = $request->casenumbers;
        $id = Cases::where('case_number',$selectedCaseNumber)->pluck('id');
        $casereport=CaseReport::where('case_id',$id)->pluck('case_report');
        $casereport = $casereport[0];
        return view('thirdparty.viewcasereports',compact('casereport'));
    }
}


