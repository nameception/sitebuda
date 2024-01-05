<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'fotos',
        'data',
        'projeto_id',
        'foto_principal'
    ];
}
