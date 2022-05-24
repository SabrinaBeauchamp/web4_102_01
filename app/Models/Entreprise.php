<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "adresse",
        "ville",
        "codepostal",
        "telephone",
        "url_photo",
        "url_logo",
        "url_site",
        "description",
        "created_at",
        "updated_at"
    ];
    public function categories() {
        return $this->belongsToMany(Categorie::class);
    }
}
