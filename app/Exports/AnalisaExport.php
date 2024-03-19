<?php


namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\Allanalisasawit;
use App\Exports\AverageanalisaExport;
class AnalisaExport implements WithMultipleSheets{
    public function sheets(): array
    {
        $sheets = [];
        $sheets[] = new AllanalisaExport();
        $sheets[] = new AverageanalisaExport();
        

        return $sheets;
    }
}