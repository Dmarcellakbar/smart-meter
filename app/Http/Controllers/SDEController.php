<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Tariff;

class SDEController extends Controller
{
    public function index()
    {
        $data_tarifs=Tariff::all();
        
        return view('menumonitor.monitoring',[
            "title" => "Monitor"
            
        ], compact('data_tarifs'));
    }
}
