<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = ['judul','qty','id_kategori','deskripsi', 'gambar'];
    
    public function kategori() {
        return $this->hasOne(Kategori::class,'id','id_kategori');
    }

    public function getImage(){
        if( $this->gambar && file_exists(public_path('images/buku/'.$this->gambar)))
            return asset('images/buku/'.$this->gambar);
        else
            return asset('images/no_image.png');
    }
}