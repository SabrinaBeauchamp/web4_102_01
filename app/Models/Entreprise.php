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
        "ville_id",
        "codepostal",
        "telephone",
        "url_site",
        "description",
        "created_at",
        "updated_at"
    ];
    public function categories() {
        return $this->belongsToMany(Categorie::class);
    }
    public function ville() {
        return $this->belongsTo(Ville::class, 'ville_id');
    }
    public function favories() {
        return $this->hasMany(Favorie::class);
    }
    public function users() {
        return $this->morphToMany(User::class, 'favorie');
    }
    public function getIsLikedAttribute() {
        return !!$this->users()->find(\Auth::user()->id);
    }
    public function getIsPopulaireAttribute() {
        return !!$this->populaire;
    }
    public function getUrlLogoAttribute() {
        return public_path("img/entreprises/logo/$this->id.jpg");
    }
    public function getUrlPhotoAttribute() {
        return public_path("img/entreprises/$this->id.jpg");
    }
    

}
