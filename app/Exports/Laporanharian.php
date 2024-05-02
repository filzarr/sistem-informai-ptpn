<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Carbon\carbon;
use App\Models\Ketstokminyak;
use App\Models\Analisasawit;
use DB;
class Laporanharian implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{ 
        $stokmasukhari = Ketstokminyak::whereDate('created_at', now()->toDateString())
        ->whereColumn('stoksebelumnya', '<', 'stoksetelahnya')
        ->sum(DB::raw('stoksetelahnya - stoksebelumnya'));
        $stokkeluarhari = Ketstokminyak::whereDate('created_at', now()->toDateString())
        ->whereColumn('stoksebelumnya', '>', 'stoksetelahnya')
        ->sum(DB::raw('stoksebelumnya - stoksetelahnya'));
        $tanggalAwalBulan = Carbon::now()->startOfMonth();

// Mendapatkan tanggal akhir bulan ini
$tanggalAkhirBulan = Carbon::now()->endOfMonth();

// Mendapatkan tanggal awal tahun ini
$tanggalAwalTahun = Carbon::now()->startOfYear();

// Mendapatkan tanggal akhir tahun ini
$tanggalAkhirTahun = Carbon::now()->endOfYear();

// Menghitung stok masuk sepanjang bulan ini
$stokMasukBulanIni = Ketstokminyak::whereDate('created_at', '>=', $tanggalAwalBulan)
    ->whereDate('created_at', '<=', $tanggalAkhirBulan)
    ->whereColumn('stoksebelumnya', '<', 'stoksetelahnya')
    ->sum(DB::raw('stoksetelahnya - stoksebelumnya'));

// Menghitung stok keluar sepanjang bulan ini
$stokKeluarBulanIni = Ketstokminyak::whereDate('created_at', '>=', $tanggalAwalBulan)
    ->whereDate('created_at', '<=', $tanggalAkhirBulan)
    ->whereColumn('stoksebelumnya', '>', 'stoksetelahnya')
    ->sum(DB::raw('stoksebelumnya - stoksetelahnya'));

// Menghitung stok masuk sepanjang tahun ini
$stokMasukTahunIni = Ketstokminyak::whereDate('created_at', '>=', $tanggalAwalTahun)
    ->whereDate('created_at', '<=', $tanggalAkhirTahun)
    ->whereColumn('stoksebelumnya', '<', 'stoksetelahnya')
    ->sum(DB::raw('stoksetelahnya - stoksebelumnya'));

// Menghitung stok keluar sepanjang tahun ini
$stokKeluarTahunIni = Ketstokminyak::whereDate('created_at', '>=', $tanggalAwalTahun)
    ->whereDate('created_at', '<=', $tanggalAkhirTahun)
    ->whereColumn('stoksebelumnya', '>', 'stoksetelahnya')
    ->sum(DB::raw('stoksebelumnya - stoksetelahnya')); 
    $tanggal_hari_ini = Carbon::now()->toDateString();
    $awal_bulan_ini = Carbon::now()->startOfMonth()->toDateString();

// Mendapatkan akhir bulan ini
$akhir_bulan_ini = Carbon::now()->endOfMonth()->toDateString();
$awal_tahun_ini = Carbon::now()->startOfYear()->toDateString();

// Mendapatkan akhir tahun ini
$akhir_tahun_ini = Carbon::now()->endOfYear()->toDateString();

// Query untuk mencari rata-rata hari ini
$data_hari_ini = Analisasawit::select(
        DB::raw('DATE(waktu_analisis) AS hari_analisa'),
        DB::raw('HOUR(waktu_analisis) AS jam_analisa'),
        DB::raw('AVG(vm) AS rata_vm'),
        DB::raw('AVG(nos) AS rata_nos'),
        DB::raw('AVG(ffa) AS rata_ffa'),
        DB::raw('AVG(dobi) AS rata_dobi')
    )
    ->whereDate('waktu_analisis', $tanggal_hari_ini)
    ->groupBy(DB::raw('DATE(waktu_analisis)'), DB::raw('HOUR(waktu_analisis)'))
    ->get();
    $data_bulan_ini = Analisasawit::select(
        DB::raw('DATE(waktu_analisis) AS hari_analisa'),
        DB::raw('HOUR(waktu_analisis) AS jam_analisa'),
        DB::raw('AVG(vm) AS rata_vm'),
        DB::raw('AVG(nos) AS rata_nos'),
        DB::raw('AVG(ffa) AS rata_ffa'),
        DB::raw('AVG(dobi) AS rata_dobi')
    )
    ->whereBetween('waktu_analisis', [$awal_bulan_ini, $akhir_bulan_ini])
    ->groupBy(DB::raw('DATE(waktu_analisis)'), DB::raw('HOUR(waktu_analisis)'))
    ->get();
    $data_tahun_ini = Analisasawit::select(
        DB::raw('DATE(waktu_analisis) AS hari_analisa'),
        DB::raw('HOUR(waktu_analisis) AS jam_analisa'),
        DB::raw('AVG(vm) AS rata_vm'),
        DB::raw('AVG(nos) AS rata_nos'),
        DB::raw('AVG(ffa) AS rata_ffa'),
        DB::raw('AVG(dobi) AS rata_dobi')
    )
    ->whereBetween('waktu_analisis', [$awal_tahun_ini, $akhir_tahun_ini])
    ->groupBy(DB::raw('DATE(waktu_analisis)'), DB::raw('HOUR(waktu_analisis)'))
    ->get();
        return view('excel.laporanharian', compact('stokmasukhari','stokkeluarhari','stokMasukBulanIni','stokKeluarBulanIni','stokMasukTahunIni','stokKeluarTahunIni','data_hari_ini','data_bulan_ini','data_tahun_ini'));
    }
}
