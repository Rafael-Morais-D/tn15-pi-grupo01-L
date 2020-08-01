<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    public function tabela() {
        
        if(Auth::check() === true) {
            $produtos = Produto::all();
            $produtos = Produto::paginate(10);
            return view('/admin/adm-produto')->with('produtos', $produtos);
        }
        return redirect()->route('admin.login');
    }
}