<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        "sousCategorie_id",
        "categorieRegion",
        "commodites_id",
        "id",
        "nom",
        "description",
        "image_url",
        "ouverture",
        "fermeture",
        "adresse",
        "telephone"
    ];
    public function categories() {
        return $this->belongsToMany(Categorie::class);
    }
}
