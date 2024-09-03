<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class DetalleConferenciasMasonicas extends Model
{
    use HasFactory;

    protected $table = 'detalle_conferencias_masonicas';

    protected $fillable = [
        'id_conferencias_masonicas',
        'link',
        'tipo',
        'detalle',
        'activo',
    ];
}
