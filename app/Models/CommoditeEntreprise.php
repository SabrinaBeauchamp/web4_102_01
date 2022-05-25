<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommoditeEntreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        "commodite_entreprise",
        "entreprise_id"
    ];
    //Doit ajouter la ligne suivante sinon il croit que la table à un s
    protected $table = "commodite_entreprise";
}