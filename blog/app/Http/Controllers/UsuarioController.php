<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use blog\Http\Requests;
use app\Models\Usuario;
use Illuminate\Support\Facades\Redirect;
use app\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    public function __construct(Request $request)
    {
        
    }
    public function index()
    {
        if($request)
        {
            $query=trim($request->get('searchText'));
            $Usuario=DB::table('usuario')->where('nombreUsuario','LIKE','%'.$query.'%');
            return view("usuario.index",["usuario"=>$usuario,"serchText"=>$query]);
        }
    }
    public function create()
    {
        return view("usuario.create");
    }
    public function store(UsuarioFormRequest $request)
    {
        $usuario = new Usuario;
        $usuario->nombreUsuario=$request->get('nombreUsuario');
        $usuario->apellidoPaterno=$request->get('apellidoPaterno');
        $usuario->apellidoMaterno=$request->get('apellidoMaterno');
        $usuario->username=$request->get('username');
        $usuario->password=$request->get('password');
        $usuario->tipoUsuario='1';
        $usuario->activo ='1';
        $usuario->idImagen_Usuario="1";
        $usuario->save();
        return Redirect::to('usuario');
    }
    public function show($id)
    {
        return view("usuario.show",["usuario"=>Usuario::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("usuario.edit",["usuario"=>Usuario::findOrFail($id)]);
    }
    public function update(UsuarioFormRequest $request,$id)
    {
        $usuario=Usuario::findOrFail($id);
        $usaurio->nombreUsuario=$request->get('nombreUsuario');
        $usaurio->apellidoPaterno=$request->get('apellidoPaterno');
        $usaurio->apellidoMaterno=$request->get('apellidoMaterno');
        $usaurio->usarname=$request->get('usarname');
        $usaurio->password=$request->get('password');
        $usuario->update();
        return Redirect::to('usuario');
    }
    public function destroy($id)
    {   
        $usuario=Usuario::findOrFail($id);
        $usuario->tipoUsuario="1";
        $usuario->activo ='1';
        $usuario->idImagen_Usuario="1";
        $usuario->update();
        return Redirect::to('usuario');
    }
}
