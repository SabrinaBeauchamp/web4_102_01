<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forfait extends Model
{
    use HasFactory;
    protected $fillable=[
      "prix",
      "nom",
      "description",
    ];
    public function categories(){
        return $this->belongsToMany(Categorie::class);
    }
}
