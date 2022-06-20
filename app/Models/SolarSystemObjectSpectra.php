<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystemObjectSpectra extends Model
{
    use HasFactory;
    protected $table = 'solar_system_object_spectras';
    protected $fillable=[
        'name',
        'teleskop',
        'detektor',
        'analisator',
        'date_and_time',
        'raw_data',
        'reduced_data'
    ];
}
