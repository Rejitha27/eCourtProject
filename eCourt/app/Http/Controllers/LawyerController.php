<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Lawyer;
use App\Models\CaseRequest;
use Illuminate\Http\Request;
use App\Models\ClosingRequest;

class LawyerController extends Controller
{
    public function dashboard()
    {
        return view('lawyer.lawyer');
    }

    public function viewProfile($lawyerId)
    {
        $id = decrypt($lawyerId);
        $lawyer = Lawyer::where('id',$id)->first();
        return view('lawyer.view_lawyer_profile',compact('lawyer'));
    }

    public function editProfile($lawyerId)
    {
        $id = decrypt($lawyerId);
        $lawyer = Lawyer::where('id',$id)->first();
        return view('lawyer.edit_lawyer_profile',compact('lawyer'));
    }

    public function updateProfile(Request $request)
    {
        $id = $_POST['id'];
        $lawyer_id = decrypt($id);

        $lawyer = Lawyer::find($lawyer_id);
        $lawyer->qualification = $request->qualification;
        $lawyer->practice_area = $request->practice_area;
        $lawyer->experience = $request->experience;
        $lawyer->email = $request->email;
        $lawyer->phone_number = $request->phone_number;
        $lawyer->address = $request->address;
        if ($request->hasFile('profile_photo')) {

            $profile_photo = $request->file('profile_photo');
            $fileName = 'Lpf'.$lawyer_id . '_' . $profile_photo->getClientOriginalName();
            $profile_photo->storeAs('public/ecourt', $fileName);
            $lawyer->profile_photo = $fileName;
        }
        if ($request->hasFile('id_proof')) {

            $id_proof = $request->file('id_proof');
            $fileName = 'L'.$lawyer_id.'idp'. '_' . $id_proof->getClientOriginalName();
            $id_proof->storeAs('public/ecourt', $fileName);
            $lawyer->id_proof = $fileName;
        }
        $lawyer->save();

        return redirect(route('lawyer.dashboard'));
    }

    public function activeCases()
    {
        $lawyer_id = auth('lawyer')->user()->id;
        $cases = Cases::with('client','lawyer')->where('case_status',true)->where('lawyer_id',$lawyer_id)->get();
        if($cases)
            return view('lawyer.active_cases',compact('cases'));
        else
            return 'Currently No Active Cases are available';
    }

    public function closedCases()
    {
        $lawyer_id = auth('lawyer')->user()->id;
        $cases = Cases::where('case_status',false)->where('lawyer_id',$lawyer_id)->paginate(5);
        if($cases)
            return view('lawyer.closed_cases',compact('cases'));
        else
            return 'Currently No Closed Cases are available';
    }

    public function caseRequests()
    {
        $lawyer_name= auth('lawyer')->user()->name;
        $requests = CaseRequest::where('request_status',true)->where('lawyer_name',$lawyer_name)->get();
        if( $requests)
            return view('lawyer.case_requests',compact('requests'));
        else
            return 'Currently No Case Requests are available';
    }

    public function closingRequests()
    {
        $lawyer_id = auth('lawyer')->user()->id;
        $closing_requests = ClosingRequest::where('lawyer_id',$lawyer_id)->where('request_status',false)->first();
        if( $closing_requests)
            return view('lawyer.case_closing_requests',compact('closing_requests'));
        else
            return 'Currently No Closing Requests are available';
    }

    public function caseSchedule()
    {
        //return view('admin.case_schedule');
        return 'Welcome to Case Schedule Page';
    }
}
