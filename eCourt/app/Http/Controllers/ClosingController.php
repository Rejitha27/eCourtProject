<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Client;
use App\Models\ClosingRequest;
use Illuminate\Http\Request;

class ClosingController extends Controller
{

    public function update($requestid){
        $requestid=decrypt($requestid);

       $request= ClosingRequest::find($requestid)->first();

        $clientid=$request->client_id;
        $client=Client::where('id',$clientid)->first();

        $clientname=$client->name;



        Cases::where('client_name',$clientname)->first()->update([
         'case_status' => false

        ]);

        ClosingRequest::find($requestid)->delete();

        return redirect()->route('ClosingRequest');
}
}
