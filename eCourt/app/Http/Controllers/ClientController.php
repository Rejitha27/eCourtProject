<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\Lawyer;
use App\Models\Casefiling;
use App\Models\Closerequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        return view('client.client');
    }

    public function clientProfile()
    {
        return view('clientProfile');
    }
    // public function filecase()
    // {
    //     $lawyers=Lawyer::all();
    //     return view('client.fileCase',compact('lawyers'));
    // }
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
        return view('client.casestatus');
    }
    public function closerequest()
    {
        return view('client.closerequest');
    }
    // public function create(Request $request)
    // {

    //     $case=new Casefiling();
    //     $case->filling_date=$request->dateoffiling;
    //     $case->client_name=$request->cname;
    //     $case->case_type=$request->ctype;
    //     $case->lawyer_name=$request->lawyername;
    //     $case->case_description=$request->desc;
    //     $case->case_respondent_name=$request->rname;
    //     $case->case_respondent_address=$request->raddress;
    //     $case->case_respondent_phone=$request->rphone;
    //     //$case->closing_date=$request->closedate;

    //     if ( $request->hasFile('docs')){
    //         $image=$request->file('docs');
    //         $imageName= $request->cname. '.' .$image->getClientOriginalExtension();
    //         $image->storeAs('public/docu' ,$imageName);
    //         $case->docs = $imageName;
    //     }
    //     $case->save();

    //     // return redirect()->route('/')->with('message','Success! User added success');

    //     echo "Your case registered successfully";
    //     //return redirect(route('client.client'));
    //     return view('client.client');
    // }

    public function close(Request $request)
    {
        $case=new Closerequest();
        $case->client_name=auth('client')->user()->name;
        $case->reason=$request->reason;

        $case->save();
        echo "Your case case close request registered successfully";
        //return redirect(route('client.client'));
        return view('client.client');
    }

    public function show($id)
    {
    }
    public function viewProfile()
    {
        $request=Client::all();
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
