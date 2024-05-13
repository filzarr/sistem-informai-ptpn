<?php


namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\Analisasawit;
use DB;
class AllanalisaExport implements FromView, ShouldAutoSize,WithTitle{
    public function view(): View{
        $data = Analisasawit::orderBy('waktu_analisis', 'desc')->get();
        return view('excel.allanalisa', compact('data'));
    }
    public function title(): string
    {
        return 'Analisa Sawit';
    }
}