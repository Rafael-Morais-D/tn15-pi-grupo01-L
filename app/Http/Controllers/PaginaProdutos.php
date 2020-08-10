<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Categoria;

use Illuminate\Http\Request;

class PaginaProdutos extends Controller
{
    public function index() {

        $categorias = Categoria::all();
        $produtos = Produto::all();
        
        return view('/produtos')->with('produtos', $produtos)->with('categorias', $categorias);
        
    }
}
