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
    public function favories() {
        return $this->hasMany(Favorie::class);
    }
    public function likes() {
        return dd("likes");
    }


    ///route: favorie/entreprise/1  ->fait attach
    ///autre: ".../delete  -> fait detach
}
