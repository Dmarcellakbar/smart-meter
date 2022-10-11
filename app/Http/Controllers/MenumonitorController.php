<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
class MenumonitorController extends Controller
{
    public function index()
    {
        $data_units=Unit::all();
        
        return view('menumonitor.index',[
            "title" => "Monitor"
            
        ], compact('data_units'));
    }
}
