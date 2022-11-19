<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenantcategoria;
class TenantcategoriaController extends Controller
{
    //

//===========================================================
// Lista todas as tenant categorias GET
//===========================================================
public function list(){

    $categorias = Tenantcategoria::all();
  if ($categorias) {
    return response()->json($categorias,200);
  } else {
    return response()->json(['erro'=>'Categorias não encontradas'],404);
  }

    }
//============================================================
// Adiciona uma categoria POST
//============================================================
public function add(Request $request){

    $array = ['erro'=>''];
    $nome = $request->nome;
    $imagem = $request->file('imagem');
    if($imagem && $nome){

      $imagem_url = $imagem->store('imagens/tenantcategoria','public');
      $categoria = new Tenantcategoria();
      $categoria->nome = $nome;
      $categoria->imagem = $imagem_url;
      $categoria->save();
      
      return response()->json($categoria,201);

    } else {

      $array['erro'] = "Requisição mal formatada";
      return response()->json($array,400);

    }

}    
//================================================================
// Recupera um Serviço por Id GET
//================================================================
public function getById($id) {

    $categoria = Tenantcategoria::find($id);

    if ($categoria === null){
       return response()->json(['erro'=>'Categoria não encontrado'],404);
    } else {
       return response()->json($categoria,200);
    }

}

}
