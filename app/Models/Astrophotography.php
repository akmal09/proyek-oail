<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Astrophotography extends Model
{
    use HasFactory;
    protected $table = 'astrophotographies';
    protected $fillable = [
        "name",
        "ra",
        "dec",
        "teleskop",
        "detektor",
        "analisator",
        "date_and_time",
        "raw_data",
        "final_image"
    ];
}
