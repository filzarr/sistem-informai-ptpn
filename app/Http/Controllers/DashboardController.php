<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventaris;
use App\Models\Ketstokminyak;
use DB;
use App\Models\Stokminyak;
use App\Models\Analisasawit;
class DashboardController extends Controller
{
    public function index(){
        $inventaris = inventaris::get()->count();
        $stokmasuk = Ketstokminyak::whereDate('created_at', now()->toDateString())
        ->whereColumn('stoksebelumnya', '<', 'stoksetelahnya')
        ->sum(DB::raw('stoksetelahnya - stoksebelumnya'));
        $stokkeluar = Ketstokminyak::whereDate('created_at', now()->toDateString())
        ->whereColumn('stoksebelumnya', '>', 'stoksetelahnya')
        ->sum(DB::raw('stoksebelumnya - stoksetelahnya'));
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
        $datastokbulanan = Ketstokminyak::whereYear('created_at', now()->year)
        ->whereColumn('stoksebelumnya', '<', 'stoksetelahnya')
        ->groupBy(DB::raw('MONTH(created_at)')) // Grouping berdasarkan bulan
        ->selectRaw('MONTH(created_at) as month, SUM(stoksetelahnya - stoksebelumnya) as total')
        ->get();
    
        // dd($datastokbulanan);
        return view('dashboard', compact('inventaris','stok', 'stokmasuk','stokkeluar','analisa','datastokbulanan'));
    }
}
