<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedLogias extends Model
{
    use HasFactory;
    
    protected $table = 'red_logias';

    protected $fillable = [
        'descripcion',
        'imagen',
        'titulo',
        'activo',
    ];
}
