<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class M5Controller extends Controller
{
 
    public function lat1(Request $request)
    {
        return $request ->all();
    }

    
    public function lat2()
    {
        return view  ('m5.lat2');
    }

    public function lat2Action(Request $request)
    {
        $request ->validate([
            'nama' =>'required|min:5',
            'nilai'=> 'required|numeric'
        ]);

        $nama = $request->input('nama');
        $nilai = $request ->input('nilai');

        if ($nilai >= 60)
            $ket = 'LULUS';
        else
            $ket = 'ULANG';

        return view('m5.lat2_hasil', compact('nama', 'nilai', 'ket'));
    }

    public function balok()
    {
        return view  ('m5.balok');
    }

    public function balokAction(Request $request){

        $request->validate([
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
        ]);

        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $tinggi = $request->input('tinggi');
        
        $volume = $panjang * $lebar * $tinggi;

        return view('m5.hasil_balok', compact('panjang', 'lebar', 'tinggi', 'volume'));
    }

    public function segitiga()
    {
        return view  ('m5.segitiga');
    }

    public function segitigaAction(Request $request){

        $request->validate([
            'alas' => 'required|numeric',
            'tinggi' => 'required|numeric',
        ]);

        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        
        $luas = 0.5 * $alas * $tinggi;

        return view('m5.hasil_segitiga', compact('alas', 'tinggi', 'luas'));
    }


}
