<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorie extends Model
{
    use HasFactory;
    public function entreprises() {
        return $this->belongsTo(Entreprise::class);
    }
    public function evenements() {
        return $this->belongsTo(Evenement::class);
    }
    public function forfaits() {
        return $this->belongsTo(Forfait::class);
    }
}
