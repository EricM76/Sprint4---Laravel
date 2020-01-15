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



class CuentaController extends Controller
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

        $user = Auth::user();
        $posteos = Product::where('user_id',$user->id)->orderBy('created_at', 'desc')->get();
        $mensajes = Message::where('id_UserDestinity',$user->id)->orderBy('created_at', 'desc')->get();
        if ($mensajes->isEmpty())
        {
            $sinMensajes = "No tenés mensajes";

        }

        $propuestas = Message::where('id_UserOrigin',$user->id)->orderBy('created_at', 'desc')->get();
        if ($propuestas->isEmpty()) { $sinPropuestas = "No has hecho propuestas de truekeo";}

        $categorias = Category::all();
        $productos = Product::all();
        return view('/cuenta',compact('categorias','posteos','mensajes','productos','propuestas','sinMensajes','sinPropuestas'));
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
    public function store(Request $img)
    {
        if ($img -> file('imagen') == null) {
            return redirect()->back();
        }
        $id = Auth::user()->id;
        $registro = User::find($id);
        $ruta = $img -> file('imagen') -> store('public/images/avatar');
        $img = basename($ruta);
        // Storage::delete('public/images/avatar/'.$registro -> profile);
        $registro -> profile = $img;
        $registro -> save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($avatar)
    {
        // dd($avatar);
        $id = Auth::user()->id;
        $registro = User::find($id);
        $registro -> profile = $avatar;
        $registro -> save();
        return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, $id)
    {
        // dd($datos);
        $reg = User::find($id);
        if ($datos['nombre']==null) {
           $datos['nombre'] = $reg -> name;
        }
        if ($datos['apellido']==null) {
           $datos['apellido'] = $reg -> surname;
        }
        if ($datos['fecha']==null) {
           $datos['fecha'] = $reg -> birth;
        }
        if ($datos['genero']==null) {
           $datos['genero'] = $reg -> gender;
        }
        if ($datos['direccion']==null) {
           $datos['direccion'] = $reg -> address;
        }
        if ($datos['localidad']==null) {
           $datos['localidad'] = $reg -> city;
        }
        if ($datos['provincia']==null) {
           $datos['provincia'] = $reg -> state;
        }
        if ($datos['telefono']==null) {
           $datos['telefono'] = $reg -> phone;
        }
        if ($datos['celular']==null) {
           $datos['celular'] = $reg -> mobile;
        }

        $rules = [
            "nombre" => 'required|string',
            "apellido" => 'required|string',
            "fecha" => 'required|date',
        ];


        $this->validate($datos,$rules);



        $reg -> name = $datos['nombre'];
        $reg -> surname = $datos['apellido'];
        $reg -> birth = $datos['fecha'];
        $reg -> gender = $datos['genero'];
        $reg -> address = $datos['direccion'];
        $reg -> city = $datos['localidad'];
        $reg -> state = $datos['provincia'];
        $reg -> phone = $datos['telefono'];
        $reg -> mobile = $datos['celular'];
        $reg -> profile = $reg -> profile;

        $reg -> save();

        return redirect()->back();
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

    public function posteos()
    {
        $user = Auth::user();
        $posteos = Product::where('user_id',$user->id)->get();
        $categorias = Category::all();
        return view('/cuenta', compact('categorias','posteos'));
    }
}
