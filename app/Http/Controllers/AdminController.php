<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Administrator;
use App\Code;
use App\User;
use App\Product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('/admin.index',compact('ususarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('/admin/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $datos)
    {
       $code = Code::find(1);
       if (password_verify ( $datos['code'] , $code['code'] )) {
        $rules = [
            "fullName" => 'required|string',
            "userName" => 'required|string',
            "email" => 'required|string',
            "password" => 'required|string',
            "birth" => 'required|string',
        ];

        $this->validate($datos,$rules);

        $admin = new Administrator();

        $admin -> fullName = $datos['fullName'];
        $admin -> userName = $datos['userName'];
        $admin -> email = $datos['email'];
        $admin -> password = bcrypt($datos['password']);
        $admin -> birth = $datos['birth'];

        $admin -> save();
       }else{
           dd('el código es incorrecto');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $datos)
    {

       $reg = Administrator::where('userName',$datos['userName'])->first();

      if ($reg != null) {
        if (Hash::check($datos['password'], $reg['password'])) {
            session_start();
            $_SESSION['userAdmin'] = $reg["userName"];
            $userAdmin = $_SESSION['userAdmin'];
            $idAdmin = $reg['id'];
            return view('/homeAdmin',compact('userAdmin','idAdmin'));
        }else{
            dd('no coicide');
        };
      }else{
          dd('el usuario no se encuentra registrado');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        session_start();
        session_destroy();
        return redirect('/');
    }

    public function users(){
        session_start();
        $usuarios = User::all();
        $userAdmin = $_SESSION['userAdmin'];
        $reg = Administrator::where('userName',$userAdmin)->first();
        $idAdmin = $reg['id'];
            return view('/admin.users',compact('userAdmin','idAdmin','usuarios'));

    }
    public function posteos($id){
        session_start();
        $usuario = User::find($id);
        $productos = Product::where('user_id',$usuario->id)->get();
        $userAdmin = $_SESSION['userAdmin'];
        $reg = Administrator::where('userName',$userAdmin)->first();
        $idAdmin = $reg['id'];
            return view('/admin.posteos',compact('userAdmin','idAdmin','productos','usuario'));

    }
}
