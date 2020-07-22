<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    // LISTAR USUÁRIOS
    public function listAllUsers(){

        if(Auth::check() === true){
            $users = User::paginate(10);
            return view('admin.adm-usuario')->with('users', $users);
        }
        return redirect()->route('admin.login');
    }
}