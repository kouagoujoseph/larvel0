<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    use HasFactory;
    public function voiture(){
        return $this->belongsTo(Voiture::class);

    }
    public function duree_location(){
        return $this->belongsTo(DureeLocation::class);

    }
}
