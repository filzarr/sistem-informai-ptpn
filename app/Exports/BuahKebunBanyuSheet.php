<?php

namespace App\Exports;

use App\Models\Tandanbuah;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection; 
use DB;
class BuahKebunBanyuSheet implements FromView, ShouldAutoSize,WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        $data = Tandanbuah:: 
        where('kategori', 'buah-kebun-banyu')  
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
        $title = 'Buah Kebun Banyu';
        return view('excel.tandanbuah', compact('groupedData','title'));
    }
    public function title(): string
    {
        return 'Buah Kebun Banyu';
    }
}
