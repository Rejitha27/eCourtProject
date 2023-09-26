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

        // $request->validate([
        //     'practice_area' => 'required|string',
        //     'experience' => 'required|numeric',
        //     'phone_number' => 'required|digits:10',
        //     //'profile_photo'=>'required',
        //     'id_proof'=>'required'
        // ]);

        $lawyer = Lawyer::find($lawyer_id);
        $lawyer->qualification = $request->qualification;
        $lawyer->practice_area = $request->practice_area;
        $lawyer->experience = $request->experience;
        $lawyer->email = $request->email;
        $lawyer->phone_number = $request->phone_number;
        $lawyer->address = $request->address;
        // if ($request->hasFile('profile_photo')) {

        //     $profile_photo = $request->file('profile_photo');
        //     $fileName = 'Lpf'.$lawyer_id . '_' . $profile_photo->getClientOriginalName();
        //     $profile_photo->storeAs('public/ecourt', $fileName);
        //     $lawyer->profile_photo = $fileName;
        // }
        if ($request->hasFile('id_proof')) {

            $id_proof = $request->file('id_proof');
            $fileName = 'L'.$lawyer_id.'idp'. '_' . $id_proof->getClientOriginalName();
            $id_proof->storeAs('public/ecourt', $fileName);
            $lawyer->id_proof = $fileName;
        }
        $lawyer->save();

        return redirect(route('lawyer.dashboard'));
    }

    public function activeCases($lawyerName)
    {
        $lawyer_name = decrypt($lawyerName);
        $cases = Cases::where('case_status',true)->where('lawyer_name',$lawyer_name)->paginate(5);
        return view('lawyer.active_cases',compact('cases'));
    }

    public function closedCases($lawyerName)
    {
        $lawyer_name = decrypt($lawyerName);
        $cases = Cases::where('case_status',false)->where('lawyer_name',$lawyer_name)->paginate(5);
        return view('lawyer.closed_cases',compact('cases'));
    }

    public function caseRequests($lawyerName)
    {
        $lawyer_name = decrypt($lawyerName);
        $requests = CaseRequest::where('lawyer_name',$lawyer_name)->paginate(5);
        return view('lawyer.case_requests',compact('requests'));
    }

    public function closingRequests()
    {
        $closing_requests = ClosingRequest::all();

        return view('lawyer.case_closing_requests');
    }

    public function caseSchedule()
    {
        //return view('admin.case_schedule');
        return 'Welcome to Case Schedule Page';
    }
}
