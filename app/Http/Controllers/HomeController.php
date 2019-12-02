<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

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
        $categorias = Category::all();
        $productos = Product::all();

        return view('home', compact('productos','categorias'));
    }
    public function busqueda(Request $busca){
      // dd($busca['busca']);
      $categorias = Category::all();
      $productos = Product::where('title','LIKE',"%{$busca->get('busca')}%")->get();
      return view('busqueda', compact('categorias','productos'));
   }
}
