<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;

class CestaComprasController extends Controller
{
    // public function index() {
    //     return view('cesta-compras');
    // }

    function __contruct() {
        $this->middleware('auth');
    }

    // ACESSANDO A PÁGINA CESTA DE COMPRAS
    public function index() {

        $pedidos = Pedido::where([
            'status'=>'RE',
            'user_id'=>Auth::id()
            ])->get();
        
            return view('cesta-compras', compact('pedidos'));
        }

    // ADICIONANDO PRODUTO A CESTA
    public function adicionar() {

        $this->middleware('VerifyCsrfToker');

        $req = Request();
        $idproduto = $req->input('id');

        $produto = Produto::find($idproduto);
        if(empty($produto->id)) {
            $req->session()->flash('mensagem falha', 'Produto não encontrado!');
            return redirect()->route('cesta-compras');
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id'=>$idusuario,
            'status'=> 'RE'
        ]);
        
        if(empty($idpedido)) {
            $pedido_novo = Pedido::create([
                'user_id'=>$idusuario,
                'status'=>'RE'
            ]);

            $idpedido = $pedido_novo->id;
        }

        PedidoProduto::create([
            'pedido_id'=>$idpedido,
            'produto_id'=>$idproduto,
            'valor'=>$produto->valor,
            'status'=>'RE'
        ]);
        
        $req->session()->flash('mensagem-sucesso', 'Produto adicionado a cesta de compras!');

        return redirect()->route('cesta-compras');
    }    

    // REMOVENDO PRODUTO DA CESTA
    public function remover() {

        $this->middleware('VerifyCsrfToker');

        $req = Request();
        $idpedido = $req->input('pedido_id');
        $idproduto = $req->input('produto_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'id' => $idpedido,
            'user_id'=> $idusuario,
            'status'=> 'RE'
        ]);

        if( empty($idpedido)) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado');
            return redirect()->route('cesta-compras');
        }

        $where_produto = [
            'pedido_id' => $idpedido,
            'produto_id'=>$idproduto
        ];

        $produto = PedidoProduto::where($where_produto)->orderBy('id', 'desc')->first();
        if(empty($produto->id)) {
            $req->session()->flash('mensagem-falha', "Produto não encontrado na cesta de compras!");
            return redirect()->route('cesta-compras');
        }

        if($remove_apenas_item) {
            $where_produto['id'] = $produto->id;
        }

        PedidoProduto::where($where_produto)->delete();

        $check_pedido = PedidoProduto::where(['pedido_id'=>$produto->pedido_id])->exists();

        if(!$check_pedido) {
            Pedido::where([
                'id'=>$produto->pedido_id
            ])->delete();
        }

        $req->session()->flash('mensagem-sucesso', 'Produto removido da cesta de compras!');

        return redirect()->route('cesta-compras');
    }

//     // CONVERTER OS PRODUTOS NA SESSION EM ITENS DA BASE DE DADOS
//     public function converterPedido() {

//         if(Auth::check()===false){
//             return redirect()->route('login.direct');
//         }

//         $cart = Session::get('cart');

//         $idusuario = Auth::id();

//         $idpedido = Pedido::consultaId([
//             'user_id'=>$idusuario,
//             'status'=> 'RE'
//         ]);

//         $check_items = PedidoProduto::where(['pedido_id'=>$idpedido])->exists();

//         if($idpedido){
//             if($check_items){
//                 PedidoProduto::where(['pedido_id'=>$idpedido])->delete();
//             }
//             Pedido::where([
//                 'id'=>$idpedido
//             ])->delete();
//         }

//         $pedido_novo = Pedido::create([
//             'user_id'=>$idusuario,
//             'status'=>'RE'
//         ]);

//         $idpedido = $pedido_novo->id;

//         $produtos = $cart->produtos;

//         foreach ($produtos as $produto) {
//             for ($i=0;$i<$produto['qtd'];$i++){
//                 PedidoProduto::create([
//                     'pedido_id'=>$idpedido,
//                     'produto_id'=>$produto['produto']['id'],
//                     'valor'=>$produto['produto']['valor
//                     'status'=>'RE'
//                 ]);
//             }
//         }
//         return redirect()->route('pagina.finalizar');
//     }

//     // CONCLUINDO O PEDIDO
//     public function concluir(){
//         $this->middleware('VerifyCsrfToker');

//         $req = Request();
//         $idpedido = $req->input('pedido_id');
//         $idusuario = Auth::id();


//         $check_pedido = Pedido::where([
//             'id' => $idpedido,
//             'user_id'=>$idusuario,
//             'status'=>'RE'
//         ])->exists();
        
//         if(!$check_pedido){
//             $req->session()->flash('mensagem-falha', 'Pedido não encontrado');
//             return redirect()->route('cesta-compras');
//         }

//         $check_produtos = PedidoProduto::where([
//             'pedido_id'=>$idpedido,
//             'status'=>'RE'
//         ])->exists();

//         if(!$check_produtos){
//             $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
//             return redirect()->route('cesta-compras');
//         }

//         PedidoProduto::where([
//             'pedido_id'=>$idpedido
//         ])->update([
//             'status'=> 'PA'
//         ]);
//         Pedido::where([
//             'id'=>$idpedido
//         ])->update([
//             'status'=>'PA'
//         ]);

//         $pedido = Pedido::where([
//             'id'=>$idpedido
//         ])->first();

//         return view('compraFinalizada')->with('pedido', $pedido);

//     }

//     // FINALIZANDO O PEDIDO - PAGAMENTO
//     public function compras(Request $request) {
        
//         if(Auth::check()===true) {
//             $pedidos = Pedido::where([
//                 'status'=>'RE',
//                 'user_id'=>Auth::id()
//             ])->get();
        
//             return view('user.finalizarCompra', compact('pedidos'));
            
//         }
        
//     }



}


