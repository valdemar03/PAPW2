<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use blog\Http\Requests;
use blog\Comentario;
use Illuminate\Support\Facades\Redirect;
use blog\Http\Requests\UsuarioFormRequest;
use DB;

class ComentarioController extends Controller
{
    public function __construct(Request $request)
    {

    }
    public function index()
    {
        if($request)
        {
            $query=trim($request->get('serchText'));
            $comentario=DB::table('comentario')->where('contenidoCOmentario','LIKE','%'.$query.'%');
            return view('comentario.index',["comentario"=>$comentario,"serchText"=>$query]);
        }
    }
    public function create()
    {
        return view("comentario.create");
    }
    public function store(ComentarioFormRequest $request)
    {
        $comentario = new Comentario;
        $comentario->contenidoComentario=$request->get('contenidoComentario');
        $comentario->fechaPublicacionComentario=$request->get('fechaPublicacionComentario');
        $comentario->activo='1';
        $comentario->idTrailer_Comentario='1';
        $comentario->idUsuario_COmentario='1';
        $comentario->save();
        return Redirect::to('comentario');
    }
    public function show($id)
    {
        return view("comentario.show",["comentario"=>Comentario::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("comentario.edit",["comentario"=>Comentario::findOrFail($id)]);
    }
    public function update(ComentarioFormRequest $request,$id)
    {
        $comentario=Comentario::findOrFail($id);
        $comentario->contenidoComentario=$request->get('contenidoComentario');
        $comentario->fechaPublicacionComentario=$request->get('fechaPublicacionComentario');
        $comentario->update();
        return Redirect::to('comentario');
    }
    public function destroy($id)
    {
        $comentario=Comentario::findOrFail($id);
        $comentario->activo='1';
        $comentario->idTrailer_Comentario='1';
        $comentario->idUsuario_Comentario='1';
        $usuario->update();
        return Redirect::to('comentario');
    }
}
