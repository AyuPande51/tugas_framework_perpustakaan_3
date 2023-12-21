<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
 
    public function index(Request  $request)
    {
        $title = "Data Anggota";
        $q = $request->query ('q');
        $anggotas= Anggota::where('nama_anggota','like','%'. $q .'%')
            ->paginate(10)
            ->withQueryString();
        $no = $anggotas->firstItem();
        return view('anggota.index', compact('title', 'anggotas', 'q', 'no'));
    }

    public function create()
    {
        $title = 'Tambah Anggota';
       
        // $kategoris = Kategori::orderBy('nama_kategori')->get()
        return view('anggota.create', compact('title'));
    }

    public function store(Request $request)
     {
     
        $request->validate([
            'nama_anggota' => 'required',
            'email' => 'required',
        ]);

        $buku = new Anggota($request->all());
        $buku->save();

        return redirect()->route('anggota.index')->with(['message' => 'DATA BERHASIL DITAMBAH']);
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return redirect()->route('anggota.index')->with(['message'=> 'Data Berhasil Dihapus!']);
    }

    public function edit(Anggota $anggota)
    {
        $title = 'Ubah Angota';
        return view('anggota.edit', compact('title','anggota'));
    }

    public function update (Request $request, Anggota $anggota)
    {
        $anggota->update($request->all());
        return redirect()->route('anggota.index')->with(['message' => 'Data Berhasil Diubah!']);
    }

    
}

