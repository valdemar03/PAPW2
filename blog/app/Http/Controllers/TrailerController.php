<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use blog\Http\Requests;
use blog\Trailer;
use Illuminate\Support\Facades\Redirect;
use blog\Http\Requests\UsuarioFormRequest;
use DB;

class TrailerController extends Controller
{
    public function __construct(Request $request)
    {

    }
    public function index()
    {
        if($request)
        {
            $query=trim($request->get('searchText'));
            $trailer=DB::table('trailer')->where('titulo','LIKE','%'.$query.'%');
            return view("trailer.index",["trailer"=>$trailer,"serchText"=>$query]);
        }
    }
    public function create()
    {
        return view("trailer.create");
    }
    public function store(TrailerFormRequest $request)
    {
        $trailer = new Trailer;
        $trailer->titulo=$request->get('titulo');
        $trailer->descripcion=$request->get('descripcion');
        $trailer->fechaPublicacion=$request->get('fechaPublicacion');
        $trailer->activo='1';
        $trailer->idUsuario_Trailer='1';
        $trailer->save();
        return Redirect::to('trailer');
    }
    public function show($id)
    {
        return view("trailer.show",["trailer"=>Trailer::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("trailer.edit",["trailer"=>Trailer::findOrFail($id)]);
    }
    public function update(TrailerFormRequest $request)
    {
        $trailer=Trailer::findOrFail($id);
        $trailer->titulo=$request->get('titulo');
        $trailer->descripcion=$request->get('descripcion');
        $trailer->fechaPublicacion=$request->get('fechaPublicacion');
        $trailer->idUsuario_Trailer='1';
        $trailer->update();
        return Redirect::to('trailer');
    }
    public function destroy($id)
    {
        $trailer=Trailer::findOrFail($id);
        $trailer->activo="1";
        $trailer->activo='1';
        $trailer->idUsuario_Trailer='1';
        $trailer->update();
        return Redirect::to('trailer');
    }
}
