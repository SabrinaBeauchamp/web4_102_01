<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeCommodite extends Model
{
    use HasFactory;
    protected $table = "groupescommodites";
    protected $fillable = [
        "nom"
    ];

    public function commodite() {
        return  $this->hasMany(Commodite::class);
    }
}