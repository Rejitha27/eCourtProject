<?php

namespace App\Http\Controllers;

use App\Models\CaseReport;
use App\Models\CaseRequest;
use App\Models\Cases;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function acceptCaseRequest($requestId)
    {
        $request_id = decrypt($requestId);
        $case_request = CaseRequest::where('id',$request_id )->first();

        $case = new Cases();
        $case->case_type = $case_request->case_type;
        $case->filing_date = $case_request->date_of_filling_date;
        $case->client_name= $case_request->petitioner_name;
        $case->lawyer_name = $case_request->lawyer_name;
        $case->case_description = $case_request->case_description;
        $case->case_status = true;
        $case->case_respondent_name = $case_request->respondent_name;
        $case->case_respondent_address=$case_request->respondent_address;
        $case->case_respondent_phonenumber= $case_request->respondent_phonenumber;
        $case->closing_date=NULL;
        $case->save();
        $case_id = $case->id;
        $case->case_number = 'CN'.$case_id;
        $case->case_document = $case_request->case_document;
        $case->save();

        $case_request = CaseRequest::find($request_id)->delete();
        return redirect(route('lawyer.dashboard'));

    }

    public function rejectCaseRequest($requestId)
    {
        $request_id = decrypt($requestId);
        //return $request_id;
        $case_request = CaseRequest::find($request_id)->delete();
        return redirect(route('lawyer.dashboard'));
    }
    public function contactClient()
    {
        return'Contact feature currently not available ';
    }

    public function uploadCaseReport(Request $request)
    {
        $id = $_POST['id'];
        $case_id = decrypt($id);
        $case_status = $_POST['case_status'];

        $request->validate([
            'case_report' => 'required|file|mimes:jpg,png,pdf'
        ]);

        $case_document = new CaseReport();
        $case_document->case_id = $case_id;
        $case_document->case_status = $case_status;

        if ($request->hasFile('case_report')) {
            $case_report = $request->file('case_report');
            $fileName = $case_id.'doc'. '_' . $case_report->getClientOriginalName();
            $case_report->storeAs('public/ecourt', $fileName);
            $case_document->case_report	= $fileName;
        }
        $case_document->save();

        return redirect(route('lawyer.dashboard'));

    }

    public function viewCaseReport($caseId)
    {
        $case_id = decrypt($caseId);
        $case_reports = CaseReport::where('case_id',$case_id)->get();
        return view('lawyer.view_case_reports',compact('case_reports'));

    }

    public function downloadCaseReport($caseReport)
    {
        $casse_report = decrypt($caseReport);
        $filePath = storage_path("app/public/ecourt/$casse_report");

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        // File not found, handle the error accordingly
        abort(404);
    }

    public function viewCaseDocument($requestId)
    {
        $request_id = decrypt($requestId);
        $case_documents = CaseRequest::where('id',$request_id)->get();
        return view('lawyer.view_case_documents',compact('case_documents'));
    }

    public function downloadCaseDocument($caseDocument)
    {
        $casse_document = decrypt($caseDocument);
        $filePath = storage_path("app/public/ecourt/$casse_document");

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        // File not found, handle the error accordingly
        abort(404);
    }
}
