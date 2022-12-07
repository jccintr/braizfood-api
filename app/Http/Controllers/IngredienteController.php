<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;

class IngredienteController extends Controller
{

//================================================================
// Lista os ingredientes de um Tenant GET
//================================================================

public function getByTenant($idTenant)

{

  $ingredientes = Ingrediente::where('tenant_id',$idTenant)->get();

  if ($ingredientes) {
    return response()->json($ingredientes,200);
  } else {
    return response()->json(['erro'=>'Ingredientes não encontradas'],404);
  }

}

//================================================================
// Adiciona um Ingrediente POST
//================================================================

public function add(Request $request) {

    $tenant_id = $request->tenant_id;
    $nome = $request->nome;

    if ($nome and $tenant_id) {

       $ingrediente = new Ingrediente();
       $ingrediente->nome = $nome;
       $ingrediente->tenant_id = $tenant_id;
       $ingrediente->save();
       return response()->json($ingrediente,201);

    } else {

        $array['erro'] = "Requisição mal formatada";
        return response()->json($array,400);
    }

}

//================================================================
// Aletera um Ingrediente POST
//================================================================
public function update($id,Request $request) {
    
    $novo_nome = $request->nome;

    if ($novo_nome and $id) {
        $ingrediente = Ingrediente::find($id);
        if ($ingrediente) {
            $ingrediente->nome = $novo_nome;
            $ingrediente->save();
            return response()->json($ingrediente,200);
        } else {
            $array['erro'] = "Ingrediente não encontrado.";
            return response()->json($array,404);
        }
    } else {

        $array['erro'] = "Requisição mal formatada";
        return response()->json($array,400);

    }
  
    
}
}
