<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function temoignage(){
        return $this->hasMany('App\Models\Temoignage');
    }
    use HasFactory;
}
