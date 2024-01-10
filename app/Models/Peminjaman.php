<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'tb_peminjaman_buku';
    protected $primaryKey = 'id_pinjam';

    protected $fillable = ['id_buku','id_user','nama','telpon','tanggal_pinjam','tanggal_kembali','status','denda','stok'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
