<?php


namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\inventaris;
use App\Models\category_inventaris;
use DB;
class InventarisExport implements FromView, ShouldAutoSize{
    public function view(): View{
        $data = category_inventaris::get();
        foreach ($data as $category) {
            $category->inventaris = inventaris::where('category_id', $category->id)->get();
        }
        // dd($data);
        return view('excel.inventaris', compact('data'));
    }
}