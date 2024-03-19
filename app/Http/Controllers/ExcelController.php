<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InventarisExport;
use App\Exports\AnalisaExport;
use Excel;
class ExcelController extends Controller
{
    public function inventaris(){
        return Excel::download(new InventarisExport, 'Rekap-Inventaris-PTPN-Gunung-Banyu.xlsx');
    }
    public function analisasawit(){
        return Excel::download(new AnalisaExport, 'Data Analisa CPO Produksi.xlsx');
    }
}
