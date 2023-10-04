<?php

namespace App\Http\Controllers;

//use App\Models\client;
use App\Models\Cases;
use App\Models\Client;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use App\Models\ClosingRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client()
    {
        return view('client.client');
    }

    public function dashboard()
    {
        return view('client.client');
    }
    public function index()
    {
        return view('home');
    }
    public function clientProfile()
    {
        return view('clientProfile');
    }
    public function filecase()
    {
        $lawyers=Lawyer::all();
        return view('client.fileCase',compact('lawyers'));
    }
    public function selectlawyer()
    {
        return view('client.selectLawyer');
    }
    public function scheduling()
    {
        return view('client.scheduling');
    }
    public function casestatus()
    {
        $name = auth('client')->user()->name;
        $client = Cases::where('client_name', $name)->first();
        if ($client) {
        return view('client.casestatus', compact('client'));
        }
    }

    public function closerequest($lawyerName)
    {
        $name = auth('client')->user()->name;
        $client = Cases::where('client_name', $name)->first();
        if ($client) {
        return view('client.closerequest', compact('client','lawyerName'));
        }

    }

    public function close(Request $request)
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
        return view('client.client');
    }

    public function show($id)
    {
    }
    public function viewProfile()
    {
        $request=Client::all();
       // return $request;
        return view('client.view_client_details',compact('request'));
        //return view('client.view_client_details');
    }

    public function updateProfile()
    {
        return view('client.edit_client_details');
    }
    public function store(Request $request)
    {

        $client= new Client();
        $client->name = $request->name;
        $client->Address = $request->Address;
        $client->Gender = $request->Gender;
        $client->Dob = $request->Dob;
        $client->email = $request->email;
        $client->Password = bcrypt($request->Password);
        $client->Phone = $request->Photo;
        $client->Phone = $request->Phone;
        $client->save();
        return view('client.client');
        //echo "Your profile edited successfully";
    }

}
