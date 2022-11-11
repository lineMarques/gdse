<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PontoOperacao extends Model
{
    use HasFactory;

    protected $fillable = [

        'objectid',
        'codigo_est',
        'ano',
        'uf',
        'entidade_r',
        'corpo_dagu',
        'latitude',
        'longitude',
        'lon',
        'lat',
        'created_at',
        'updated_at'

    ];
}
