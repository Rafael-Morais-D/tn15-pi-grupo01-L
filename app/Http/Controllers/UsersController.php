<?php

namespace App\Http\Controllers;

use App\User;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    // LISTANDO USUÁRIOS
    public function listAllUsers() {

        if(Auth::check() === true) {
            $users = Usuario::all();
            $users = Usuario::paginate(10);
            return view('admin.adm-usuario')->with('users', $users);
        }
        return redirect()->route('admin.login');
    }

    // PÁGINA DE CADASTRO DE USUÁRIOS
    public function createPage(){
        return view('cadastro');
    }

    // CRIANDO NOVO USUÁRIO
    public function createUser(Request $request) {

        $request->validate([

            'inputSenha'=> 'required|min:6',
            'inputConfirma'=> 'required|same:inputSenha|min:6',
        ]);

        $password = $request->inputSenha;

        $user = new Usuario;

        $user->nome = $request->inputNome;
        $user->endereco = $request->inputEndereco;
        $user->cep = $request->inputCep;
        $user->cidade = $request->inputCidade;
        $user->uf = $request->inputUF;
        $user->password = $request->inputSenha;
        $user->email = $request->inputEmail;
        $user->password = Hash::make($request->inputSenha);

        $user->save();

        if ($user) {
            return redirect()->route('cadastro', ['success' => 'Cadastro criado com sucesso!']);
        }

        if($user){
            $credentials = [
                'email'=> $user->email,
                'password'=> $password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('home');
            }
            return view('cadastro');
        }
    }
    

    // PÁGINA DE EDIÇÃO DE USUÁRIO
    public function editUser($id) {
        $users = Usuario::find($id);
        if($users) {
            return view('user-edicao-usuario')->with('users', $users);
        }
    }

    // EDITANDO USUÁRIO
    public function updateUser(Request $request, $id) {

        $user = Usuario::find($id);

        $user->nome = $request->inputNome;
        $user->endereco = $request->inputEndereco;
        $user->cep = $request->inputCep;
        $user->cidade = $request->inputCidade;
        $user->uf = $request->inputUF;
        $user->email = $request->inputEmail;
        $user->password = $request->inputSenha;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $user->email = $request->inputEmail;
        }

        if(!empty($request->inputSenha)) {
            $request->validate([

                'inputSenha'=> 'min:6',
                'inputConfirma'=> 'same:inputSenha|min:6',
            ]);

            $user->password = Hash::make($request->inputSenha);
        }

        $user->update();

        if ($user) {
            return redirect()->route('user-edicao-usuario', ['success' => 'Cadastro atualizado com sucesso!']);
        } 
        return redirect()->route('user-edicao-usuario');
    }

    // DELETANDO USUÁRIOS
    public function deleteUser($id) {
        $user = Usuario::find($id);
        if($user->delete()) {
            return redirect()->route('admin.adm-usuario', ['success' => 'Usuário excluído com sucesso!']);

        }
    }

    
}