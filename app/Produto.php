<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Produto extends Model
{
    use SoftDeletes;

    protected $table = "produtos";
    protected $fillable = ['ref', 'nome', 'descricao', 'preco', 'unidadeMedida', 'imagem', 'categoria_id', 'ativo'];

}