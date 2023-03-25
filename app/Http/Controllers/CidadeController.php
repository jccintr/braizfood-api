<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cidade;
use Illuminate\Support\Facades\Storage;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::orderBy('nome')->get();
        return response()->json($cidades->values()->all(),200);
    }

    public function store(Request $request)
    {
        $imagem = $request->file('imagem');
        $nome = $request->nome;
        $estado = $request->estado;

        if ($nome and $estado) {
            $cidade = new Cidade();
            $cidade->nome = $nome;
            $cidade->estado = $estado;
            if($imagem){
                $imagem_url = $imagem->store('imagens/cidades','public');
                $cidade->imagem = $imagem_url;
            }
            $cidade->save();
            return response()->json($cidade,201);
        } else {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

    }

    public function update(Request $request, $id)
    {
        $cidade = Cidade::find($id);

        if($cidade){
            $novoNome = $request->nome;
            $novoEstado = $request->estado;
            $novaImagem = $request->imagem;
           
            if($novoNome and $novoEstado) {
                $cidade->nome = $novoNome;
                $cidade->estado = $novoEstado;
                if($novaImagem){
                    if($cidade->imagem){
                        Storage::disk('public')->delete($cidade->avatar);
                     }
                     $imagem_url = $novaImagem->store('imagens/cidades','public');
                     $cidade->imagem = $imagem_url;
                }
                $cidade->save();
                return response()->json($cidade,200);
            } else {
              return response()->json(['erro'=>'Campos obrigatórios não informados.'],400);
            }
        } else {
            return response()->json(['erro'=>'Cidade não encontrada.'],404);
        }


  
      
    }
}
