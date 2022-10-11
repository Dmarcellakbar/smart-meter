<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Tariff;

class TariffController extends Controller
{
    public function index()
    {
        $post = Unit::where('SumberEnergi', '1')->take(10)->get();
        $post2 = Unit::where('SumberEnergi', '2')->take(10)->get();
        // $tarif = Tariff::find(Auth())->get('$id');
        
        // $hasil = $post*$tarif;
        
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

        // foreach($tarif as $row)
        // {
        //     $data3[] = array
        //     (
        //         // 'label'=>$row['tanggalKirim'],
        //         'y'=>$row['tarifStandar']
        //     );
        // }

        
        return view('datalog.tarif',[
            "title" => "Monitor",
            // 'data' => $data 
        ], compact('data', 'data2', 'data3'));
    }
}
