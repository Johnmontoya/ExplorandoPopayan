<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = "comentarios";

    protected $fillable = [
        'descripcion',
        'id_usuario',
        'evento'
        ];
     
        public function users(){
            return $this->belongsTo('App\Models\User','id_usuario','id');
        }

        public function eventos(){
            return $this->belongsTo('App\Models\Evento','evento','id');
        }
}