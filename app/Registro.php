<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    public $fillable = [
        'id','user_id','sala_id'
    ];

    public function profesores(){
        return $this->belongsTo(User::class,'id');
    }
    public function salas(){
        return $this->belongsTo(Sala::class);
    }

}
