<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;
    protected $fillable=[
      "prix",
      "nom",
      "description",
    ];
    public function categorie(){
        return $this->belongsTo(CategorieForfait::class, 'categorie_id');
    }
}
