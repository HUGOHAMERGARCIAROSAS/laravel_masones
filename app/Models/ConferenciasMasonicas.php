<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenciasMasonicas extends Model
{
    use HasFactory;

    protected $table = 'conferencias_masonicas';

    protected $fillable = [
        'descripcion',
        'activo'
    ];
}
