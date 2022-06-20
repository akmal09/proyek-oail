<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystemObjectImage extends Model
{
    use HasFactory;
    protected $table = 'solar_system_object_images';
    protected $fillable=[
        'name',
        'teleskop',
        'detektor',
        'filter',
        'date_and_time',
        'raw_data',
        'reduced_data'
    ];
}
