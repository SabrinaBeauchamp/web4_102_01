<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forfait extends Model
{
    use HasFactory;
    protected $fillable=[
      "categorie_id",
      "prix",
      "nom",
      "description",
    ];
    public function categorie(){
        return $this->belongsTo(categorieForfait::class);
    }
}
