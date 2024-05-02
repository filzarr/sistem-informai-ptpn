<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InventarisExport;
use App\Exports\AnalisaExport;
use App\Exports\Laporanharian;
use Excel;
use Carbon\carbon;
class ExcelController extends Controller
{
    public function inventaris(){
        return Excel::download(new InventarisExport, 'Rekap-Inventaris-PTPN-Gunung-Banyu.xlsx');
    }
    public function analisasawit(){
        return Excel::download(new AnalisaExport, 'Data Analisa CPO Produksi.xlsx');
    }
    public function laporanharian(){
        $bulanTahunSekarang = Carbon::now()->format('M Y'); 
        $namaFile = 'Prod ' . $bulanTahunSekarang . '.xlsx';
        return Excel::download(new Laporanharian, $namaFile);
    }
}
