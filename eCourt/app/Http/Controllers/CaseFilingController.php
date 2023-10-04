<?php

namespace App\Http\Controllers;

use App\Models\CaseRequest;
use App\Models\ClosingRequest;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class CaseFilingController extends Controller
{

    public function caseForm()
    {
        $lawyers= Lawyer::all();
        return view('client.filecase',compact('lawyers'));
    }

    public function create(Request $request)
    {

        $caseRequest = new CaseRequest();
        $caseRequest->client_id = $request->client_id;
        $caseRequest->filling_date= $request->date_of_filing;
        $caseRequest->petitioner_name = $request->petitioner_name;
        $caseRequest->case_type= $request->case_type;
        $caseRequest->lawyer_name = $request->lawyer_name;
        $caseRequest->case_description = $request->case_description;
        $caseRequest->respondent_name = $request->respondent_name;
        $caseRequest->respondent_address = $request->respondent_address;
        $caseRequest->respondent_phonenumber=$request->respondent_phonenumber;
        $caseRequest->request_status = true;
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

    public function closeCase($requestId)
    {
        $request_id = decrypt($requestId);
        $close_request = ClosingRequest::find($request_id)->update([
            'request_status'=>true
        ]);
        return redirect(route('lawyer.dashboard'));
    }
}
