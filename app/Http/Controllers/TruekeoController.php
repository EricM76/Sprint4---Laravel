<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
use App\User;
use App\Message;

class TruekeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/truekeo');
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
    public function store(Request $request)
    {
        // dd($request);
        $usuario = Auth::user();
        $categorias = Category::all();
        $producto = Product::find($request['producto']);
        $truekeo = Product::find($request['truekeo']);

       return view('/truekeo',compact('usuario','producto','truekeo','categorias'));
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
    public function propuesta($producto,$truekeo)
    {
        $producto = Product::find($producto);
        $truekeo = Product::find($truekeo);
        $mensaje = new Message();
        $mensaje -> status = 'propuesto';
        $mensaje -> id_UserOrigin = $truekeo->user_id;
        $mensaje -> id_UserDestinity = $producto->user_id;
        $mensaje -> truekeoOrigin = $truekeo->id;
        $mensaje -> truekeoDestinity = $producto->id;
        $mensaje -> message = 'Hola, soy ' .$truekeo->user->name. '. Te propongo TRUEKEAR tu ' .$producto->title. ' por mi ' .$truekeo->title. '. Si estás interesado confirma el truekeo';
        $mensaje -> save();
        return redirect('/cuenta?id=nav-misPropuestas-tab');
    }

    public function rechaza($id)
    {
        $registro = Message::find($id);

        $mensaje = new Message();
        $mensaje -> status = 'rechazado';
        $mensaje -> id_UserOrigin = $registro->id_UserDestinity;
        $mensaje -> id_UserDestinity = $registro->id_UserOrigin;
        $mensaje -> truekeoOrigin = $registro->truekeoDestinity;
        $mensaje -> truekeoDestinity = $registro->truekeoOrigin;
        $mensaje -> message = 'Hola, soy '.$registro->userDestinity->name. '. Agradezco tu propuesta de truekear tu '.$registro->ProductOrigin->title. ' por mi '.$registro->ProductDestinity->title. ', pero por ahora no estoy interesado';

        $mensaje -> save();
        $registro->delete();
        return redirect('/cuenta?id=nav-contact-tab');
    }

    public function desiste($id)
    {
        $registro = Message::find($id);
        $registro ->delete();
        return redirect('/cuenta?id=nav-misPropuestas-tab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function elimina($id)
    {
        $registro = Message::find($id);
        $registro ->delete();
        return redirect('/cuenta?id=nav-contact-tab');
    }
}
