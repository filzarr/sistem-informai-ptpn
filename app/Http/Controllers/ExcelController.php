<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InventarisExport;
use App\Exports\AnalisaExport;
use App\Exports\Laporanharian;
use App\Exports\BuahExport;
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
    public function laporanharian(Request $request){ 
        $bulanTahunSekarang = Carbon::createFromFormat('Y-m-d H:i', $request->tanggal)->format('M-Y'); 
        $namaFile = 'Prod-' . $bulanTahunSekarang . '.xlsx';
        $tanggal = $request->tanggal;
        // dd($tanggal);
        return Excel::download(new Laporanharian($tanggal), $namaFile);
    }
    public function tandanbuah(){
      
        return Excel::download(new BuahExport, 'Data tandan Buah Masuk.xlsx');
    }
}
