<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
//===========================================================
// Lista todos Tenants GET
//===========================================================
    public function list(){
    
        $tenants = Tenant::all();
      if ($tenants) {
        return response()->json($tenants,200);
      } else {
        return response()->json(['erro'=>'Tenants não encontradas'],404);
      }
    
        }
//============================================================
// Adiciona um Tenant POST
//============================================================
    public function add(Request $request){
    
        $array = ['erro'=>''];
       

        $nome = $request->nome;
        $logotipo = $request->file('logotipo');
        $cover = $request->file('cover');
        $cor_fundo = $request->cor_fundo;
        $cor_texto = $request->cor_texto;
        $endereco = $request->endereco;
        $bairro = $request->bairro;
        $cidade = $request->cidade;
        $estado = $request->estado;
        $contato = $request->contato;
        $categoria_id = $request->categoria_id;

       

        if($categoria_id && $nome){
    
          $logotipo_url = $logotipo->store('imagens/tenants/logotipo','public');
          $cover_url = $cover->store('imagens/tenants/cover','public');

          $tenant = new Tenant();
          $tenant->nome = $nome;
          $tenant->logotipo = $logotipo_url;
          $tenant->cover = $cover_url;
          $tenant->cor_fundo = $cor_fundo;
          $tenant->cor_texto = $cor_texto;
          $tenant->endereco = $endereco;
          $tenant->bairro = $bairro;
          $tenant->cidade = $cidade;
          $tenant->estado = $estado;
          $tenant->contato = $contato;
          $tenant->categoria_id = $categoria_id;
          $tenant->save();
          
          return response()->json($tenant,201);
    
        } else {
    
          $array['erro'] = "Requisição mal formatada";
          return response()->json($array,400);
    
        }
    
    }    
//================================================================
// Recupera um Tenant por Id GET
//================================================================
    public function getById($id) {
    
        $tenant = Tenant::find($id);
    
        if ($tenant === null){
           return response()->json(['erro'=>'Tenant não encontrado'],404);
        } else {
           return response()->json($tenant,200);
        }
    
    }
    
}
