<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = ['judul','qty','id_kategori','deskripsi', 'image'];
    
    public function kategori() {
        return $this->hasOne(Kategori::class,'id','id_kategori');
    }
}