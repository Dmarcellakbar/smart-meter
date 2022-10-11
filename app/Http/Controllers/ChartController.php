<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Tariff;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    // public function viewChart()
    // {
    //     $post = Unit::table('units')->paginate(5);
        
    //     return view("chart", ["post"=>$post]);
    // }


    public function index()
    {
        $post = Unit::where('SumberEnergi', '1')->take(10)->get();
        $post2 = Unit::where('SumberEnergi', '2')->take(10)->get();
        $tarif = Tariff::find(1);
        $getdaya = Unit::find(1);
       

        foreach($post as $row)
        {
            $data[] = array
            (
                'label'=>$row['tanggalKirim'],
                'y'=>$row['Daya']
            );
        }
        foreach($post2 as $row)
        {
            $data2[] = array
            (
                'label'=>$row['tanggalKirim'],
                'y'=>$row['Daya']
            );
        }

        return view('datalog.index',[
            "title" => "Monitor",
            // 'data' => $data 
        ], compact('data', 'data2', 'tarif', 'getdaya'));
    }
}
