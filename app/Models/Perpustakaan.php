<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $table ='tb_peminjaman';
    protected $primarykey ='id_peminjaman';

    protected $fillable =['tb_peminjaman', 'id_pinjam', 'id_user','id_buku', 'nama', 'telepon', 'tanggal_pinjam','tanggal_kembali', 'status', 'denda'];
}
