<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peminjaman::all();
    }

    public function headings(): array
    {
        return [
            'id_pinjam',
            'id_user',
            'id_buku',
            'nama',
            'telpon',
            'tanggal_pinjam',
            'tanggal_kembali',
            'status',
            'denda',
            'stok',
            'created_at',
            'updated_at'
        ];
    }
}
