<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
use App\Traits\UUID;
class Tandanbuah extends Model
{
    use HasFactory;
    use UUID;
    protected $fillable = [
        'panen_masuk',
        'tbs_diolah',
        'tanggal',
        'kategori'
    ];
}
