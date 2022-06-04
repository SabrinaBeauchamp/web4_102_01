<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;
    protected $fillable=[
      "prix",
      "nom",
      "description",
      "categorie_id",
    ];
    public function categorie(){
        return $this->belongsTo(CategorieForfait::class, 'categorie_id');
    }
    public function favorie() {
      return $this->hasMany(Favorie::class);
    }
    public function estFavorie() {
      if (auth()->check()) {
        return auth()->user()->favories->contains('id', $this->id);
      }
    }
    public function users() {
      return $this->morphToMany(User::class, 'favorie');
    }
    public function getIsLikedAttribute() {
      return !!$this->users()->find(\Auth::user()->id);
    }
    public function getUrlImgAttribute() {
      return public_path("img/forfaits/$this->id.jpg");
  }
    
}
