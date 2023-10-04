<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Cases;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
 
   
    $data = Cases::select('case_type', DB::raw('count(*) as count'))
               ->groupBy('case_type')
               ->get();
               
     return view('Admin.crimerate',compact('data'));
    }
}
