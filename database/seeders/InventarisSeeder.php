<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\inventaris;
class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $mesin = [
        [
            [
                "JEMBATAN TIMBANG CPO",
                "1",
                "AVERY",
                null,
                "50 Ton",
                "1985",
                "220000005223",
                "1",
                "80"
            ],
            [
                "JEMBATAN TIMBANG TBS",
                "2",
                "CV Natal Inti",
                null,
                "50 Ton",
                "2010",
                "220000005228",
                "1",
                "90"
            ],
            [
                "JEMBATAN TIMBANG Inti",
                "3",
                "Tunas Jaya",
                null,
                "50 Ton",
                "1997",
                "220000005511",
                "1",
                "80"
            ]
        ],
        [
            [
                "Loading Ramp",
                "1",
                null,
                "Kompartment",
                "15 pintu (@ 15 ton TBS)",
                "2010",
                "220000005230",
                "1.364.066.076",
                "69"
            ],
            [
                "Loading Ramp",
                "2",
                null,
                "Kompartment",
                "20 pintu (@ 15 ton TBS)",
                "1989",
                "220000005224",
                "1",
                "35"
            ],
            [
                "Transfer Carriage",
                "1",
                null,
                "Mobile",
                "3 lori (@2,5 ton TBS)",
                "2021",
                "220000005251",
                "106.356.833",
                "80"
            ]
        ]
    ];
    public function run(): void
    {
        for ($i=0; $i < count($this->mesin) ; $i++) { 
            for ($j=0; $j < count($this->mesin[$i]) ; $j++) { 
                inventaris::create([
                    'nama' => $this->mesin[$i][$j][0],
                    'nomor_mesin' => $this->mesin[$i][$j][1],
                    'merek' => $this->mesin[$i][$j][2],
                    'type' => $this->mesin[$i][$j][3],
                    'kapasitas' => $this->mesin[$i][$j][4],
                    'tahun_perolehan' => $this->mesin[$i][$j][5],
                    'nomor_inventaris' => $this->mesin[$i][$j][6],
                    'nilai_aktiva' => $this->mesin[$i][$j][7],
                    'kondisi_mesin' => $this->mesin[$i][$j][8],
                    'category_id' => $i +1,
                    'user_id' => 1,
                ]);
            }
        }
    }
}
