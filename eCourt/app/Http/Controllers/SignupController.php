<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Validation\Rules\Password;
use App\Models\Lawyer;
use App\Models\ThirdParty;
use Illuminate\Http\Request;
use File;

class SignupController extends Controller
{
    public function store(Request $request){

    switch ($request->input('usertype')) {

        case 'lawyer':
            $request->validate([
            'usertype' => 'required|in:lawyer,client,thirdparty',
            'name' => 'required|regex:/^[a-zA-Z]+$/',
            'date_of_birth' => 'required|date|before_or_equal:today',
            'practice_area' => 'required|string',
            'experience' => 'required|numeric',
            'phone_number' => 'required|digits:10',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'idproof'=>'required',
            ]);

            $lawyer = new Lawyer();
            $lawyer->name = $request->name;

            $lawyer->gender = $request->gender;
            $lawyer->date_of_birth= $request->date_of_birth;
            $lawyer->qualification = $request->qualification;
            $lawyer->bar_number = $request->bar_number;
            $lawyer->practice_area = $request->practice_area;
            $lawyer->experience = $request->experience;
            $lawyer->email=$request->email;
            $lawyer->phone_number= $request->phone_number;
            $lawyer->address=$request->address;
            $lawyer->password=bcrypt($request->password);
            $lawyer->save(); // Save the lawyer first to get the ID

            // Get the ID of the newly created lawyer
            $lawyerId = $lawyer->id;

            if ($request->hasFile('idproof')) {

                $id_proof = $request->file('idproof');
                $fileName = 'Lidp'.$lawyerId . '_' . $id_proof->getClientOriginalName();
                $id_proof->storeAs('public/ecourt', $fileName);
                $lawyer->id_proof = $fileName;
                $lawyer->save();
            }
            if ($request->hasFile('profilephoto')) {

                $profilephoto = $request->file('profilephoto');
                $fileName = 'Lphoto'.$lawyerId . '_' . $profilephoto->getClientOriginalName();
                $profilephoto->storeAs('public/ecourt', $fileName);
                $lawyer->profile_photo = $fileName;
                $lawyer->save();

            }

            return view('layouts.home');
            break;
            case 'client':
                $request->validate([
                'usertype' => 'required|in:lawyer,client,thirdparty',
                'name' => 'required|regex:/^[a-zA-Z]+$/',
                'date_of_birth' => 'required|date|before_or_equal:today',
                'phone_number' => 'required|digits:10',
                'email'=>'required',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6',
                'idproof'=>'required',
                ]);

                $client = new Client();
                $client->name = $request->name;
                $client->gender = $request->gender;
                $client->date_of_birth= $request->date_of_birth;
                $client->email=$request->email;
                $client->phone_number= $request->phone_number;
                $client->address=$request->address;
                $client->password=bcrypt($request->password);
                $client->save();

                $clientId = $client->id;
                if ($request->hasFile('idproof')) {

                    $id_proof = $request->file('idproof');
                    $fileName = 'Cidp'.$clientId . '_' . $id_proof->getClientOriginalName();
                    $id_proof->storeAs('public/ecourt', $fileName);
                    $client->id_proof = $fileName;
                    $client->save();

                }
                if ($request->hasFile('profilephoto')) {

                    $profilephoto = $request->file('profilephoto');
                    $fileName = 'Cphoto'.$clientId . '_' . $profilephoto->getClientOriginalName();
                    $profilephoto->storeAs('public/ecourt', $fileName);
                    $client->profile_photo = $fileName;
                    $client->save();

                }

                return view('layouts.home');
                break;
                case 'thirdparty':
                    $request->validate([
                    'usertype' => 'required|in:lawyer,client,thirdparty',
                    'name' => 'required|regex:/^[a-zA-Z]+$/',
                    'date_of_birth' => 'required|date|before_or_equal:today',
                    'email'=>'required',
                    'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                    'password_confirmation' => 'min:6',
                    ]);

                    $thirdparty = new ThirdParty();
                    $thirdparty->name = $request->name;
                    $thirdparty->gender = $request->gender;
                    $thirdparty->date_of_birth= $request->date_of_birth;
                    $thirdparty->email=$request->email;
                    $thirdparty->password=bcrypt($request->password);
                    $thirdparty->save();

                    $thirdpartyId = $thirdparty->id;
                    if ($request->hasFile('profilephoto')) {

                        $profilephoto = $request->file('profilephoto');
                        $fileName = 'TPphoto'.$thirdpartyId . '_' . $profilephoto->getClientOriginalName();
                        $profilephoto->storeAs('public/ecourt', $fileName);
                        $thirdparty->profilephoto = $fileName;
                        $thirdparty->save();

                    }

                    return view('layouts.home');
                    break;
           }

    }
}
