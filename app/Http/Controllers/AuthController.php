<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin() {

        if(Auth::check() === true) {
            return view('admin.adm-usuario');
        }
        return redirect()->route('admin.login');
    }

    public function showLoginForm() {
        return view('admin.formLogin');
    }

    public function login(Request $request) {
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin');
        }
        return redirect()->back()->withInput()->withErrors(['Ops, apenas funcionários da Bake & Go tem acesso a esta página!']);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin');
    }
}
