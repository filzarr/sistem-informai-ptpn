<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
use App\Traits\UUID;
class Laporanharian extends Model
{
    use HasFactory;
    use UUID;
    protected $fillable = [ 
        'realisasi_tbs',
        'rkap_tbs',
        'sisa_tbs',
        'realisasi_minyaksawit',
        'rkap_minyaksawit',
        'realisasi_intisawit',
        'rkap_intisawit',
        'realisasi_rendemen',
        'rkap_rendemen',
        'pengiriman_minyaksawit',
        'pengiriman_intisawit',
        'pengiriman_cangkang',
        'ptpn' ,
        'tanggal' ,
    ];  
}
