<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorieForfaits extends Model
{
    use HasFactory;
    public function forfait(){
        return$this->hasMany(Forfaits::class);
    }
}
