<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function tarification(){
        return $this->hasMany(Tarification::class);

    }
    public function location(){
        return $this->belongsToMany(Location::class,'voiture_location','voiture_id','location_id');

    }
}
