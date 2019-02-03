<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exposicao;
use App\Http\Resources\ExposicaoResource;

class ExposicaoController extends Controller
{


  public function store(Request $request){
      $exposicao = new Exposicao;
      $exposicao->ala = $request->ala;
      $exposicao->tipo = $request->tipo;
      $exposicao->nome_da_sala = $request->nome_da_sala;
      $exposicao->qtd_de_artes = $request->qtd_de_artes;
      $exposicao->inicio_data = $request->inicio_data;
      $exposicao->data_de_termino = $request->data_de_termino;
      $exposicao->responsavel = $request->responsavel;
      $exposicao->save();
      return new ExposicaoResource($exposicao);
    }


    public function index(){
      return ExposicaoResource::collection(Exposicao::all());
    }


    public function update(Request $request, $id){
      $exposicao = Exposicao::findOrFail($id);
      if($request->ala)
        $exposicao->ala = $request->ala;
      if($request->tipo)
        $exposicao->tipo = $request->tipo;
      if($request->qtd_de_artes)
        $exposicao->qtd_de_artes = $request->qtd_de_artes;
      if($request->inicio_data)
        $exposicao->inicio_data = $request->inicio_data;
      if($request->nome_da_sala)
        $exposicao->nome_da_sala = $request->nome_da_sala;
      if($request->data_de_termino)
        $exposicao->data_de_termino = $request->data_de_termino;
      if($request->responsavel)
        $exposicao->responsavel = $request->responsavel;
      $exposicao->save();
      return response()->json([$exposicao]);
    }


    public function destroy($id){
      Exposicao::destroy($id);
      return response()->json(['foi apagado.']);
    }


    public function show($id){
      $exposicao = Exposicao::findOrFail($id);
      return response()->json([$exposicao]);
    }


}
