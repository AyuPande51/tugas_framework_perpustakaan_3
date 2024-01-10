<?php

namespace App\Http\Controllers;

use App\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;
// https://medium.com/@fatoni_ach/export-excel-menggunakan-laravel-excel-29a9530689c3
class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new Export, 'data_peminjaman.xlsx');
    }
}
