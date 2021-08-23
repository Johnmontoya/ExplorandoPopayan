<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
   protected $fillable = [
   'nombre_ruta',
   'punto_partida',
   'distancia_ruta',
   'id_evento',
   ];

   public function evento(){
       return $this->belongsTo('App\Models\Evento','id_evento','id');
   }

}
