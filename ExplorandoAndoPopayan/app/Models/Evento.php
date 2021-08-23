<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
public function Riesgo(){
    return $this->belongsTo('App\Models\Riesgo','id','id_evento');

}
}