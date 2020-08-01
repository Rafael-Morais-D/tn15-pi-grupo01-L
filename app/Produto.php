<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produto extends Model
{
    protected $table = "produtos";
    protected $fillable = ['ref', 'nome', 'descricao', 'preco', 'unidadeMedida', 'imagem', 'categoria_id'];

    public function setNomeAttribute($value){
        $this->attributes['nome'] = $value;

    }
}