<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentoController extends Controller
{
    public function index()
    {
        $pagamentos = Pagamento::orderBy('nome')->get();
        return response()->json($pagamentos->values()->all(),200);
    }

    public function store(Request $request)
    {
        $loja_id = $request->loja_id;
        $nome = $request->nome;
        if ($loja_id and $nome) {
            $pagamento = new Pagamento();
            $pagamento->loja_id = $loja_id;
            $pagamento->nome = $nome;
            $pagamento->save();
            return response()->json($pagamento,201);
        } else {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

    }

    public function update(Request $request, $id)
    {
        $pagamento = Pagamento::find($id);

        if ($pagamento) {
            $nome = $request->nome;
            if ($nome) {
                $pagamento->nome = $nome;
                $pagamento->save();
                return response()->json($pagamento,200);
            } else {
              return response()->json(['erro'=>'Campos obrigatórios não informados.'],400);
            }
        } else {
            return response()->json(['erro'=>'Taxa não encontrada.'],404);
        }
    }
}
