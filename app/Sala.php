<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sala extends Model
{
    use Notifiable;

    public $fillable = [
      'id','NombreSala','Estado',
    ];

    public function  registros(){
        return $this->hasMany(Registro::class,'id');
    }
}
