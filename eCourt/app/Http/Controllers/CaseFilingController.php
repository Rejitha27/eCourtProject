<?php

namespace App\Http\Controllers;

use App\Models\CaseRequest;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class CaseFilingController extends Controller
{
    public function acceptCases()
    {

    }
    public function rejectCases()
    {

    }

    public function caseForm()
    {
        $lawyers= Lawyer::all();
        return view('client.filecase',compact('lawyers'));
    }

    public function create(Request $request)
    {

        // $request->validate([
        //     'date_of_filling' => 'required|date',
        //     'petitioner_name' => 'required|regex:/^[a-zA-Z]+$/',
        //     'case_type' => 'required|string',
        //     'lawyer_name' => 'required|regex:/^[a-zA-Z]+$/',
        //     'case_description' => 'required|string',
        //     'respondent_name' => 'required|regex:/^[a-zA-Z]+$/',
        //     'respondent_address' => 'required|string',
        //     'respondent_phonenumber' => 'required|digits:10',
        //     'case_document'=>'required',
        //     ]);
            //return 'Inside casefilling controller';
            $caseRequest = new CaseRequest();
            $caseRequest->date_of_filling_date= $request->date_of_filing;
            $caseRequest->petitioner_name = $request->petitioner_name;
            $caseRequest->case_type= $request->case_type;
            $caseRequest->lawyer_name = $request->lawyer_name;
            $caseRequest->case_description = $request->case_description;
            $caseRequest->respondent_name = $request->respondent_name;
            $caseRequest->respondent_address = $request->respondent_address;
            $caseRequest->respondent_phonenumber=$request->respondent_phonenumber;
            $caseRequest->save();

            $caseRequestId = $caseRequest->id;

            if ($request->hasFile('case_document')) {

                $case_document = $request->file('case_document');
                $fileName = 'CR'.$caseRequestId. '_' . $case_document->getClientOriginalName();
                $case_document->storeAs('public/ecourt', $fileName);
                $caseRequest->case_document = $fileName;

            }
            $caseRequest->save();
            return redirect(route('client.dashboard'));
    }
}
