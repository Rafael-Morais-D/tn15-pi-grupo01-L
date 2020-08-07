<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpOption\Option;

class ProdutosController extends Controller
{
    public function tabela() {
        
        if(Auth::check() === true) {
            // $categorias = DB::table('categorias')
            //                 ->join('produtos', 'categorias.id', '=', 'produtos.categoria_id')
            //                 ->select('categorias.categoria')
            //                 ->get();
            $categorias = Categoria::all();

            $produtos = Produto::all();
            $produtos = Produto::paginate(10);
            return view('/admin/adm-produto')->with('produtos', $produtos)->with('categorias', $categorias);
        }
        return redirect()->route('admin.login');
    }

    public function create(Request $request) {

        $request->validate([
            'ref' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'unidadeMedida' => 'required',
            'categoria_id' => 'required'
        ]);

        $image = $request->file('imagem');

        if(empty($image)) {
            $pathRelative = 'teste';
        } else {
            $image->storePublicly('uploads');
            
            $absolutePath = public_path()."/storage/uploads";
            
            $name = $image->getClientOriginalName();

            $image->move($absolutePath, $name);

            $pathRelative = "storage/uploads/$name";
        };


        // $categorias = DB::table('categorias')
            //                 ->join('produtos', 'categorias.id', '=', 'produtos.categoria_id')
            //                 ->select('categorias.categoria')
            //                 ->get();
        // $produtos = Produto::all();
        // $categorias = Categoria::all();
        // $categoria = $request->categoria;
        // $categoriaCerta = Categoria::find($categorias->id)->where($categoria = $categorias->categoria);
        // $produtoCerto = Produto::find($produtos->categoria_id);
        // $categoriaID = Categoria::find($categorias->categoria)->where( = );


        $produto = new Produto;

        $produto->ref = $request->ref;
        $produto->nome = $request->nome;
        $produto->imagem = $pathRelative;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->unidadeMedida = $request->unidadeMedida;
        $produto->categoria_id = $request->categoria_id;

        $produto->save();

        if ($produto) {
            return redirect()->route('adm-produto', ['success' => 'Produto criado com sucesso']);
        }
    }

    public function update(Request $request, $id) {

        $request->validate([
            'ref' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'unidadeMedida' => 'required',
            'categoria_id' => 'required'
        ]);

        $image = $request->file('imagem');

        if(empty($image)) {
            $pathRelative = 'teste';
        } else {
            $image->storePublicly('uploads');
            
            $absolutePath = public_path()."/storage/uploads";
            
            $name = $image->getClientOriginalName();

            $image->move($absolutePath, $name);

            $pathRelative = "storage/uploads/$name";
        };

        $produto = Produto::find($id);

        $produto->ref = $request->ref;
        $produto->nome = $request->nome;
        $produto->imagem = $pathRelative;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->unidadeMedida = $request->unidadeMedida;
        $produto->categoria_id = $request->categoria_id;

        $produto->update();

        return redirect()->route('adm-produto', ['success' => 'Produto alterado com sucesso!']);
    }

    public function delete($id) {

        $categoria = Produto::find($id);

        if($categoria->delete()){

            return redirect()->route('adm-produto', ['success' => 'Produto excluído com sucesso!']);

        };
    }
}