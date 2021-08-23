<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_riesgo',
        'ubicacion ',
        'id_evento',
        ];

public function evento(){
    return $this->hasMany('App\Models\Evento','id_evento','id');

}
}