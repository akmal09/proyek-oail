<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartandIntersellarsMatterSpectra extends Model
{
    use HasFactory;
    protected $table = 'start_and_interstellars_matter_spectras';
    protected $fillable = [
        "name",
        "ra",
        "dec",
        "teleskop",
        "detektor",
        "analisator",
        "date_and_time",
        "raw_data",
        "reduced_data",
    ];
}
