<?php

namespace App\Http\Controllers;

//use App\Models\client;
use App\Models\Cases;
use App\Models\Client;
use App\Models\Lawyer;
use App\Models\CaseRequest;
use Illuminate\Http\Request;
use App\Models\ClosingRequest;

class ClientController extends Controller
{

    public function dashboard()
    {
        return view('client.clientprofile');
    }

    public function editProfile()
    {
        return view('client.edit_client_details');
    }

    public function updateProfile(Request $request)
    {
        $client_id =  auth('client')->user()->id;
        $client= Client::find($client_id);
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;
        $client->address = $request->address;

        if ($request->hasFile('profile_photo')) {

            $profile_photo = $request->file('profile_photo');
            $fileName = 'Lpf'.$client_id . '_' . $profile_photo->getClientOriginalName();
            $profile_photo->storeAs('public/ecourt', $fileName);
            $client->profile_photo = $fileName;
        }
        if ($request->hasFile('id_proof')) {

            $id_proof = $request->file('id_proof');
            $fileName = 'L'. $client_id.'idp'. '_' . $id_proof->getClientOriginalName();
            $id_proof->storeAs('public/ecourt', $fileName);
            $client->id_proof = $fileName;
        }
         $client->save();

        return redirect(route('client.dashboard'));

    }

    public function fileCase()
    {
        $lawyers=Lawyer::all();
        return view('client.fileCase',compact('lawyers'));
    }

    public function storeCase(Request $request)
    {
        $request->validate([

            'date_of_filing' => 'date|before_or_equal:today',
            'petitioner_name' => 'required|regex:/^[a-zA-Z]+$/',
            'case_type'=> 'required',
            'lawyer_name' => 'required',
            'case_description'=> 'required',
            'respondent_name' =>'required|regex:/^[a-zA-Z]+$/',
            'respondent_address' => 'required',
            'respondent_phonenumber'=> 'required|digits:10',

        ]);

        $client_id = auth('client')->user()->id;

        $caseRequest = new CaseRequest();
        $caseRequest->client_id = $client_id;
        $caseRequest->filling_date= $request->date_of_filing;
        $caseRequest->petitioner_name = $request->petitioner_name;
        $caseRequest->case_type= $request->case_type;
        $caseRequest->lawyer_name = $request->lawyer_name;
        $caseRequest->case_description = $request->case_description;
        $caseRequest->respondent_name = $request->respondent_name;
        $caseRequest->respondent_address = $request->respondent_address;
        $caseRequest->respondent_phonenumber=$request->respondent_phonenumber;
        $caseRequest->request_status = false;
        $caseRequest->active_status = false;
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

    public function casestatus()
    {
        $client_id = auth('client')->user()->id;
        $client = Cases::where('client_id', $client_id)->first();
        if ($client) {
            return view('client.casestatus', compact('client'));
        }
    }

    public function caseSchedule()
    {
        return 'case schedule';
    }

    public function caseClosing()
    {
        $client_id = auth('client')->user()->id;
        $cases = Cases::where('case_status',true)->where('client_id',$client_id )->get();
        if($cases)
        return  view('client.closing_request',compact('cases'));
        else
            return 'Currently No Active Cases are available';

    }

    public function closingRequest()
    {
        return view('client.closing_request_form');
    }

    public function caseClosed(Request $request)
    {
        $client_id = auth('client')->user()->id;
        $case = Cases::where('case_number',$request->case_number)->first();
        $lawyer_id = $case->lawyer_id;

        ClosingRequest::create([
            "case_number"=> $request->case_number,
            "client_id"=> $client_id,
            "lawyer_id"=> $lawyer_id,
            "reason"=> $request->reason,
            "request_status"=>false
        ]);
        return redirect(route('client.dashboard'));
    }

}
