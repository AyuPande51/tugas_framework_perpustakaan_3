<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class M4Controller extends Controller
{
    public function lat1(){
        $nama = 'Ayu Pande';
        $asal ='Denpasar, Bali';
        return view( 'm4.lat1', compact('nama', 'asal'));
    }

    public function lat2(){
        $nama = 'Ayu Pande';
        $nilai ='85';
        return view( 'm4.lat2', compact('nama', 'nilai'));
    }

    public function lat3(){
        $nama = 'Ayu Pande';
        $hobi =['Berenang', 'Badminton', 'Berlari','tidur', 'shopping'];
        $skill= ['memasak', 'math', 'manajemen'];
        return view( 'm4.lat3', compact('nama', 'hobi', 'skill'));
    }

    public function m4_identitas(){
        $nama = 'Ayu Pande';
        $umur ='19 tahun';
        $alamat= 'Jl. Ratna Gg. Jepun No.1, Denpasar-Bali';
        return view( 'm4.identitas', compact('nama', 'umur', 'alamat'));
    }

    public function m4_pendidikan (){
        return view( 'm4.pendidikan');
    }

    public function m4_skill(){
        $skill = ['Math', 'Microsoft', 'Manajemen'];
        return view( 'm4.skill', compact('skill'));
    }




    //
}
