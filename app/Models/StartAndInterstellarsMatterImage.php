<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartAndInterstellarsMatterImage extends Model
{
    use HasFactory;
    protected $table = 'start_and_interstellars_matters_images';
    protected $fillable = [
        "name",
        "ra",
        "dec",
        "teleskop",
        "detektor",
        "filter",
        "date_and_time",
        "raw_data",
        "reduced_data",
    ];
}
