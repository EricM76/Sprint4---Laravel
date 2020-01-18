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
        $autos = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','1')->orderBy('created_at', 'desc')->paginate(4);
        $inmuebles = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','2')->orderBy('created_at', 'desc')->paginate(4);
        $muebles = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','3')->orderBy('created_at', 'desc')->paginate(4);
        $herramientas = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','4')->orderBy('created_at', 'desc')->paginate(4);
        $electrodomesticos = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','5')->orderBy('created_at', 'desc')->paginate(4);
        $gamers = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','6')->orderBy('created_at', 'desc')->paginate(4);
        $juguetes = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','7')->orderBy('created_at', 'desc')->paginate(4);
        $libros = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','8')->orderBy('created_at', 'desc')->paginate(4);
        $rodados = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','9')->orderBy('created_at', 'desc')->paginate(4);
        $celulares = Product::where('user_id','!=',Auth::user()->id)->where('category_id','like','10')->orderBy('created_at', 'desc')->paginate(4);
        $productos = Product::where('user_id','!=',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(12);

        return view('home', compact('productos','categorias','autos','inmuebles','muebles','herramientas','electrodomesticos','gamers','juguetes','libros','rodados','celulares'));
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
