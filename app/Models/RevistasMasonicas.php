<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevistasMasonicas extends Model
{
    use HasFactory;

    protected $table = 'revistas_masonicas';

    protected $fillable = [
        'descripcion',
        'link',
        'activo',
    ];
}
