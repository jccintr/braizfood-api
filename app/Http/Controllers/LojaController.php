<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;
use Illuminate\Support\Facades\Storage;

class LojaController extends Controller
{
    public function index()
    {
        $lojas = Loja::orderBy('nome')->get();
        return response()->json($lojas->values()->all(),200);
    }

    public function store(Request $request)
    {
        $tipo_id = $request->tipo_id;
        $cidade_id = $request->cidade_id;
        $ativo = $request->ativo;
        $aberto = $request->aberto;
        $nome = $request->nome;
        $logotipo = $request->file('logotipo');
        $cor_fundo = $request->cor_fundo;
        $cor_texto = $request->cor_texto;
        $cover = $request->file('cover');
        $telefone = $request->telefone;
        $endereco = $request->endereco;
        $bairro = $request->bairro;
        $email = $request->email;
        $contato = $request->contato;
        $ramo_atividade = $request->ramo_atividade;

        if ($tipo_id and $cidade_id and $nome) {
            $loja = new Loja();
            $loja->tipo_id = $tipo_id;
            $loja->cidade_id = $cidade_id;
            $loja->ativo = $ativo;
            $loja->aberto = $aberto;
            $loja->nome = $nome;
            $loja->cor_fundo = $cor_fundo;
            $loja->cor_texto = $cor_texto;
            $loja->telefone = $telefone;
            $loja->endereco = $endereco;
            $loja->bairro = $bairro;
            $loja->email = $email;
            $loja->contato = $contato;
            $loja->ramo_atividade = $ramo_atividade;
            if($logotipo){
                $logotipo_url = $logotipo->store('imagens/lojas','public');
                $loja->logotipo = $logotipo_url;
            }
            if($cover){
                $cover_url = $cover->store('imagens/lojas','public');
                $loja->cover = $cover_url;
            }
            $loja->save();
            return response()->json($loja,201);
        } else {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

    }


    public function update(Request $request, $id)
    {
        $loja = Loja::find($id);

        if($loja){
            $tipo_id = $request->tipo_id;
            $cidade_id = $request->cidade_id;
            $ativo = $request->ativo;
            $aberto = $request->aberto;
            $nome = $request->nome;
            $logotipo = $request->file('logotipo');
            $cor_fundo = $request->cor_fundo;
            $cor_texto = $request->cor_texto;
            $cover = $request->file('cover');
            $telefone = $request->telefone;
            $endereco = $request->endereco;
            $bairro = $request->bairro;
            $email = $request->email;
            $contato = $request->contato;
            $ramo_atividade = $request->ramo_atividade;
                    
           
            if ($tipo_id and $cidade_id and $nome) {
                $loja->tipo_id = $tipo_id;
                $loja->cidade_id = $cidade_id;
                $loja->ativo = $ativo;
                $loja->aberto = $aberto;
                $loja->nome = $nome;
                $loja->cor_fundo = $cor_fundo;
                $loja->cor_texto = $cor_texto;
                $loja->telefone = $telefone;
                $loja->endereco = $endereco;
                $loja->bairro = $bairro;
                $loja->email = $email;
                $loja->contato = $contato;
                $loja->ramo_atividade = $ramo_atividade;
                if($logotipo){
                    if($loja->logotipo){
                        Storage::disk('public')->delete($loja->logotipo);
                     }
                     $logotipo_url = $logotipo->store('imagens/lojas','public');
                     $loja->logotipo = $logotipo_url;
                }
                if($cover){
                    if($loja->cover){
                        Storage::disk('public')->delete($loja->cover);
                     }
                     $cover_url = $cover->store('imagens/lojas','public');
                     $loja->cover = $cover_url;
                }
                $loja->save();
                return response()->json($loja,200);
            } else {
              return response()->json(['erro'=>'Campos obrigatórios não informados.'],400);
            }
        } else {
            return response()->json(['erro'=>'Loja não encontrada.'],404);
        }
    }



}
