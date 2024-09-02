<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrabajosMasonicos extends Model
{
    use HasFactory;

    protected $table = 'trabajos_masonicos';

    protected $fillable = [
        'descripcion',
        'link',
        'activo',
    ];
}
