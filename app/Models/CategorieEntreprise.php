<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieEntreprise extends Model
{
    use HasFactory;
    //Doit ajouter la ligne suivante sinon il croit que la table à un s
    protected $table = "categorie_entreprise";
}
