<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
 
    public function index(Request  $request)
    {
        $title = "Data Buku";
        $q = $request->query ('q');
        $bukus= Buku::where('judul','like','%'. $q .'%')
            ->leftJoin('tb_kategori', 'tb_kategori.id_kategori', 'tb_buku.id_kategori')
            ->paginate(10)
            ->withQueryString();
        $no = $bukus->firstItem();
        return view('buku.index', compact('title', 'bukus', 'q', 'no'));
    }

    public function create()
    {
        $title = 'Tambah Buku';
       
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.create', compact('title','kategoris'));
    }

    public function store(Request $request)
     {
     
        $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
            'qty' => 'required',
            'deskripsi' => 'required',
        ]);


        $buku = new Buku($request->all());
        $buku->save();

        return redirect()->route('buku.index')->with(['message' => 'DATA BERHASIL DITAMBAH']);
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with(['message'=> 'Data Berhasil Dihapus!']);
    }

    public function edit(Buku $buku)
    {
        $title = 'Ubah buku';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.edit', compact('title', 'buku', 'kategoris'));
    }

    public function update (Request $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect()->route('buku.index')->with(['message' => 'Data Berhasil Diubah!']);
    }

    
}

