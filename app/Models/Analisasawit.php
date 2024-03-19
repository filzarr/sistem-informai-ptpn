<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
use App\Traits\UUID;
class Analisasawit extends Model
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
        'vm',
        'nos',
        'ffa',
        'dobi',
        'waktu_analisis',
        'user_id', 
    ];  
}
