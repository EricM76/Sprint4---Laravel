<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Auth;

class PublicarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        return view('publicar',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $datos)
    {


        $rules = [
            "titulo" => 'required|string',
            "valor" => 'required|integer',
            "categoria" => 'required|integer',
            "imagen1" => 'required|mimes:jpg,jpeg,png,webp',
            "imagen2" => 'required|mimes:jpg,jpeg,png,webp',
            "imagen3" => 'required|mimes:jpg,jpeg,png,webp',
            "intereses" => 'required',
            "descripcion" => 'required',
        ];

        $this->validate($datos,$rules);
        $user = Auth::user();
        $producto = new Product();

        $producto -> date = now();
        $producto -> title = $datos['titulo'];
        $producto -> value = $datos['valor'];
        $producto -> category_id = $datos['categoria'];
        $producto -> description = $datos['descripcion'];
        $producto -> user_id = $user['id'];
        $ruta = $datos -> file('imagen1') -> store('public/images/products');
        $image = basename($ruta);
        $producto -> image1 = $image;
        $ruta = $datos -> file('imagen2') -> store('public/images/products');
        $image = basename($ruta);
        $producto -> image2 = $image;
        $ruta = $datos -> file('imagen3') -> store('public/images/products');
        $image = basename($ruta);
        $producto -> image3 = $image;
        $intereses = implode(",",$datos["intereses"]);
        $producto -> intereses = $intereses;
        $producto -> save();

        return redirect("/cuenta?id=nav-profile-tab");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
