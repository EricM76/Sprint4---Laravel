<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;


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
        $categorias = Category::all();
        return view('cuenta',compact('categorias'));
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
    public function update(Request $datos, $id)
    {
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
        if ($datos['domicilio']==null) {
           $datos['domicilio'] = $reg -> home;
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
        $reg -> home = $datos['domicilio'];
        $reg -> phone = $datos['telefono'];
        $reg -> mobile = $datos['celular'];

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
}
