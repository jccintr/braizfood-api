<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;
use Illuminate\Support\Facades\Storage;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::orderBy('nome')->get();
        return response()->json($tipos->values()->all(),200);
    }

    public function store(Request $request)
    {
        $imagem = $request->file('imagem');
        $nome = $request->nome;
        if ($nome) {
            $tipo = new Tipo();
            $tipo->nome = $nome;
            if($imagem){
                $imagem_url = $imagem->store('imagens/tipos','public');
                $tipo->imagem = $imagem_url;
            }
            $tipo->save();
            return response()->json($tipo,201);
        } else {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

    }

    public function update(Request $request, $id)
    {
        $tipo = Tipo::find($id);

        if($tipo){
            $novoNome = $request->nome;
            $novaImagem = $request->imagem;
           
            if($novoNome) {
                $tipo->nome = $novoNome;
                if($novaImagem){
                    if($tipo->imagem){
                        Storage::disk('public')->delete($tipo->imagem);
                     }
                     $imagem_url = $novaImagem->store('imagens/tipos','public');
                     $tipo->imagem = $imagem_url;
                }
                $tipo->save();
                return response()->json($tipo,200);
            } else {
              return response()->json(['erro'=>'Campos obrigatórios não informados.'],400);
            }
        } else {
            return response()->json(['erro'=>'Cidade não encontrada.'],404);
        }
    }
}
