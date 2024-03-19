<?php


namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\Analisasawit;
use DB;
class AverageanalisaExport implements FromView, ShouldAutoSize,WithTitle{
    public function view(): View{
        $data = Analisasawit::select(
            DB::raw('DATE(waktu_analisis) AS hari_analisa'),
            DB::raw('HOUR(waktu_analisis) AS jam_analisa'),
            DB::raw('AVG(vm) AS rata_vm'),
            DB::raw('AVG(nos) AS rata_nos'),
            DB::raw('AVG(ffa) AS rata_ffa'),
            DB::raw('AVG(dobi) AS rata_dobi')
        )
        ->groupBy(DB::raw('DATE(waktu_analisis)'), DB::raw('HOUR(waktu_analisis)'))
        ->get();
        return view('excel.ratarataanalisa', compact('data'));
    }
    public function title(): string
    {
        return 'Rata Rata Analisa';
    }
}