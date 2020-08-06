<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;

class CestaComprasController extends Controller
{
    // public function index() {
    //     return view('cesta-compras');
    // }

    function __contruct() {
        $this->middleware('auth');
    }

    public function index(){

        if(Auth::check()===true) {
            $pedidos = Pedido::where([
                'status'=>'RE',
                'user_id'=>Auth::id()
            ])->get();
        
            return view('cesta-compras', compact('pedidos'));
            
        }
    }
    

    // public function produto($id = null) {
    //     if(!empty($id)) {
    //         $registro = Produto::where([
    //             'id' => $id,
    //             'ativo' => 'S'
    //         ])->first();

    //         if(!empty($registro)) {
    //             return view ('home.produto', compact('registro'));
    //         }
    //     }
    //     return redirect()->route('index');
    // }



}


