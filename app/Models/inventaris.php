<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
use App\Traits\UUID;
class inventaris extends Model
{
    use HasFactory;
    use UUID;

     /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */ 
    public function getIncrementing ()
    {
        return false;
    }
    protected $fillable = [ 
        'nama',
        'tahun_perolehan',
        'nomor_mesin',
        'merek',
        'type',
        'kapasitas',
        'nomor_inventaris',
        'nilai_aktiva',
        'kondisi_mesin',
        'category_id',
        'user_id',
    ];  
}
