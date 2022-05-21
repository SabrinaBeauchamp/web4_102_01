<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodite extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "groupecommodite_id",
        "description",
        "logo_svg"
    ];
}
