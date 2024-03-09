<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_inventaris extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
    ];
}
