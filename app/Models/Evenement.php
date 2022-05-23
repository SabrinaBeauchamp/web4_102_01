<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable=[
    "id",
    "date",
    "prix",
    "ville_id",
    "nom",
    "description",
    ];
    public function favories() {
      return $this->hasMany(Favorie::class);
    }
    public function ville() {
      return $this->belongsTo(Ville::class, 'ville_id');
    }
    public function users() {
      return $this->morphToMany(User::class, 'favorie');
    }
    public function getIsLikedAttribute() {
      return !!$this->users()->find(\Auth::user()->id);
    }
}
