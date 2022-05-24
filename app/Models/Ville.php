<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    public function evenements() {
        return $this->hasMany(Evenement::class, 'ville_id');
    }
}
