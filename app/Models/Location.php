<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function paiement(){
        return $this->hasMany(Paiement::class);

    }

    public function voiture(){
        return $this->belongsToMany(Voiture::class,'voiture_location','location_id','voiture_id');

    }

}
