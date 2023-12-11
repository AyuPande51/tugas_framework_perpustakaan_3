<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kategori extends Controller
{
    public function index(Request  $request)
    {
        $title = "Data kategori";
        $kategoris= Kategori::get();
        return view('kategori.index', compact('title', 'kategoris', 'q',));
    }
}
