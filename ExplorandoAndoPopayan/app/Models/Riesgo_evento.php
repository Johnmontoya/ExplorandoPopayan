<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riesgo_evento extends Model
{
    use HasFactory;
    public function evento(){
        return $this->belongsToMany('App\Models\Evento','id_evento','id');
    }
    public function riesgo(){
            return $this->belongsToMany('App\Models\Riesgo','id_riesgo','id');
        
    
}
}