<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Category;

class ModalController extends Controller
{
    public function index($id)
    {
        $categorias = Category::all();
        $mensaje = Message::find($id);
        // dd($mensaje);
        return view('/modal/modalMensajes',compact('mensaje','categorias'));
    }

    public function propuesta($id)
    {
        $categorias = Category::all();
        $mensaje = Message::find($id);
        return view('/modal/modalPropuesta',compact('mensaje','categorias'));
    }
}
