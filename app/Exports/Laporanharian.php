<?php

namespace App\Exports;

use DB;
use Carbon\carbon;  
use App\Models\Laporanharian as lh;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class Laporanharian implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $tanggal;
    public function __construct(string $tanggal){ 
        $this->tanggal = $tanggal;
    }
    public function view(): View{ 
        // dd($this->tanggal); 
        $tanggal = $this->tanggal;
        $bulanreq = Carbon::createFromFormat('Y-m-d H:i', $this->tanggal)->format('m');
        $tahunreq = Carbon::createFromFormat('Y-m-d H:i', $this->tanggal)->format('Y'); 
        // dd($tahunreq);
        // hari
        $hari = lh::select('ptpn',
            DB::raw('sum(realisasi_tbs)'),
            DB::raw('sum(rkap_tbs)'),
            DB::raw('sum(tbs_olah)'),
            DB::raw('sum(sisa_tbs)'),
            DB::raw('sum(realisasi_minyaksawit)'),
            DB::raw('sum(rkap_minyaksawit)'),
            DB::raw('sum(realisasi_intisawit)'),
            DB::raw('sum(rkap_intisawit)'),
            DB::raw('sum(realisasi_rendemen)'),
            DB::raw('sum(rkap_rendemen)'),
            DB::raw('sum(realisasi_rendemen_inti)'),
            DB::raw('sum(rkap_rendemen_inti)'),
            DB::raw('sum(pengiriman_minyaksawit)'),
            DB::raw('sum(pengiriman_intisawit)'),
            DB::raw('sum(pengiriman_cangkang)'), 
        )
        ->whereDate('tanggal', $this->tanggal)
        ->groupBy('ptpn')
        ->orderBy('ptpn')
        ->get();
        // bulan
        $bulan = lh::select('ptpn',
            DB::raw('sum(realisasi_tbs)'),
            DB::raw('sum(rkap_tbs)'),
            DB::raw('sum(tbs_olah)'),
            DB::raw('sum(sisa_tbs)'),
            DB::raw('sum(realisasi_minyaksawit)'),
            DB::raw('sum(rkap_minyaksawit)'),
            DB::raw('sum(realisasi_intisawit)'),
            DB::raw('sum(rkap_intisawit)'),
            DB::raw('sum(realisasi_rendemen)'),
            DB::raw('sum(rkap_rendemen)'),
            DB::raw('sum(realisasi_rendemen_inti)'),
            DB::raw('sum(rkap_rendemen_inti)'),
            DB::raw('sum(pengiriman_minyaksawit)'),
            DB::raw('sum(pengiriman_intisawit)'),
            DB::raw('sum(pengiriman_cangkang)'), 
        )
        ->whereMonth('tanggal', $bulanreq)
        ->whereYear('tanggal', $tahunreq)
        ->groupBy('ptpn')
        ->orderBy('ptpn')
        ->get();
        $tahun = lh::select('ptpn',
            DB::raw('sum(realisasi_tbs)'),
            DB::raw('sum(rkap_tbs)'),
            DB::raw('sum(tbs_olah)'),
            DB::raw('sum(sisa_tbs)'),
            DB::raw('sum(realisasi_minyaksawit)'),
            DB::raw('sum(rkap_minyaksawit)'),
            DB::raw('sum(realisasi_intisawit)'),
            DB::raw('sum(rkap_intisawit)'),
            DB::raw('sum(realisasi_rendemen)'),
            DB::raw('sum(rkap_rendemen)'),
            DB::raw('sum(realisasi_rendemen_inti)'),
            DB::raw('sum(rkap_rendemen_inti)'),
            DB::raw('sum(pengiriman_minyaksawit)'),
            DB::raw('sum(pengiriman_intisawit)'),
            DB::raw('sum(pengiriman_cangkang)'), 
        ) 
        ->whereYear('tanggal', $tahunreq)
        ->groupBy('ptpn')
        ->orderBy('ptpn')
        ->get();
        // dd($hari);
        return view('excel.laporanharian' , compact('hari','tahun','bulan','tanggal') );
    }
}



