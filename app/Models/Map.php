<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    protected $fillable = [
        'ogc_fid',
	    'objectid',
	    'cod_ibge',
	    'município',
	    'salvamento'
    ];
}
