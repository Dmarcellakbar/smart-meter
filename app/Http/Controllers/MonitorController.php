<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class MonitorController extends Controller
{
    public function index()
    {
        $data_units=Unit::all();
        
        return view('monitor',[
            "title" => "Monitor"
            
        ], compact('data_units'));
    }

    // public function linecart(Request $request)
    // {
    //     $tegangan_c = Unit::where('Tegangan','tegangan')->get();
    //     $arus_c = Unit::where('Arus','arus')->get();

    //     $tegangan_count = count($tegangan_c);
    //     $arus_count = count($arus_c);


        
    // }
}
