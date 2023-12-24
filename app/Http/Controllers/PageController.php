<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title ='Home';
        $jumlah_user = User::count();
        $jumlah_buku = Buku::count();
        $jumlah_peminjaman = Peminjaman::count();
        $total_peminjaman = Peminjaman::sum('stok');

        $peminjaman = Peminjaman::selectRaw('tanggal_pinjam, SUM(stok) AS total')->groupBy('tanggal_pinjam')->limit(30)->get();
        $data = [];
        $categories = [];
        // dd($peminjaman);
        foreach ($peminjaman as $item) {
            $data[] = $item->total * 1;
            $categories[] = $item->tanggal_pinjam;
        }
        
        return view ('home',compact('title','jumlah_user','jumlah_buku','jumlah_peminjaman','total_peminjaman','data','categories'));
    }
}
