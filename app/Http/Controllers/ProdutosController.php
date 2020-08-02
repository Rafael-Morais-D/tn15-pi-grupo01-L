<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use Illuminate\Support\Facades\Auth;
use PhpOption\Option;

class ProdutosController extends Controller
{
    public function tabela() {
        
        if(Auth::check() === true) {
            $categorias = Categoria::all();

            $produtos = Produto::all();
            $produtos = Produto::paginate(10);
            return view('/admin/adm-produto')->with('produtos', $produtos)->with('categorias', $categorias);
        }
        return redirect()->route('admin.login');
    }

    /* */
    public function create(Request $request) {

        $request->validate([
            'ref' => 'required',
            'nome' => 'required',
            'imagem' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'unidadeMedida' => 'required',
            'categoria_id' => 'required'
        ]);

        $image = $request->file('image');

        if(empty($image)) {
            $pathRelative = null;
        } else {
            $image->storePublicly('uploads');
            
            $absolutePath = public_path()."/storage/uploads";
            
            $name = $image->getClientOriginalName();

            $image->move($absolutePath, $name);

            $pathRelative = "storage/uploads/$name";
        };

        $produto = new Produto;

        $produto->ref = $request->ref;
        $produto->nome = $request->nome;
        $produto->image = $pathRelative;
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
            'categoria' => 'required'
        ]);

        $categoria = Produto::find($id);

        $categoria->categoria = $request->categoria;

        $categoria->update();

        return redirect()->route('adm-categoria', ['success' => 'Categoria alterada com sucesso!']);
    }

    public function delete($id) {

        $categoria = Produto::find($id);

        if($categoria->delete()){

            return redirect()->route('adm-categoria', ['success' => 'Categoria excluída com sucesso!']);

        };
    }
}