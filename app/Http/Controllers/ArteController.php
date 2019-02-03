<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arte;

class ArteController extends Controller
{


  public function store(Request $request){
      $arte = new Arte;
      $arte->autor = $request->autor;
      $arte->tipo = $request->tipo;
      $arte->titulo = $request->titulo;
      $arte->tamanho = $request->tamanho;
      $arte->data = $request->data;
      $arte->doador = $request->doador;
      $arte->fk_id_exposicao = $request->fk_id_exposicao;
      $arte->save();
      return response()->json([$arte]);
    }


    public function index(){
      return Arte::all();
    }


    public function update(Request $request, $id){
      $arte = Arte::findOrFail($id);
      if($request->autor)
        $arte->autor = $request->autor;
      if($request->tipo)
        $arte->tipo = $request->tipo;
      if($request->tamanho)
        $arte->tamanho = $request->tamanho;
      if($request->data)
        $arte->data = $request->data;
      if($request->titulo)
        $arte->titulo = $request->titulo;
      if($request->doador)
        $arte->doador = $request->doador;
      if($request->fk_id_exposicao)
        $arte->fk_id_exposicao = $request->fk_id_exposicao;
      $arte->save();
      return response()->json([$arte]);
    }


    public function destroy($id){
      Arte::destroy($id);
      return response()->json(['foi apagado.']);
    }


    public function show($id){
      $arte = Arte::findOrFail($id);
      return response()->json([$arte]);
    }


}
