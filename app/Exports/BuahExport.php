<?php

namespace App\Exports;

use App\Models\Tandanbuah;
use App\Exports\BuahKebunBanyuSheet;
use App\Exports\BuahPihakKetigaSheet;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class BuahExport implements WithMultipleSheets
{
    use Exportable;

    public function sheets(): array
    {
        $sheets = [];

        // Sheet Buah Kebun Banyu
        $sheets[] = new BuahKebunBanyuSheet();

        // Sheet Buah Pihak Ketiga
        $sheets[] = new BuahPihakKetigaSheet();

        return $sheets;
    }
}

 

// class BuahPihakKetigaSheet implements FromView
// {
//     public function collection()
//     {
//         // Ambil data dari model Tandanbuah dengan kategori pihak-ketiga
//         return Tandanbuah::where('kategori', 'pihak-ketiga')
//             ->get()
//             ->groupBy(function ($item) {
//                 return $item->created_at->format('Y-m');
//             });
//     }
    
//     public function title(): string
//     {
//         return 'Buah Pihak Ketiga';
//     }
// }
