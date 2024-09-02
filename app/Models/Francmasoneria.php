<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Francmasoneria extends Model
{
    use HasFactory;

    protected $table = 'francmasoneria';

    protected $fillable = [
        'descripcion',
        'images',
        'activo',
    ];
}
