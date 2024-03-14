<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category_inventaris;
class InventarisCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $category = [
        'Penerimaan Buah',
        'Loading Ramp',
        'Rebusan',
        'Penebah',
        'Kempa',
        'Klarifikasi',
        'Pengelolahan Biji',
        'Pengupas Biji',
        'Boiler',
        'Kamar Mesin',
        'Water Threatment',
        'Penimbunan Minyak',
        'Hopper Tankos',
        'Kolam Limbah',
        'Laboratorium',
        'Peralatan Bengkel',
    ];
    public function run(): void
    {
        for ($i=0; $i < count($this->category) ; $i++) { 
            category_inventaris::create([
                'id' => $i + 1,
                'category' => $this->category[$i],
            ]);
        }
    }
}
