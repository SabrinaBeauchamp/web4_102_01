<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "groupe_id",
    ];
    public function groupe() {
        return $this->belongsTo(Groupe::class);
    }
    public function entreprises() {
        return $this->belongsToMany(Entreprise::class);
    }
}
