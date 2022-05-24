<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieForfait extends Model
{
    use HasFactory;
    protected $fillable=[
        "nom",
      ];
    public function forfaits(){
        return $this->hasMany(Forfait::class, 'categorie_id');
    }
    public function entreprises() {
        return $this->belongsTo(Entreprise::class);
    }
}
