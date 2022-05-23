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
    public function favories() {
        return $this->hasMany(Favorie::class);
    }
    public function users() {
        return $this->morphToMany(User::class, 'favorie');
    }
    public function getIsLikedAttribute() {
        return !!$this->users()->find(\Auth::user()->id);
    }


    ///route: favorie/entreprise/1  ->fait attach
    ///autre: ".../delete  -> fait detach
}
