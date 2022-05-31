<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieRegion extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom"
    ];
    protected $table = "categorie_region";
}
