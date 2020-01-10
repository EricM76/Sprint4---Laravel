<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $productos = Product::where('user_id','!=',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);
        return view('home', compact('productos','categorias'));
    }

    public function detalle($id){
      $categorias = Category::all();
        $productos = Product::find($id);
        $interesesReg = $productos->intereses;
      $intereses = explode(",",$interesesReg);

      $vac= compact('productos','categorias','intereses');
      return view('detalleproducto',$vac);
    }

    public function busqueda(Request $busca){
      // dd($busca['busca']);
      $categorias = Category::all();
      $productos = Product::where('title','LIKE',"%{$busca->get('busca')}%")->get();
      return view('busqueda', compact('categorias','productos'));
   }

   public function intereses($interes,$id)
   {
    $categorias = Category::all();
      $productos = Product::find($id);
      $interesesReg = $productos->intereses;
      $intereses = explode(",",$interesesReg);
    $categoria = Category::where('name',$interes)->get();
    $categoria = $categoria[0]['id'];
    $regInteres = DB::table('products')
    ->where('user_id',Auth::user()->id)
    ->where('category_id',$categoria)
    ->get();


    return view('/detalleproducto',compact('categorias','productos','intereses','regInteres'));
   }
}
