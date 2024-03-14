<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InventarisExport;
use Excel;
class ExcelController extends Controller
{
    public function inventaris(){
        return Excel::download(new InventarisExport, 'Rekap-Inventaris-PTPN-Gunung-Banyu.xlsx');
    }
}
