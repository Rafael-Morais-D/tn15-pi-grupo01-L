<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nomeCompleto', 'CPF', 'RG', 'email', 'senha', 'telefone', 'CEP', 'endNum', 'endComp'
    ];
}
