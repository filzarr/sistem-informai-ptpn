<?php

namespace App\Exports;

use App\Models\Tandanbuah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
class BuahPihakKetigaSheet implements FromView, ShouldAutoSize,WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        $data = Tandanbuah:: 
        where('kategori', 'pihak-ketiga')  
        ->orderBy('tanggal')
        ->get();
        $groupedData = [];

        foreach ($data as $item) {
            $tanggal = \Carbon\Carbon::parse($item->tanggal);
            $bulanTahun = $tanggal->format('F Y'); // Format nama bulan dan tahun
        
            // Tambahkan item ke dalam grup yang sesuai
            if (!isset($groupedData[$bulanTahun])) {
                $groupedData[$bulanTahun] = [];
            }
            $groupedData[$bulanTahun][] = $item;
        } 
        $title = 'Buah Pihak Ketiga';
        return view('excel.tandanbuah', compact('groupedData','title'));
    }
    public function title(): string
    {
        return 'Buah Kebun Banyu';
    }
}
