<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventaris;
use App\Models\Ketstokminyak;
use DB;
use App\Models\Stokminyak;
use App\Models\Tandanbuah;
use App\Models\Analisasawit;
use App\Models\User;
use Carbon\carbon;
class DashboardController extends Controller
{
    public function index(){
        $inventaris = inventaris::get()->count();
        $bulanIni = Carbon::now()->month; // Mengambil bulan saat ini
        $tahunIni = Carbon::now()->year; // Mengambil tahun saat ini

    $totalPanenMasuk = Tandanbuah::where('kategori', 'buah-kebun-banyu')
            ->whereMonth('tanggal', $bulanIni)
            ->whereYear('tanggal', $tahunIni)
            ->sum('panen_masuk'); 
        // dd($totalPanenMasuk);
            $pihakketiga = Tandanbuah::where('kategori', 'pihak-ketiga')
            ->whereMonth('tanggal', $bulanIni)
            ->whereYear('tanggal', $tahunIni)
            ->sum('panen_masuk'); 
        // dd($stokmasuk);
        $stok = Stokminyak::first();
        $analisa = Analisasawit::select( 
            DB::raw('HOUR(waktu_analisis) AS jam_analisa'),
            DB::raw('AVG(vm) AS rata_vm'),
            DB::raw('AVG(nos) AS rata_nos'),
            DB::raw('AVG(ffa) AS rata_ffa'),
            DB::raw('AVG(dobi) AS rata_dobi')
        )
        ->whereDate('waktu_analisis', now()->toDateString())
        ->groupBy(DB::raw('DATE(waktu_analisis)'), DB::raw('HOUR(waktu_analisis)'))
        ->get();
        $panen = Tandanbuah::whereYear('tanggal', now()->year)
        ->where('kategori', 'buah-kebun-banyu') 
        ->groupBy(DB::raw('MONTH(tanggal)')) // Grouping berdasarkan bulan
        ->selectRaw('MONTH(tanggal) as month, SUM(panen_masuk) as total')
        ->get();
        $panenketiga = Tandanbuah::whereYear('tanggal', now()->year)
        ->where('kategori', 'pihak-ketiga') 
        ->groupBy(DB::raw('MONTH(tanggal)')) // Grouping berdasarkan bulan
        ->selectRaw('MONTH(tanggal) as month, SUM(panen_masuk) as total')
        ->get();
        $pengguna = User::get()->count();
    
        // dd($datastokbulanan);
        return view('dashboard', compact('inventaris','stok', 'totalPanenMasuk','pengguna' ,'pihakketiga','panenketiga' ,'analisa','panen'));
    }
}
