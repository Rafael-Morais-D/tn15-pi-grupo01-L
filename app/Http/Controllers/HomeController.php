<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Categoria;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();

        return view('home')->with('produtos', $produtos)->with('categorias', $categorias);
    }
}
