<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = "produtos";
    protected $fillable = ['nome', 'email', 'mensagem'];

    public function setNomeAttribute($value){
        $this->attributes['mensagem'];
    }
}
