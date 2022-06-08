<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delehacji extends Model
{
    use HasFactory;
    protected $fillable = [
'lp',
'name',
'dataod',
'datado',
'wyjazd',
'przyjazd',
        ];
}
