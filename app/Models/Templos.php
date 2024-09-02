<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templos extends Model
{
    use HasFactory;

    protected $table = 'templo';

    protected $fillable = [
        'descripcion',
        'images',
        'activo',
    ];
}
