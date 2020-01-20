<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Product;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class EditarProductController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form($id)
    {
        $categorias = Category::all();
        $producto = Product::find($id);
        $interesesReg = $producto->intereses;
        $intereses = explode(",",$interesesReg);

        return view('/editarProduct', compact('producto','categorias','intereses','i'));
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
        $producto = Product::find($datos['id']);

        if ($datos['categoria']==null) {
           $datos['categoria'] = $producto->category_id;
        }
        $rules = [
            "titulo" => 'required|string',
            "valor" => 'required|integer',
            "image1" => 'mimes:jpg,jpeg,png,webp',
            "image2" => 'mimes:jpg,jpeg,png,webp',
            "image3" => 'mimes:jpg,jpeg,png,webp',
        ];

        $this->validate($datos,$rules);



        $producto -> title = $datos['titulo'];
        $producto -> value = $datos['valor'];
        $producto -> category_id = $datos['categoria'];
        $producto -> description = $datos['descripcion'];

        if ($datos['image1'] != null) {
            if(file_exists('storage/images/products/'.$producto->image1)){
                unlink('storage/images/products/'.$producto->image1);
            }
            $ruta = $datos -> file('image1') -> store('public/images/products');
            $image = basename($ruta);
            $producto -> image1 = $image;
        }
        if ($datos['image2'] != null) {
            if(file_exists('storage/images/products/'.$producto->image2)){
                unlink('storage/images/products/'.$producto->image2);
            }
            $ruta = $datos -> file('image2') -> store('public/images/products');
            $image = basename($ruta);
            $producto -> image2 = $image;
        }
        if ($datos['image3'] != null) {
            if(file_exists('storage/images/products/'.$producto->image3)){
                unlink('storage/images/products/'.$producto->image3);
            }
            $ruta = $datos -> file('image3') -> store('public/images/products');
            $image = basename($ruta);
            $producto -> image3 = $image;
        }

        $producto -> save();

        return redirect('/cuenta?id=nav-profile-tab');
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
    public function imagen(Request $request)
    {
dd($request);
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
        $registro = Product::find($id);
        $registro->delete();

        return redirect()->back();
    }


}
